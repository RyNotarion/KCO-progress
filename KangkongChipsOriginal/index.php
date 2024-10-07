<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KCO</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @keyframes scaleIn {
            0% {
                opacity: 0;
                transform: scale(0.5); /* Start smaller */
            }
            100% {
                opacity: 1;
                transform: scale(1); /* End at original size */
            }
        }

        .content h1 {
            animation: scaleIn 1s ease forwards; /* Apply the new animation */
        }

        /* Additional styles for layout (if necessary) */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .banner {
            position: relative;
            overflow: hidden;
        }

        video {
            width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1; /* Keep video behind content */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            position: relative;
            z-index: 1; /* Keep navbar above video */
        }

        .content {
            position: relative;
            z-index: 1; /* Keep content above video */
            text-align: center;
            color: white; /* Change text color for visibility */
            margin-top: 50px; /* Adjust margin as needed */
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="banner">
        <video autoplay loop muted plays-inline>
            <source src="kcovid.mp4" type="video/mp4">
        </video>
        <div class="navbar">
            <img class="logo" src="logo.png">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Let us know your thoughts</h1>
            <div>
                <a href="contact.php">
                    <button type="button">Contact us</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
