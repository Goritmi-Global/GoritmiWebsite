<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>

    <!-- Font Awesome for Icons -->
    <script src="https://use.fontawesome.com/1874c28d1a.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="your-icon.png">

    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #296fb6;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .error-container {
            max-width: 600px;
            padding: 40px;
            background: white;
            color: #296fb6;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease-in-out;
        }

        .error-title {
            font-size: 26px;
            font-weight: 600;
        }

        .error-number {
            font-size: 120px;
            font-weight: 700;
            color: #ff3d00;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        }

        .error-description {
            font-size: 18px;
            font-weight: 400;
            margin: 10px 0;
            color: #555;
        }

        .home-button {
            display: inline-block;
            background: #296fb6;
            color: white;
            font-size: 18px;
            font-weight: 600;
            padding: 12px 25px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .home-button:hover {
            background: #1d5a98;
        }

        /* Keyframe Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>
<body>

    <div class="error-container">
        <div class="error-title">Oops! Page Not Found</div>
        <div class="error-number">404</div>
        <div class="error-description">
            The page you are looking for doesn't exist or has been moved.
        </div>
        <a href="/" class="home-button"><i class="fa fa-home"></i> Go to Home</a>
    </div>

</body>
</html>
