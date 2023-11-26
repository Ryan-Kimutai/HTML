<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <style> 
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
            border: 5px 
            
    
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
body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7; /* Set a light background color */
        }

        .about-us-div {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 12px;
            text-align: justify;
        }

        .about-us-div h2 {
            color: #333;
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
        }

        .about-us-div p {
            color: #666;
            font-size: 18px;
            line-height: 1.6;
        }

        .about-us-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 12px;
            margin-top: 20px;
        }
    </style>

<nav>
   <div class="wrapper"> 
   <a href="index.php"><img src="backup logo.png" alt="Project Logo" style="width: auto; height: 45px;"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">About us</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>    
    </nav>
</style>
</head>
<body>
<div class="about-us-div">
        <h2>About Us</h2>
        <p>
            Welcome to our platform dedicated to showcasing the beauty and wonders of Kenya's tourism. 
            Nestled in the heart of East Africa, Kenya is a diverse and enchanting destination that 
            captivates travelers from around the globe. Our passion for this extraordinary country 
            drives us to share the unique experiences and cultural richness it has to offer.
        </p>
        <p>
            Our mission is to inspire and assist you in planning your Kenyan adventure. Whether you're 
            drawn to the thrilling safaris, mesmerizing landscapes, or vibrant local traditions, 
            we are here to guide you. Join us on a journey through Kenya's majestic wildlife, stunning 
            national parks, and welcoming communities.
        </p>
        <img src="about us image.png" alt="Kenya Landscape" class="about-us-image">
    </div>
</body>
</html>