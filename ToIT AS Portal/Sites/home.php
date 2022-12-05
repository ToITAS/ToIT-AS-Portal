<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: Login.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../Images/ToIT AS Logo.ico"/>
    <link rel="stylesheet" href="../Styles/B-Nstyles.css"/>
    <link rel="stylesheet" href="../Styles/portal.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ToiT | Portal</title>
</head>
    <body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><img src="../ToIT AS Logo.png" height="75px"></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <!-- Hamburger -->
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="../index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="/">TechTube</a></li>
            <li class="services"><p href="/">Projects</p>
                <ul class="dropdown">
                    <li><a href="/">Driftmonitor</a></li>
                    <li><a href="/">Virtualisering</a></li>
                    <li><a href="/">Informasjon og sikkerhet</a></li>
                    <li><a href="/">Automatisert Backup</a></li>
                </ul>
                </li>
            <li><a href="logout.php" >Log Out</a></li>
          </div>
        </ul>
      </nav>
   
      <!-- Home page-->
    <div class="box">
        <h1>Linker</h1>
        <div class="boxed">
            <form action="https://github.com/" method="get" target="_blank">
            <button class="button-85 boxed-item" role="button">GitHub</button>
            </form>
            <form action="https://www.youtube.com/" method="get" target="_blank">
            <button class="button-85 boxed-item" role="button">Youtube</button>
            </form>
            <form action="https://fulab.no/2.0/index.html" method="get" target="_blank">
            <button class="button-85 boxed-item" role="button">Fulab</button>
            </form>
            <form action="https://www.w3schools.com/default.asp" method="get" target="_blank">
            <button class="button-85 boxed-item" role="button">W3School</button>
            </form>
            <form action="https://alesund-vgs.inschool.visma.no/#/app/dashboard" method="get" target="_blank">
            <button class="button-85 boxed-item" role="button">Visma</button>
            </form>
            <form action="https://teams.microsoft.com/_#/school/conversations/Generelt?threadId=19:pZ8Bn7nxxyQvt0dRIGjIfo6xCRZexhWa46i1wAOyWhk1@thread.tacv2&ctx=channel" method="get" target="_blank">
            <button class="button-85 boxed-item" role="button">Teams</button>
            </form>
        </div>
        <h1>Våre Produkt</h1>
        <div class="boxed">
            <form action="http://192.168.1.143/2IT/ansatte/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Server</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">TechTube</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
        </div>
        <h1>Dokumentasjon</h1>
        <div class="boxed">
            <form action="../MD Dokumentasjon/TEMPLATE/index.html" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Template</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
        </div>
        <div class="boxed">
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
        </div>
        <div class="boxed">
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
            <form action="/" method="get" target="_blank">
                <button class="button-85 boxed-item" role="button">Blank</button>
            </form>
        </div>
    </div>
      <!-- Home Page slutt-->
   
       <footer>
         <div class="footer-content">
           <div class="footer-bottom">
               <p>copyright &copy;2022 <a class="footer-bottom-text">ToIT AS</a></p>
                 <div class="footer-menu">
                   <ul class="f-menu">
                       <li><a href="../index.html">Home</a></li>
                       <li><a href="about.html">About Us</a></li>
                     </ul>
                 </div>
             </div>
         </div>
       </footer>
       <script defer src="../Scripts/login.js"></script>
    </body>
</html>