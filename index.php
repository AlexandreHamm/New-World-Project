<?php // EN TETE DE FICHIER

	  // http://mon_site.com/index.php?lang=fr

 	 if ($_GET['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
  	 include('french.php');
  	 } 
   	 
   	 else if ($_GET['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
   	 include('english.php');
   	 }
   	 
  	 else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
  	 include('french.php');
   	 }
   	 
	 // Dans le HTML 
	 /*EX : 
	 
	 <?php echo VARIABLE; ?> 
	 
	 */
	 
   	 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Company site for War Dogs on Amazon's game 'New World'">
    <title>Project K. N. New World</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <img src="./src/svg/logotest.svg" alt="" class="logo">
                <span class="logotxt">war dogs</span>
            </li>
            <li class="nav-item">
                <button class="dropbtn" label="Home" onclick='home()'>
                    <img src="./src/svg/home.svg" alt="" class="mobile">
                    <span class="desktop"><?php echo home; ?></span>
                </button>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn" label="Guides">
                        <img src="./src/svg/guides.svg" alt="" class="mobile">
                        <span class="desktop"><?php echo guid; ?></span>
                    </button>
                    <div class="dropdown-content guide">
                        <div class="xp">
                            <h1><?php echo prog; ?></h1>
                            <a href="#"><?php echo chxp; ?></a>
                            <a href="#"><?php echo wxp; ?></a>
                            <a href="#"><?php echo inv; ?></a>
                        </div>
                        <div class="gathering">
                            <h1><?php echo gather; ?></h1>
                            <a href="#"><?php echo skin; ?></a>
                            <a href="#"><?php echo min; ?></a>
                            <a href="#"><?php echo log; ?></a>
                            <a href="#"><?php echo harv; ?></a>
                            <a href="#"><?php echo fish; ?></a>
                        </div>
                        <div class="pvp">
                            <h1><?php echo pvp; ?></h1>
                            <a href="#"><?php echo war; ?></a>
                            <a href="#"><?php echo fort; ?></a>
                            <a href="#"><?php echo city; ?></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn" label="Builds">
                        <img src="./src/svg/builds.svg" alt="" class="mobile">
                        <span class="desktop"><?php echo build; ?></span>
                    </button>
                    <div class="dropdown-content">
                        <div class="weapons">
                            <a href="#"><?php echo ss; ?></a>
                            <a href="#"><?php echo hatch; ?></a>
                            <a href="#"><?php echo rap; ?></a>
                            <a href="#"><?php echo lance; ?></a>
                            <a href="#"><?php echo hamm; ?></a>
                            <a href="#"><?php echo grtx; ?></a>
                            <a href="#"><?php echo bow; ?></a>
                            <a href="#"><?php echo musk; ?></a>
                            <a href="#"><?php echo fires; ?></a>
                            <a href="#"><?php echo iceg; ?></a>
                            <a href="#"><?php echo lifes; ?></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <button class="dropbtn" label="Contact" onclick="contact()">
                    <img src="./src/svg/contact.svg" alt="" class="mobile">
                    <span class="desktop"><?php echo cntct; ?></span>
                </button>
            </li>
            <li class="flags">
                <a class="flag" href="<?php echo link; ?>"><img src="<?php echo flag; ?>" alt="<?php echo alt; ?>"></a>
            </li>
        </ul>
    </nav>
    <main class="container">
        <div class="background">
            <img src="./src/img/header.png" alt="" class="backgroundIMG">
        </div>
        <h2>News</h2>
        <section class="test1">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>
        <section class="test2">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>
        <section class="test2">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>
        <section class="test2">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>
        <section class="test2">
            <div class="whiteboard"></div>
            <div class="whiteboard"></div>
        </section>

        <section class="formulaire">
            <form class="formcontent">
                <input type="text" name="a" id="a" placeholder="<?php echo chname; ?>" class='info'><br>
                <input type="number" maxlength="2" name="b" id="b" placeholder="<?php echo lvl; ?>" class='info'><br>
                <textarea type="text" name="c" id="c" placeholder="<?php echo reas; ?>" class='info'></textarea><br>
                <button class="formBtn" type="button" ><?php echo send; ?></button>
            </form>
            <div class="confirmation">
                <?php echo confirm; ?>
            </div>
        </section>
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <script src="./app.js"></script>
    <script src="./webhook_discord.js"></script>
</body>
</html>
