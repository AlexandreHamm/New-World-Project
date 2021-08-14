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
    <title>Cave Canem</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./src/favicon/favicon-16x16.png">
    <link rel="manifest" href="./src/favicon/site.webmanifest">
</head>
<body>
    <div class="header mobile"></div>
    <header>
        <a href="<?php echo logo; ?>" class="divLogo">
            <img src="./src/svg/cavecanem.svg" alt="" class="logo">
            <span class="logotxt">cave canem</span>
        </a>
        <div class="dropdown">
            <a class="flag desktop"><img src="<?php echo flag1; ?>" alt="<?php echo alt; ?>"> <span class="lang"><?php echo frEN; ?></span></a>
            <div class="dropdown-content flags">
                <a class="flag" href="<?php echo link; ?>"><img src="<?php echo flag2; ?>" alt="<?php echo alt; ?>"> <span class="lang"><?php echo enFR; ?></span></a>
            </div>
        </div>
    </header>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <button class="dropbtn" label="Home" onclick='home()'>
                    <img src="./src/svg/home.svg" alt="" class="nav-icon mobile">
                    <span class="desktop"><?php echo home; ?></span>
                </button>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button class="dropbtn" label="Guides">
                        <img src="./src/svg/guides.svg" alt="" class="nav-icon mobile">
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
                        <img src="./src/svg/builds.svg" alt="" class="nav-icon mobile">
                        <span class="desktop"><?php echo build; ?></span>
                    </button>
                    <div class="dropdown-content">
                        <div class="weapons">
                            <a href="#"><?php echo ss; ?></a>
                            <a href="#"><?php echo hatch; ?></a>
                            <a href="#"><?php echo rap; ?></a>
                            <a href="#"><?php echo lan; ?></a>
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
                    <img src="./src/svg/contact.svg" alt="" class="nav-icon mobile">
                    <span class="desktop"><?php echo cntct; ?></span>
                </button>
            </li>
            
        </ul>
    </nav>
    <main class="container">
        <button class="fullscrnBtn"><img src="./src/svg/fullscreen.svg" alt="" onclick="fullscreen()"></button>
        <div class="content">
            <div class="white">
                <h3>hello</h3><br>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem neque consequuntur, odit praesentium expedita eum natus minus recusandae perspiciatis, totam nesciunt culpa libero? Facere magni, cupiditate perferendis sint suscipit incidunt tempora optio quos non voluptate, esse exercitationem. Quas nobis porro recusandae voluptatibus amet. Facilis iusto commodi blanditiis laudantium culpa neque. Quis dicta repellendus nobis voluptate quos sapiente dolores fugit praesentium nemo eligendi optio quaerat, atque porro perferendis ex voluptates aut incidunt! Molestias ipsa repudiandae illum, vitae porro quisquam corrupti ullam illo magnam recusandae quae modi sapiente incidunt maiores aut sequi ex perspiciatis consectetur ad distinctio libero reiciendis magni. Unde, nesciunt nobis voluptas iusto nemo minus? Quas quidem error maxime inventore pariatur officia ea? Commodi quae corporis incidunt ducimus voluptatibus recusandae dicta ratione ipsum fugit velit, consequuntur eos! Omnis exercitationem deleniti explicabo vero maiores illo, delectus dicta, alias cumque quasi expedita iure, reiciendis officia. Fugiat quo eveniet, aut dignissimos necessitatibus quae veniam odio assumenda repellat sit distinctio, temporibus quaerat nam praesentium nihil. Perspiciatis, debitis soluta. Voluptatem praesentium libero voluptatum, molestias numquam minus at aliquid quae doloribus molestiae corrupti quos vitae cumque fugit delectus odio et ducimus nemo aut dolore dolores? Eaque aliquam ipsam quisquam aliquid molestiae placeat cumque expedita distinctio. Iure, iste deserunt soluta dolorum beatae omnis architecto ad itaque iusto obcaecati dicta quas sint sapiente sed asperiores aliquam rem reiciendis blanditiis pariatur ex, temporibus reprehenderit? Expedita ut error minima sequi. Veritatis odit debitis beatae atque ducimus illo ad, illum consectetur, molestiae neque id a fugit. Ad suscipit cum ex eaque eius. Porro dolor assumenda totam ut nam esse ipsa excepturi quo, fuga consequatur amet eligendi, minus reprehenderit vero voluptate accusamus natus impedit quos quia quidem perspiciatis quas quod! Incidunt illo saepe ab ex provident veritatis ipsam alias odio nemo consequuntur modi numquam fugit tenetur perspiciatis, tempore a voluptatibus, iste corrupti maxime assumenda laboriosam natus eaque. Explicabo reprehenderit veniam ab fuga officia culpa eaque fugiat dignissimos quam animi quos, dolores voluptates aliquam amet eligendi iusto delectus placeat ea vel expedita voluptatibus. Accusantium voluptate asperiores provident deleniti hic numquam labore officia eos nemo iusto voluptates, architecto delectus modi omnis aliquam nisi earum ipsam nam tempore ab! Asperiores non saepe quasi facilis dolorum temporibus, error minima eligendi possimus quo quos laudantium consectetur totam quia, pariatur hic inventore rerum illum explicabo. Odio quia iste ullam alias voluptate commodi ad facere in possimus quidem? Commodi magnam autem est asperiores deserunt dicta animi corrupti, consequuntur ab error, quisquam rerum ea laboriosam dolorum aspernatur porro aliquam eum officia sequi voluptatibus tenetur quas pariatur quis exercitationem. Odio, veritatis? Accusantium impedit ipsam neque alias quae, nesciunt nemo unde, quibusdam velit molestias et, cumque autem eaque error dicta quo repellendus sed incidunt nisi? Sint dolorem in necessitatibus quibusdam repudiandae dignissimos. Modi, tenetur! Perspiciatis cumque qui quidem omnis tempore sapiente odio ab consequuntur odit obcaecati aperiam, velit soluta quisquam atque amet et tempora porro, dignissimos dolor itaque maxime ipsam corrupti nesciunt repellendus! Ad officia ducimus, labore quasi voluptatum voluptas dolores a ratione. Omnis velit, aperiam iusto consequatur et cupiditate sit deleniti, quaerat vitae molestias aspernatur culpa esse natus. Pariatur rem molestiae porro nesciunt possimus quod accusamus blanditiis fuga vero. Fugit beatae quo accusamus tempora possimus dolore, eaque animi, voluptatibus et officiis quam ipsum. Dignissimos voluptates voluptatum aut esse natus. Officiis quos veniam ducimus atque amet, modi blanditiis architecto iure natus unde quam maiores nisi saepe doloribus repellat harum obcaecati. Similique mollitia ducimus sequi, placeat, perferendis ipsa non quidem, rem quod officiis dolorum eos suscipit cupiditate temporibus vero. Iusto recusandae nesciunt velit quo iste eius quibusdam cumque? Optio ducimus officia quam suscipit, recusandae itaque. Temporibus aut provident velit ut. Maxime quod, veritatis optio neque dicta cum, reiciendis dolor voluptatibus culpa aut enim quis vel. Impedit aperiam tempore sit fugit cupiditate nobis sint dolores minima ex vel earum harum repudiandae tempora deleniti esse odio exercitationem sed dolorem, quis consequuntur placeat accusantium magni quas nihil. Explicabo, nulla cum? Deleniti facere optio voluptatum et deserunt nobis nemo consectetur? Itaque laborum voluptatum, voluptate, inventore neque ullam modi pariatur doloribus vero nesciunt debitis vitae cupiditate deserunt dignissimos ducimus reiciendis, voluptas quo tempora quibusdam illum nulla unde. Rerum est a nostrum officia deleniti voluptatum dolores tempora, dolore, vero minus dolorum quaerat quae fugit! Excepturi, nobis quidem, temporibus doloremque minima facere pariatur, magnam possimus iusto porro ullam iure sed labore blanditiis. Eos officiis expedita itaque esse asperiores porro atque est cum earum, perferendis autem totam cupiditate reprehenderit neque corrupti odit debitis officia amet animi veniam maxime facilis quas quisquam quod. Iure possimus porro, maxime inventore voluptas ex quisquam praesentium ipsam reprehenderit est ducimus, velit et nam nemo impedit, dolor unde quaerat excepturi. Quae vero dolor aliquam tenetur delectus sint quo atque hic consequuntur, recusandae vel saepe sed, quaerat fugiat illum libero alias cupiditate aut, dolorum rem. Sunt corrupti voluptatem cumque, cupiditate et mollitia, sequi odio voluptate aliquid assumenda eveniet quidem laboriosam, expedita voluptates saepe commodi sed dolorum consequuntur deserunt impedit. Consequuntur corrupti nesciunt illum dicta optio excepturi, eos quas unde quasi molestias, sapiente beatae impedit hic aut, facilis cum? Sit autem corrupti officiis dolore consectetur accusantium amet repudiandae nihil culpa dicta nobis reiciendis, maxime est quisquam aliquid temporibus inventore voluptatem labore fugiat nam! Facilis tenetur porro pariatur? Fugit blanditiis veniam porro dolores praesentium id nihil, distinctio corrupti ad ratione aut velit voluptate, eligendi consequatur laudantium animi quos culpa nam! Recusandae exercitationem veritatis officiis quidem. Nihil nobis quam reprehenderit debitis corrupti quas accusantium quasi possimus sint quos! Sit possimus vel explicabo rem modi mollitia porro. Labore sequi, perferendis, dolore sit placeat amet quasi doloremque exercitationem rem, corporis perspiciatis? Quaerat quas qui iste obcaecati cum, velit veritatis, quam labore ipsum necessitatibus, voluptatem porro eos. Adipisci non rem iure ullam eveniet ex sint odio necessitatibus id, voluptatem, maiores perspiciatis explicabo mollitia sunt sed molestias dignissimos placeat quidem nulla excepturi ipsa dolores molestiae! Voluptatibus, reiciendis illo? Laborum, eum magnam adipisci hic nostrum ipsam nemo distinctio excepturi ex quam veritatis modi, dolorum fugiat labore ad perferendis a quos facere eos sequi quibusdam, amet accusantium? Quae ratione natus recusandae repudiandae eos amet alias pariatur voluptatibus.
                </p>
            </div>
        </div>

        <section class="formulaire">
            <form class="formcontent">
                <h3>formulaire</h3>
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
    <div class="background">
        <video src="./src/vid/background.mp4" autoplay muted loop class="bgvid"></video>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <script src="./app.js"></script>
    <script src="./webhook_discord.js"></script>
</body>
</html>