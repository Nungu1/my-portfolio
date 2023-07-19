<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "robert";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    <header>
        <nav>
            <h1>ROBERT NUNGU</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="skills.php">Skills</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div id="carousel" >
        <div id="overlay" ></div>
        <div id="greeting" ></div>
    </div>
    
 <div class="home-area">
    <div class="home-text">
        <img src="images/robert.jpg">
        <h2>ROBERT NUNGU</h2>
        <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM home";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["aboutme"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>
        <a href="contact.php">contact me</a>
        </div>
    </div>
<footer>
	<h6> connect 
        <a href="https://web.facebook.com/Robertnungu"><l>FACEBOOK</l></a>
		<a href="https://twitter.com/Bobnungu"><l>TWITTER</l></a>
        <a href="mailto:bobnungu@gmail.com"><l>EMAIL</l></a>
    </h6>
    <p>robertson &copy;2023</p>

</footer>

    <Script src="js/index.js" ></Script>
</body>
</html>