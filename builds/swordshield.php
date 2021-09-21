<?php // EN TETE DE FICHIER

    if ($_GET['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
        include('french.php');
    } 
    
    else if ($_GET['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
        include('english.php');
    }
    
    else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
        include('french.php');
    }
	 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for company Ad Gloriam on Amazon's game 'New World'">
    <meta name="keywords" content="Ad, Gloriam, Ad Gloriam, New, World, New World, Amazon, Game, Company">
    <!-- Link Thumbnail -->
    <meta property="og:site_name" content="Ad Gloriam">
    <meta property="og:title" content="Ad Gloriam" />
    <meta property="og:description" content="Website for company Ad Gloriam on Amazon's game 'New World'" />
    <meta property="og:image" itemprop="image" content="https://alexandreh.promo-90.codeur.online/Ad-Gloriam/src/svg/cavecanem.svg">
    <meta property="og:type" content="website" />
    <!--  -->
    <title>Ad Gloriam</title>
    <!-- <link rel="stylesheet" href="/Ad-Gloriam/wp-content/themes/adgloriam/style.css"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="/Ad-Gloriam/src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Ad-Gloriam/src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Ad-Gloriam/src/favicon/favicon-16x16.png">
    <link rel="manifest" href="/Ad-Gloriam/src/favicon/site.webmanifest">
    <link rel="stylesheet" href="/Ad-Gloriam/style.css">
</head>
<body>
    <div class="header mobile"></div>
    <header>
        <a href="adgloriam<?php echo linklang;?>" class="divLogo">
            <svg class='logo' version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 91 91" style="enable-background:new 0 0 91 91;" xml:space="preserve"><style type="text/css">.st0{fill:#FFFFFF;}</style><g id="Layer_5"><path class="st0" d="M82.6,63.5C60.6,46.4,65,39.8,65,39.8l-3.3-4.4L53,22.8c0,0,5.5-20.9,1.1-16.5c-9.9,20.9-15.4,16.5-15.4,16.5S29.9,0.3,26.6,1.9s-5.5,26.4-5.5,26.4L7.9,36c-4.4,37.4,3.3,53.8,3.3,53.8l12.6-6L34.3,81l15.9-13.7l2.2,2.7c0,0,7.1,0.5,9.9,2.2C65,73.9,88.7,67.3,82.6,63.5z M48,43.7c0,0,7.7-3.3,8.8,3.3C56.8,47,51.3,49.7,48,43.7z"/></g></svg>
            <span class="logotxt">ad gloriam</span>
        </a>
        <div class="dropdown">
            <button class="flag"><img src="/Ad-Gloriam/<?php echo flag1; ?>" alt="<?php echo alt; ?>"><img src='/Ad-Gloriam/src/svg/arrow.svg' alt='' class="arrow"></button>
            <div class="dropdown-content flags">
                <a class="flag <?php echo fClass;?>" href="/Ad-Gloriam/index<?php echo lang; ?>"><img src="/Ad-Gloriam/<?php echo flag2; ?>" alt="<?php echo alt; ?>"></a>
            </div>
        </div>
    </header>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?php echo linklang;?>">
                    <button class="dropbtn" aria-label="Home">
                        <img src="/Ad-Gloriam/src/svg/home.svg" alt="" class="nav-icon mobile">
                        <span class="desktop"><?php echo home; ?></span>
                    </button>
                </a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn" aria-label="Guides">
                        <img src="/Ad-Gloriam/src/svg/guides.svg" alt="" class="nav-icon mobile">
                        <span class="desktop"><?php echo guid; ?></span>
                    </button>
                    <div class="dropdown-content guide">
                        <div class="xp">
                            <h1><?php echo prog; ?></h1>
                            <a href="/Ad-Gloriam/guides/characterXp<?php echo linklang;?>" id='chxp'><?php echo chxp; ?></a>
                            <a href="/Ad-Gloriam/guides/weaponXp<?php echo linklang;?>" id='wxp'><?php echo wxp; ?></a>
                            <a href="/Ad-Gloriam/guides/invasions<?php echo linklang;?>" id='inv'><?php echo inv; ?></a>
                        </div>
                        <div class="gathering">
                            <h1><?php echo gather; ?></h1>
                            <a href="/Ad-Gloriam/guides/skinning<?php echo linklang;?>" id='skin'><?php echo skin; ?></a>
                            <a href="/Ad-Gloriam/guides/mining<?php echo linklang;?>" id='min'><?php echo min; ?></a>
                            <a href="/Ad-Gloriam/guides/logging<?php echo linklang;?>" id='log'><?php echo log; ?></a>
                            <a href="/Ad-Gloriam/guides/harvesting<?php echo linklang;?>" id='harv'><?php echo harv; ?></a>
                            <a href="/Ad-Gloriam/guides/fishing<?php echo linklang;?>" id='fish'><?php echo fish; ?></a>
                        </div>
                        <div class="pvp">
                            <h1><?php echo pvp; ?></h1>
                            <a href="/Ad-Gloriam/guides/wars<?php echo linklang;?>" id='war'><?php echo war; ?></a>
                            <a href="/Ad-Gloriam/guides/fortresses<?php echo linklang;?>" id='fort'><?php echo fort; ?></a>
                            <a href="/Ad-Gloriam/guides/cities<?php echo linklang;?>" id='city'><?php echo city; ?></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn" aria-label="Builds">
                        <img src="/Ad-Gloriam/src/svg/builds.svg" alt="" class="nav-icon mobile">
                        <span class="desktop"><?php echo build; ?></span>
                    </button>
                    <div class="dropdown-content build">
                        <div class="weapons">
                            <a href="/Ad-Gloriam/swordshield<?php echo linklang;?>" id='ss'><?php echo ss; ?></a>
                            <a href="/Ad-Gloriam/hatchet<?php echo linklang;?>" id='hatch'><?php echo hatch; ?></a>
                            <a href="/Ad-Gloriam/rapier<?php echo linklang;?>" id='rap'><?php echo rap; ?></a>
                            <a href="/Ad-Gloriam/lance<?php echo linklang;?>" id='lan'><?php echo lan; ?></a>
                            <a href="/Ad-Gloriam/hammer<?php echo linklang;?>" id='hamm'><?php echo hamm; ?></a>
                            <a href="/Ad-Gloriam/greataxe<?php echo linklang;?>" id='grtx'><?php echo grtx; ?></a>
                            <a href="/Ad-Gloriam/bow<?php echo linklang;?>" id='bow'><?php echo bow; ?></a>
                            <a href="/Ad-Gloriam/musket<?php echo linklang;?>" id='musk'><?php echo musk; ?></a>
                            <a href="/Ad-Gloriam/firestaff<?php echo linklang;?>" id='fires'><?php echo fires; ?></a>
                            <a href="/Ad-Gloriam/icegauntlet<?php echo linklang;?>" id='iceg'><?php echo iceg; ?></a>
                            <a href="/Ad-Gloriam/lifestaff<?php echo linklang;?>" id='lifes'><?php echo lifes; ?></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="contact<?php echo linklang;?>">
                    <button class="dropbtn" aria-label="Contact">
                        <img src="/Ad-Gloriam/src/svg/contact.svg" alt="" class="nav-icon mobile">
                        <span class="desktop"><?php echo cntct; ?></span>
                    </button>
                </a>
            </li>
            
        </ul>
    </nav>
    <main class="container">
        <button class="fullscrnBtn" aria-label='Fullscreen' onclick="fullscreen()">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"><metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata><g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M6472.3,4526.9v-483.1h878.8h881.1L6971.5,2783.1L5713.1,1524.8l349.7-352l352-349.7l1258.4,1258.4l1260.7,1260.6v-881.1v-878.8h483.1H9900v1713.9V5010H8186.2H6472.3V4526.9z"/><path d="M2324.6-1863.8L1066.2-3122.2v881.1v878.8H583.1H100v-1713.8V-4790h1713.8h1713.9v483.1v483.1h-878.8h-881.1L3017-2574.6c685.5,685.5,1246.9,1258.4,1246.9,1269.9c0,13.8-151.8,177.1-340.5,363.5l-338.2,338.2L2324.6-1863.8z"/></g></g></svg>
        </button>
        <div class="content">
            <div class="white">
                <h3>Under Construction</h3><br>
                
                <!-- <h6>k.n. aries</h6> -->
                <p class='credits' style='text-align:center'>K.N. © ARIES 2021</p>
            </div>
        </div>
        
    </main>

    <div class="background">
        <video src="/Ad-Gloriam/src/vid/background.mp4" autoplay muted loop class="bgvid"></video>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/Ad-Gloriam/app.js"></script>
    <script src="/Ad-Gloriam/webhook_discord.js"></script>
</body>
</html>
