<?php
ob_start(); // Start output buffering

// Database connection
$conn = new mysqli('localhost', 'root', '', 'feedback_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete feedback
if (isset($_POST['delete'])) {
    $delete_id = $conn->real_escape_string($_POST['delete_id']);
    $conn->query("DELETE FROM feedback WHERE id='$delete_id'");
    header("Location: feedback.php"); // Refresh to show updated list
    exit();
}

// Retrieve feedback
$result = $conn->query("SELECT * FROM feedback");
$feedbackExists = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback List</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ga+Maamli&display=swap');

        body {
            background-color: #88D66C;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin: 20px 0;
            font-size: 2.7rem; /* Slightly larger */
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 1.2rem; /* Adjusted size for better readability */
        }
        th {
            background-color: #007bff;
            color: white;
            font-weight: 700; /* Bold text for headers */
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .delete-button {
            background: transparent;
            border: 1px solid #e74c3c;
            color: #e74c3c;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            font-size: 1rem; /* Adjusted size */
        }
        .delete-button:hover {
            background-color: #e74c3c;
            color: white;
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
        <h1>Feedback List</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                $feedbackExists = true;
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['message']}</td>
                        <td>{$row['rating']} Stars</td>
                        <td>
                            <form method='POST' action='' style='display:inline;'>
                                <input type='hidden' name='delete_id' value='{$row['id']}'>
                                <button type='submit' name='delete' class='delete-button'>Delete</button>
                            </form>
                        </td>
                      </tr>";
            }

            if (!$feedbackExists) {
                echo "<tr><td colspan='5'>No feedback available.</td></tr>";
            }

            $conn->close();
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
