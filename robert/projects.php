<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projects</title>
</head>
<body>
    <header>
        <nav>
            <h1>ROBERT NUNGU</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
            </ul>
        </nav>
    </header>
    
        <h1 id="projects" >Projects</h1>
        <div class="grid">
            <img src="images/graphdiz.jpg" onclick="openPopup()">
            <img src="images/security.jpg" onclick="openPopup2()">
            <img src="images/printer%20r.jpg" onclick="openPopup3()">
            <img src="images/gaming.jpeg" onclick="openPopup4()">
            <img src="images/Network..jpg" onclick="openPopup5()">
            <img src="images/Repair.jpg" onclick="openPopup6()">

            <div class="popup" id="popup">
                <h2>GRAPHIC DESIGNING</h2>
                <p>Visualizing & Creating graphics including logos, business Cards & flyers</p>
                <button type="button" onclick="closePopup()">OK</button>
            </div>
            
            <div class="popup" id="popup2">
                <h2>COMPUTER SECURITY</h2>
                <p>We offer information, Network & Application Security</p>
                <button type="button" onclick="closePopup2()">OK</button>
            </div>

            <div class="popup" id="popup3">
                <h2>PRINTER REFURBISHING</h2>
                <p>Performing maintenance on printers plus refurbishing, Testing and calibrating</p>
                <button type="button" onclick="closePopup3()">OK</button>
            </div>

            <div class="popup" id="popup4">
                <h2>GAMING</h2>
                <p>Building Gaming pc towers from reassembled new genuine parts </p>
                <button type="button" onclick="closePopup4()">OK</button>
            </div>

            <div class="popup" id="popup5">
                <h2>NETWORKING</h2>
                <p>Building networks & providing technical oversight of multi-site network types </p>
                <button type="button" onclick="closePopup5()">OK</button>
            </div>

            <div class="popup" id="popup6">
                <h2>PC hardware & Software installation</h2>
                <p>We repair hardware & software as well as installation</p>
                <button type="button" onclick="closePopup6()">OK</button>
            </div>
        </div>

    
    <!-- <footer>
        <div id="footer">
	<h6> connect <a https://facebook.com/Robertnungu"><l>FACEBOOK</l></a>
		<a href="https://twitter.com/Bobnungu""><l>TWITTER</l></a>
        <a href="mailto:bobnungu@gmail.com"><l>EMAIL</l></a>
    </h6>
    <p>robertson &copy;2023</p>
</div>
    </footer> -->
    <Script src="js/projects.js" ></Script>
</body>
</html>