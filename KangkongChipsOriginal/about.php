<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ga+Maamli&display=swap');

        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #88D66C;
        }

        .blur-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center cards */
            width: 100%;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            width: calc(25% - 20px); /* Four cards in a row with spacing */
            min-width: 250px;
            display: flex; /* Flexbox for vertical alignment */
            flex-direction: column; /* Stack content vertically */
            align-items: center; /* Center align content */
            text-align: center; /* Center text */
            opacity: 0; /* Initially hidden */
            animation: fadeIn 0.5s forwards; /* Fade in animation */
        }

        @keyframes fadeIn {
            to {
                opacity: 1; /* Fully visible */
            }
        }

        h2 {
            color: #2c3e50;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #34495e;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0; /* Remove margin for ul */
        }

        /* Specific styling for li within cards */
        .card ul li {
            background-color: #eaecef;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            width: 100%; /* Full width for list items */
        }

        .contact-info {
            margin-top: 20px;
        }

        .cta {
            font-weight: bold;
            font-size: 18px;
            color: #27ae60;
            text-align: center;
            margin-top: 20px;
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

        .navbar ul li a:hover {
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
            <li id="nav-home"><a href="index.php">Home</a></li>
            <li id="nav-about"><a href="about.php">About</a></li>
            <li id="nav-feedback"><a href="feedback.php">Feedback</a></li>
            <li id="nav-contact"><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <div class="blur-box">
        <h1>🌿 Introducing Kangkong Chips by Josh Mojica 🌿</h1>
        <div class="card-container">
            <div class="card" style="animation-delay: 0s;">
                <h2>About Kangkong Chips</h2>
                <p>Craving something delicious yet healthy? We’ve got you covered!</p>
                <p>🥬 Kangkong Chips are the perfect alternative to regular chips. Say goodbye to high-fat, high-carb snacks and hello to crispy, nutritious goodness! Made from organic kangkong (water spinach), these chips pack a punch in both flavor and health benefits.</p>
            </div>

            <div class="card" style="animation-delay: 0.1s;">
                <h2>Why Choose Kangkong Chips?</h2>
                <ul>
                    <li id="benefit-1">✅ Lowers Cholesterol</li>
                    <li id="benefit-2">✅ Supports Liver Health</li>
                    <li id="benefit-3">✅ Helps Treat Anemia</li>
                    <li id="benefit-4">✅ Boosts Digestive System</li>
                    <li id="benefit-5">✅ Anti-diabetic & Prevents Cancer</li>
                    <li id="benefit-6">✅ Improves Skin & Hair Health</li>
                    <li id="benefit-7">✅ Enhances Vision</li>
                    <li id="benefit-8">✅ Strengthens Immunity</li>
                </ul>
            </div>

            <div class="card" style="animation-delay: 0.2s;">
                <h2>Flavors You'll Love:</h2>
                <ul>
                    <li id="flavor-1">🔥 Classic – For the purists</li>
                    <li id="flavor-2">🔥 Sour Cream – Smooth & tangy</li>
                    <li id="flavor-3">🔥 Salt & Vinegar – A zesty kick</li>
                    <li id="flavor-4">🔥 Spicy – Feel the heat</li>
                    <li id="flavor-5">🔥 Barbeque – Smoky and savory</li>
                    <li id="flavor-6">🔥 Cheese – Rich and creamy</li>
                    <li id="flavor-7">🔥 Spicy Cheese – Boldly cheesy with a fiery twist</li>
                </ul>
            </div>

            <div class="card contact-info" style="animation-delay: 0.3s;">
                <h2>Contact Us</h2>
                <p><strong>Mobile:</strong> <a href="tel:09771221126">0977 122 1126</a></p>
                <p><strong>Email:</strong> <a href="mailto:kangkongco.ph@gmail.com">kangkongco.ph@gmail.com</a></p>
                <p><strong>Website:</strong> <a href="http://kangkongchipsoriginal.com.ph/" target="_blank">kangkongchipsoriginal.com.ph</a></p>
                <p><strong>TikTok:</strong> <a href="https://vt.tiktok.com/ZSFvy2TbR/" target="_blank">kangkongchipsoriginal TikTok</a></p>
                <p><strong>Instagram:</strong> <a href="https://www.instagram.com/kangkongchipsoriginal/" target="_blank">kangkongchipsoriginal</a></p>
            </div>
        </div>

        <div class="cta">
            <p>Don't miss out on this guilt-free snack!</p>
        </div>
    </div>

</body>
</html>
