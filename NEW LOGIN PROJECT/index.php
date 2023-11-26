<?php
session_start();
include("connections.php");
include("functions.php");
$user_data= check_login($con);
?>
	<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background:url('background giraffe.png');
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100vh;
        }

nav {
	background:url('nav background.png');
    background-size: cover; /* This ensures the image covers the entire background */
    background-position: center; /* This centers the image */
    background-repeat: no-repeat; /* This prevents the image from repeating */
    /* Add other styling as needed for your navigation panel */
    width: 100%;
    height: 70px; /* Set the desired height for your navigation panel */
    /* Add other styles like padding, margin, etc. */
            color: white;
            padding: 30px 0;
            border-right: 2px solid #ccc;
            
            
    
}

.wrapper {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav a {
    text-decoration: none;
    color: white;
    margin: 0 15px;
    font-size: 16px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav li {
    margin: 0;
}

nav a:hover {
    color: #4CAF50;
}

nav a.active {
    color: #4CAF50;
    font-weight: bold;
} 
.tourism-div {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: justify;
}
.tourism-div h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .tourism-div p {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }
</style>
</head>
<body>
<nav>
   <div class="wrapper"> 
   <a href="index.php"><img src="backup logo.png" alt="Project Logo" style="width: auto; height: 45px;"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">About us</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>    
    </nav>
</head>
<body>
<div class="tourism-div">
        <h2>Discover the Beauty of Kenya</h2>
<p>  Kenya, with its breathtaking landscapes, diverse wildlife, and rich cultural heritage,
    is a top destination for travelers seeking adventure and relaxation alike.
    From the iconic Maasai Mara National Reserve to the pristine beaches of the Indian Ocean,
    Kenya offers a unique and unforgettable experience for tourists.
</p>
<p>
Whether you're interested in safari adventures, cultural experiences, or simply relaxing on
            pristine beaches, Kenya has something for every traveler. Witness the annual migration of
            wildebeests, visit traditional Maasai villages, and savor the flavors of authentic Kenyan cuisine.
            Plan your journey to Kenya and create memories that will last a lifetime.
</p>
</div>
</body>
</html>