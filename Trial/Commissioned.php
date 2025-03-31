<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs - Commissioned Designs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E5E4E2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        .navbar-nav.ms-auto {
            margin-right: 0 !important;
            align-items: center;
        }

        /* Search Bar Styles */
        .search-container {
            position: relative;
            margin-left: 15px;
        }

        .nav-icons {
            display: flex;
            align-items: center;
            color: white;
        }

        .nav-icons i {
            cursor: pointer;
            margin-left: 15px;
        }

        /* Search Popup Styles */
        .search-popup {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            display: none;
            width: 200px;
            z-index: 1000;
        }

        .search-popup input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-popup.active {
            display: block;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }
        
        .commissioned-hero {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .commissioned-hero h1 {
            font-size: 32px;
            color: #333;
            text-transform: uppercase;
        }
        
        .commissioned-hero p {
            font-style: italic;
            color: #666;
            margin-top: 5px;
        }
        
        .design-section {
            display: flex;
            gap: 20px;
        }
        
        .tshirt-display {
            background-color: #A99D9D;
            height: 450px;
            flex: 2;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .preview-section {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .design-preview {
            background-color: #A99D9D;
            height: 450px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .download-btn {
            background-color: #A99D9D;
            color: black;
            font-weight: bold;
            border: none;
            width: 100%;
            padding: 15px;
            text-align: center;
            cursor: pointer;
        }
        
        .tshirt-container {
            width: 80%;
            height: 80%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .tshirt-image {
            width: 100%;
            height: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
        }
        
        .design-area {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40%;
            height: 40%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            font-weight: bold;
            overflow: hidden;
            text-align: center;
        }
        
        .design-only {
            width: 80%;
            height: 80%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .upload-section {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        
        .upload-section input[type="file"] {
            flex: 3;
        }
        
        .upload-section button {
            flex: 1;
            background-color: #888;
            color: white;
            border: none;
            padding: 8px;
            cursor: pointer;
        }
        
        .options-section {
            margin: 20px 0;
        }
        
        .option-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .color-options {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .color-option {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid #ccc;
        }
        
        .color-option.active {
            border: 2px solid #333;
        }
        
        .size-options {
            display: flex;
            gap: 10px;
        }
        
        .size-option {
            padding: 5px 15px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        
        .size-option.active {
            background-color: #333;
            color: white;
        }
        
        /* Media queries for responsive design */
        @media (max-width: 768px) {
            .design-section {
                flex-direction: column;
            }
            
            .tshirt-display, .preview-section {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="Homepage.php">
                <img src="/api/placeholder/40/40" class="rounded-circle" alt="Logo">
                Metro District Designs
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Homepage.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Products.php">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Commissioned.php">COMMISSIONED DESIGNS</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Signup.php">SIGN-UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">LOGIN</a>
                    </li>
                    <li class="nav-item nav-icons">
                        <i class="bi bi-cart cart-icon" id="cartIcon"></i>
                        <div class="search-container">
                            <i class="bi bi-search search-icon" id="searchToggle"></i>
                            <div class="search-popup" id="searchPopup">
                                <input type="text" placeholder="Search designs..." id="searchInput">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="commissioned-hero">
            <h1>COMMISSIONED DESIGNS</h1>
            <p>"Looking for something unique? Get a custom design made just for you!"</p>
        </div>

        <div class="design-section">
            <!-- Left grid: T-shirt with logo -->
            <div class="tshirt-display">
                <div class="tshirt-container">
                    <div class="tshirt-image" id="tshirt-bg">
                        <div class="design-area" id="design-display">
                            Your Design Here
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right grid: Only design preview -->
            <div class="preview-section">
                <div class="design-preview">
                    <div class="design-only" id="design-only-preview">
                        Your Design Here
                    </div>
                </div>
                
                <div class="options-section">
                    <div class="option-title">Color</div>
                    <div class="color-options">
                        <div class="color-option active" style="background-color: white;" onclick="changeColor('white')"></div>
                        <div class="color-option" style="background-color: black;" onclick="changeColor('black')"></div>
                        <div class="color-option" style="background-color: #ff6b6b;" onclick="changeColor('#ff6b6b')"></div>
                        <div class="color-option" style="background-color: #4ecdc4;" onclick="changeColor('#4ecdc4')"></div>
                    </div>
                    
                    <div class="option-title">Size</div>
                    <div class="size-options">
                        <div class="size-option" onclick="changeSize('S')">S</div>
                        <div class="size-option active" onclick="changeSize('M')">M</div>
                        <div class="size-option" onclick="changeSize('L')">L</div>
                        <div class="size-option" onclick="changeSize('XL')">XL</div>
                    </div>
                </div>
                
                <div class="upload-section">
                    <input type="file" id="design-upload" accept="image/*">
                    <button onclick="previewDesign()">Preview</button>
                </div>
                
                <button class="download-btn">Download</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Initialize with white t-shirt
        document.addEventListener('DOMContentLoaded', function() {
            initializeTshirt();
            setupSearchToggle();
        });
        
        function initializeTshirt() {
            const tshirtBg = document.getElementById('tshirt-bg');
            tshirtBg.style.backgroundImage = "url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"300\" height=\"350\" viewBox=\"0 0 300 350\"><path d=\"M100,10 L50,60 L20,40 L60,120 L60,340 L240,340 L240,120 L280,40 L250,60 L200,10 Z\" fill=\"white\" stroke=\"%23ddd\" stroke-width=\"2\"/></svg>')";
            
            // Set design area to default
            const designArea = document.getElementById('design-display');
            designArea.innerHTML = 'Your Design Here';
            
            // Set design-only preview to default
            const designOnlyPreview = document.getElementById('design-only-preview');
            designOnlyPreview.innerHTML = 'Your Design Here';
        }
        
        function setupSearchToggle() {
            const searchToggle = document.getElementById('searchToggle');
            const searchPopup = document.getElementById('searchPopup');
            
            searchToggle.addEventListener('click', function() {
                searchPopup.classList.toggle('active');
                if (searchPopup.classList.contains('active')) {
                    document.getElementById('searchInput').focus();
                }
            });
            
            // Close search popup when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.search-container') && 
                    searchPopup.classList.contains('active')) {
                    searchPopup.classList.remove('active');
                }
            });
        }
        
        function changeColor(color) {
            // Update active color selection
            const colorOptions = document.querySelectorAll('.color-option');
            colorOptions.forEach(option => {
                option.classList.remove('active');
                if (option.style.backgroundColor === color) {
                    option.classList.add('active');
                }
            });
            
            // Change the t-shirt color by updating the SVG fill color
            const encodedColor = encodeURIComponent(color);
            const tshirtBg = document.getElementById('tshirt-bg');
            tshirtBg.style.backgroundImage = `url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"300\" height=\"350\" viewBox=\"0 0 300 350\"><path d=\"M100,10 L50,60 L20,40 L60,120 L60,340 L240,340 L240,120 L280,40 L250,60 L200,10 Z\" fill=\"${encodedColor}\" stroke=\"%23ddd\" stroke-width=\"2\"/></svg>')`;
            
            // Adjust text color for better visibility
            const designArea = document.getElementById('design-display');
            if (color === 'black') {
                designArea.style.color = 'white';
            } else {
                designArea.style.color = '#333';
            }
            
            console.log("Changed color to: " + color);
        }
        
        function changeSize(size) {
            // Update active size selection
            const sizeOptions = document.querySelectorAll('.size-option');
            sizeOptions.forEach(option => {
                option.classList.remove('active');
                if (option.innerText === size) {
                    option.classList.add('active');
                }
            });
            
            console.log("Changed size to: " + size);
        }
        
        function previewDesign() {
            const fileInput = document.getElementById('design-upload');
            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Update the design on the t-shirt
                    const designArea = document.getElementById('design-display');
                    designArea.innerHTML = `<img src="${e.target.result}" style="max-width: 100%; max-height: 100%;">`;
                    
                    // Update the design-only preview
                    const designOnlyPreview = document.getElementById('design-only-preview');
                    designOnlyPreview.innerHTML = `<img src="${e.target.result}" style="max-width: 100%; max-height: 100%;">`;
                }
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                alert("Please select an image to upload");
            }
        }
    </script>
</body>
</html>