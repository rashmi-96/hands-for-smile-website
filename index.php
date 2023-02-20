<?php
$string =  '<!DOCTYPE html>'.
'<html>'.
'    <head>'.
'        <meta name="viewport" content="width=device-width,initial-scale=1.0">'.
'        <title>Hands For Smile</title>'.
'        <link rel="stylesheet" href="style.css">'.
'        <link rel="preconnect" href="https://fonts.googleapis.com">'.
'<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>'.
'<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">'.
'        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">'.
'    </head>'.
'    <body>'.
'        <section class="header">'.
'            <nav>'.
'                <a href="index.php"><img src="pic/logo2.png"></a>'.
'                <div class="nav-links" id="navLinks">'.
'                    <i class="fa fa-times" onclick="hideMenu()"></i>'.
'                    <ul>'.
'                        <li><a href="index.php">HOME</a></li>'.
'                        <li><a href="about.html">ABOUT</a></li>'.
'                        <li><a href="project.html">PROJECTS</a></li>'.
'                        <li><a href="staff.html">STAFF</a></li>'.
'                        <li><a href="volanteer.html">VOLUNTEER</a></li>'.
'                        <li><a href="donation.html">DONATION</a></li>'.
                        
'                        '.
'                    </ul>'.
'                </div>'.
'                <i class="fa fa-bars" onclick="showMenu()"></i>'.
'            </nav>'.
'            '.
'            <div class="text-box">'.
'                <h1>Hands For Smile</h1>'.
'                <p>Hands of love bestow cluster of smiles'.
'                </p>'.
'                <a href="" class="hero-btn">Visit Us To Know More</a>'.
'            </div>'.
''.
'           '.
'  '.
'        '.
' <!-------java script for toggle menu------>       '.
'        <script>'.
'            var navLinks =document.getElementById("navLinks")'.
'            '.
'            function showMenu(){'.
'                navLinks.style.right ="0";'.
'            }'.
'            function hideMenu(){'.
'                navLinks.style.right="-200px";'.
'            }'.
'        </script>'.
'        '.
'    </body>'.
'</html>';

 echo $string; 
?>