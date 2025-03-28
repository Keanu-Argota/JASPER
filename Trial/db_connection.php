<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "metrodistrictdesigns";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    ?>

<?php
<?php
session_start();

// Include database connection
require_once 'db_connection.php';

// Function to sanitize and validate input
function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate username (alphanumeric, no spaces)
function validateUsername($username) {
    return preg_match('/^[a-zA-Z0-9_]{3,20}$/', $username);
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize error array
    $errors = [];

    // Validate and sanitize username
    $username = validateInput($_POST['username'] ?? '');
    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (!validateUsername($username)) {
        $errors[] = "Username must be 3-20 characters long and contain only letters, numbers, and underscores.";
    }

    // Validate and sanitize email
    $email = validateInput($_POST['email'] ?? '');
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!validateEmail($email)) {
        $errors[] = "Invalid email format.";
    }

    // Validate password
    $password = $_POST['password'] ?? '';
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        $errors[] = "Password must include at least one uppercase letter, one lowercase letter, one number, and one special character.";
    }

    // Check if username or email already exists
    if (empty($errors)) {
        // Check for existing username
        $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row['count'] > 0) {
            $errors[] = "Username is already taken.";
        }
        $stmt->close();

        // Check for existing email
        $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row['count'] > 0) {
            $errors[] = "Email is already registered.";
        }
        $stmt->close();
    }

    // If no errors, proceed with registration
    if (empty($errors)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

        // Prepare SQL to insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);
        
        // Execute the statement
        if ($stmt->execute()) {
            // Registration successful
            $_SESSION['registration_success'] = "Registration successful! Please log in.";
            
            // Optional: Send welcome email
            $to = $email;
            $subject = "Welcome to Metro District Designs";
            $message = "Hello $username,\n\nThank you for registering with Metro District Designs!\n\nBest regards,\nMetro District Designs Team";
            $headers = "From: noreply@metrodistrict.com";
            
            // Uncomment the line below if you want to send an email (requires proper email configuration)
            // mail($to, $subject, $message, $headers);

            // Redirect to login page
            header("Location: Login.php");
            exit();
        } else {
            $errors[] = "Registration failed. Please try again.";
        }
        $stmt->close();
    }

    // If there are errors, store them in session and redirect back to signup
    if (!empty($errors)) {
        $_SESSION['registration_errors'] = $errors;
        header("Location: Signup.php");
        exit();
    }
} else {
    // If someone tries to access this page directly without POST
    header("Location: Signup.php");
    exit();
}
?>