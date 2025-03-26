<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs - Commissioned Designs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E5E4E2;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #1E1E1E;
            padding: 10px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
            font-weight: bold;
        }

        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
        }

        .navbar-nav {
            flex-grow: 1;
            justify-content: center;
        }

        .navbar-nav .nav-link {
            color: white !important;
            text-transform: uppercase;
            font-weight: bold;
            margin: 0 10px;
        }

        .commissioned-hero {
            text-align: center;
            margin-bottom: 30px;
        }

        .commissioned-hero p {
            font-style: italic;
            color: #333;
        }

        .design-placeholder {
            background-color:  #A99D9D;
            color: black;
            font-style: bold;
            height: 500px;
        }

        .download-btn {
            background-color:  #A99D9D;
            color: black;
            font-style: bold;
            border: none;
        }

        .download-btn:hover {
            background-color:  #A99D9D;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="Homepage.php">
                <img src="/api/placeholder/40/40" class="rounded-circle">
                Metro District Designs
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="Homepage.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="Products.php">PRODUCTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="Commissioned.php">COMMISSIONED DESIGNS</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="Signup.php">SIGN-UP</a></li>
                    <li class="nav-item"><a class="nav-link" href="Login.php">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Commissioned Designs Section -->
    <div class="container mt-5">
        <div class="commissioned-hero">
            <h1>COMMISSIONED DESIGNS</h1>
            <p>"Looking for something unique? Get a custom design made just for you!"</p>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="design-placeholder"></div>
            </div>
            <div class="col-lg-4 d-flex flex-column justify-content-between">
                <div class="design-placeholder mb-3"></div>
                <button class="btn download-btn py-2">Download</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>