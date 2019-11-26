<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- <meta name="keywords" content="HTML,CSS,XML,Entertainment,Games,Mobile games,board games,Console Gmaes" />
    <meta name="description" content="entertainment,index/home page" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logo.png" sizes="16x16 32x32" type="image/png">
    <link rel="stylesheet" type="text/css" href="C.S.S/stylesheet.css">


    <title>
        Contact || Novum Bewindvoering
    </title>

</head>

<body>
    <div class="HeaderRow">
        <div class="row">
            <div class="column">
                <header>
                    <img src="img/novum-full-title-logo3.png" alt="logo novum bewindvoering" align="left">
                    <!-- <b>Novum<br>Bewindvoering</b> -->
                </header>
            </div>

            <div class="column">
                <div class="topnav">
                    <a class="active" href="contact.html">Contact</a>
                    <a href="services.html">Diensten</a>
                    <a href="about_us.html">Over ons</a>
                    <a href="index.html">Home</a>

                </div>
            </div>
        </div>
    </div>
	
	
    <?php
    if(isset($_GET["infoSent"]))
    {
        if($_GET["infoSent"]=="success"){
            echo '<p style="color:#008000; text-align:center";> <b>Uw gegevens zijn verzonden. Wij nemen zo spoedig mogelijk contact met u op.</b></p>';
        }
    }
    ?>
	
    <h1>Contactformulier</h1>
    <div class="containerForm">
        <form action="send_info.php" method="POST">

            <label for="fname">Voornaam</label>
            <input type="text" id="fname" name="Voornaam" placeholder="Jouw Voornaam..." required autofocus>

            <label for="lname">Achternaam</label>
            <input type="text" id="lname" name="Achternaam" placeholder="Jouw Achternaam..." required>

            <label for="email">E-mail </label>
            <input type="text" id="email" name="email" placeholder="Jouw email address..." required>

            <label for="subject">Onderwerp</label>
            <textarea id="subject" name="Onderwerp" placeholder="Schrijf iets..." required style="height:7vw; font-family: 'PT Sans';"></textarea>

            <button type="submit" name="submit">Submit</button>

        </form>
    </div>


        <div class="contactInfo">
            <div class="rowContact">
                <div class="columnContact">
                    <img class="footerIconPhone" src="img/phone-icon.jpg"> : 06-81902648
                </div>
                <div class="columnContact">
                    <img class="footerIconEmail" src="img/email-icon.png"> : info@novumbewindvoering.nl
                </div>
                <div class="columnContact">

                    <img class="footerIconOnview" src="img/logo-onview.png">
                    <a href="https://mijn.onview.nl/" class="onviewLink">Inloggen op Mijn OnView</a>
                </div>
            </div>
        </div>
        <footer>
            <b>&copy; 2019 - NOVUM BEWINDVOERING</b>
        </footer>
</body>

</html>