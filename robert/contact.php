<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
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
            </ul>
        </nav>
    </header>
 <section class="contact">
    <div class="content">
     <h2>Contact Us</h2>
        <p>Reach us for any assistance Or services as we continue to make a difference in everyday lives </p>
         </div>
    <div class="container2">
      <div class="contactInfo">
        <div class="box">
          <div class="icon"><img src="images/location-o.png"></div>
            <div class="text">
            <h3>Address</h3>
            <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["address"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>      
          
            </div>
          <div class="box">
          <div class="icon"><img src="images/call-o.png"></div>
            <div class="text">

            <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["phone"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
          
        </div>
              </div>
          <div class="box">
          <div class="icon"><img src="images/envelope-o.png"></div>
            <div class="text">
            <h3>Email</h3>

            <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>
          
            </div>
        </div>
        <div class="contactForm">
        <form>
            <h2>Send Message</h2>
            <div class="inputBox">
            <input type="text" name="" required="required">
                <span>Full Name</span>
            </div>
             <div class="inputBox">
            <input type="email" id="MyInput" name="" required="required">
                <span>Email</span>
            </div>
             <div class="inputBox">
            <textarea required="required"></textarea>
                <span>Type your Message...</span>
            </div>
             <div class="inputBox">
            <input type="submit" name="" value="Submit">
            </div>
            </form>
        </div>
    </div>
    </section>
    
     <div id="footer">
 	      <a href="https://facebook.com/Robertnungu"><img src="images/dark%20fb.png"></a>
         <a href="https://twitter.com/Bobnungu"><img src="images/dark%20twitter.png"></a>
         <a href="mailto:bobnungu@gmail.com"><img src="images/grey%20envelope.png"></a>
         <p>robertson &copy;2023</p>
              </div>
    <Script src="js/contact.js" ></Script>
</body>
</html>