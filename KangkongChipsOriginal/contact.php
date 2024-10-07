<?php
ob_start(); // Start output buffering

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "c:/Users/Nynia Noces/Downloads/PHPMailer-master/PHPMailer-master/src/PHPMailer.php";
require "c:/Users/Nynia Noces/Downloads/PHPMailer-master/PHPMailer-master/src/Exception.php";
require "c:/Users/Nynia Noces/Downloads/PHPMailer-master/PHPMailer-master/src/SMTP.php";

// Database connection
$conn = new mysqli('localhost', 'root', '', 'feedback_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert feedback and send email
if (isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);
    $rating = $conn->real_escape_string($_POST['rating']); // Get the rating

    // Insert into database
    $conn->query("INSERT INTO feedback (name, email, message, rating) VALUES ('$name', '$email', '$message', '$rating')");

    // Send email notification
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 2; // Enable verbose debug output
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'raymundnotarion8@gmail.com'; // Your Gmail address
        $mail->Password = 'fdri nisy kmro rfoq'; // Your Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('raymundnotarion8@gmail.com', 'Feedback System');
        $mail->addAddress('raymundnotarion8@gmail.com'); // Change this to your email

        $mail->isHTML(true);
        $mail->Subject = "New Feedback from $name";
        $mail->Body = nl2br("Name: $name<br>Email: $email<br>Message: $message<br>Rating: $rating Stars");

        $mail->send();
    } catch (Exception $e) {
        echo "Failed to send email. Mailer Error: {$mail->ErrorInfo}";
    }

    header("Location: contact.php"); // Redirect to feedback page
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ga+Maamli&display=swap');

        body {
            background-color: #88D66C;
            margin: 0;
            padding: 0;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin: 20px 0;
            font-size: 2.7rem;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            background-color: #eaecef;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="email"], textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.navbar {
    font-family: "Ga Maamli", sans-serif;

    width: 90%;
    padding: 20px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo {
    width: 160px;
    margin-top: -10px;
    cursor: pointer;
}

.navbar ul {
    display: flex; /* Added flex display for better alignment */
}

.navbar ul li {
    list-style: none;
    margin: 20px;
}

.navbar ul li a {
    font-size: 2rem;
    border-radius: 10px;
    text-decoration: none;
    text-transform: uppercase;
    color: #F7E603;
    font-weight: 500;
    padding: 15px;
}

li a:hover {
    background: #8FD14F;
    transition: 0.6s;
}

.navbar a:hover {
    color: #F7E603;
}
    </style>
</head>
<body>
<div class="navbar">
                <img class="logo" src="logo.png">
                <ul>
                    <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  

                </ul>
            </div>
<div class="container">
    <h1>Feedback Form</h1>

    <form method="POST" action="">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Your message" required rows="4"></textarea>
        <div class="rating">
            <label>Product Rating:</label><br>
            <input type="radio" name="rating" value="1" required> ★
            <input type="radio" name="rating" value="2"> ★★
            <input type="radio" name="rating" value="3"> ★★★
            <input type="radio" name="rating" value="4"> ★★★★
            <input type="radio" name="rating" value="5"> ★★★★★
        </div>
        <button type="submit" name="submit">Submit Feedback</button>
    </form>
</div>
</body>
</html>
