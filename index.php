<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/QLF-logo.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>QLF - Custom Beats by Dre</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</head>

<body>
    <i class="material-icons" onclick="topFunction()" id="Btn" title="Go to top">north</i>

    <!----Header Part---->

    <script>
        $('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
        $(window).on('load', function() {
            setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
        });

        function removeLoader() {
            $("#loadingDiv").fadeOut(500, function() {
                // fadeOut complete. Remove the loading div
                $("#loadingDiv").remove(); //makes page more lightweight 
            });
        }
    </script>

    <div class="header">

        <!---Header Navigation-->

        <header>
            <img src="images/QLF-logo.png" class="logo" title="Accueil">
            <div class="nav">
                <i class="material-icons" style="font-size:48px; color:#fff" id="search" onclick="display()" title="Rechercher">search</i>
                <img src="images/ligne.png">
                <i class="material-icons" style="font-size:48px; color:#fff" title="Utilisateur" onclick= 'window.open("404.html", "_self")'>person</i>
                <img src="images/ligne.png">
                <i class="material-icons" style="font-size:48px;color:#fff" title="Achats" onclick= 'window.open("404.html", "_self")'>shopping_bag</i>
            </div>
            <img src="images/Menu.png" class="menu-icon" id="menu-btn" onclick="showMenu()" title="Menu">
        </header>

        <!---Header Content-->

        <div class="content">
            <div class="headphones">
                <div class="background">
                    <div class="muzieknootjes" id="notes">
                        <div class="noot-1">
                            &#9835; &#9833;
                        </div>
                        <div class="noot-2">
                            &#9833;
                        </div>
                        <div class="noot-3">
                            &#9839; &#9834;
                        </div>
                        <div class="noot-4">
                            &#9834;
                        </div>
                    </div>
                </div>
                <img src="images/main.png" id="main-img">
            </div>


            <div class="content-text">
                <h3>Écoutez-le. Sentez-le</h3>
                <h1>Envolez-vous vers <span class="Uranus">Uranus</span> avec PNL </h1>

                <div class="price">
                    <h2>$ 435 <span class="vertical-line"></span> <span class="sub-price">$ 465</span></h2>
                </div>

                <a href="#" class="button" onclick= 'window.open("404.html", "_self")'>Acheter</a><span><a href="#" class="savoir-plus" onclick= 'window.open("404.html", "_self")'>Savoir Plus</a></span>
            </div>

        </div>

        <!---Header Audio Player-->
        <div class="AudioPlayer" id="AudioPlayer">
            <div class="album">
                <img src="" id="Album" title="Album">
                <div class="song">
                    <h4 class="name" id="Name" title="Titre"></h4>
                    <h6 class="artist" id="Artist" title="Artist"></h6>
                </div>

            </div>

            <div class="controls">
                <i class="material-icons" id="repeat" title="Liste de lecture en boucle">repeat</i>
                <i class="material-icons md-20" id="prev" title="Chanson Précédente">fast_rewind</i>
                <i class="material-icons md-28" id="play-pause" title="Jouer/Pause">play_arrow</i>
                <i class="material-icons md-20" id="next" title="Chanson Suivante">fast_forward</i>
                <i class="material-icons" id="shuffle" title="Liste de lecture non mélangée">shuffle</i>
            </div>

            <div class="song-timer">
                <span class="current-time"></span>
                <div class="progress-area" id="progressArea">
                    <div class="progress-bar" id="progressBar">
                        <audio id="main-audio" src=""></audio>
                    </div>
                </div>
                <span class="max-duration"></span>
            </div>




            <div class="volume">
                <i class="material-icons" id="sound" onclick="sound()" title="Muet/Rétablir le son">volume_up</i>
                <div class="volume-area" id="volumeArea">
                    <div class="volume-bar" id="volumeBar">
                    </div>
                </div>
            </div>

            <div class="playlist">
                <i class="material-icons" id="playlist" title="Liste de lecture">queue_music</i>
            </div>
        </div>

        <!-- Playlist -->
        <div class="wrapper">
            <div class="music-list " id="music-list">
                <div class="list-header">
                    <div class="row">
                        <i class="list material-icons">queue_music</i>
                        <span>Music list</span>
                    </div>
                    <i id="close-list" class="material-icons" title="Fermer">close</i>
                </div>
                <ul>

                </ul>
            </div>
        </div>


        <!-- Search Bar -->

        <div class="search" id="search-section">
            <div class="overlay">
                <div class="search-section">
                    <i class="material-icons" id="close" onclick="nodisplay()" title="Fermer">close</i>
                    <input type="text" class="search-bar" placeholder="Rechercher" id="Search" value="" title="Rechercher" aria-rowindex="">
                    <i class="material-icons" id="search-icon" onclick="searchFunction()" title="Rechercher" type="submit">search</i>
                </div>

                <div class="history">
                    <h5>Recherchées récemment</h5>
                    <ul id="searchHistory" class="searchHistory">
                    </ul>
                </div>
            </div>
        </div>

        <!-- Menu -->
        <div class="menu" id="menu">
            <i class="material-icons" id="close-btn" onclick="hideMenu()">close</i>
            <ul class="menu-container">
                <li class="menu-column m1" onmouseover="bigMenu(this)" onmouseout="normalMenu()" onclick= 'window.open("404.html", "_self")'><a>Accueil</a></li>
                <li class="menu-column m2" onmouseover="bigMenu(this)" onmouseout="normalMenu()" onclick= 'window.open("404.html", "_self")'><a>Nos Produits</a></li>
                <li class="menu-column m3" onmouseover="bigMenu(this)" onmouseout="normalMenu()" onclick= 'window.open("404.html", "_self")'><a>Profile</a></li>
                <li class="menu-column m4" onmouseover="bigMenu(this)" onmouseout="normalMenu()" onclick= 'window.open("404.html", "_self")'><a>À Propos</a></li>
                <li class="menu-column m5" onmouseover="bigMenu(this)" onmouseout="normalMenu()" onclick= 'window.open("404.html", "_self")'><a>Contactez-nous</a></li>
            </ul>
        </div>

    </div>


    <div class="collections">
        <h1 text-align="center" class="title">Nos Dernières Collections en 2022</h1>
        <div class="collections-slider">
            <div id="wrapper">
                <div id="slider">
                    <div id="leftBox">
                        <div class="texte1">
                            <h1 style="color: #141414;">Que La Famille</h1>
                            <p style="color: #141414;">Un casque customisé pour votre album préféré.</p>
                            <a href="#" class="read1" onclick= 'window.open("404.html", "_self")'>Savoir Plus</a>
                        </div>
                        <div class="texte-image1">
                            <img src="images/coeur.png" id="gallery">
                        </div>
                    </div>
                    <div id="rightBox">
                        <div class="texte2">
                            <h1>Dans La Légende</h1>
                            <p>Un casque customisé pour votre album préféré.</p>
                            <a href="#" class="read2" onclick= 'window.open("404.html", "_self")'>Savoir Plus</a>
                        </div>

                        <div class="texte-image2">
                            <img src="images/legende.png" id="gallery">
                        </div>
                    </div>
                </div>

                <div class="slider-buttons">
                    <div id="leftBtn" title="Précédent"></div>
                    <div id="rightBtn" title="Suivant"></div>
                </div>
            </div>
        </div>


    </div>




    <section class="performance ">
        <div class="container ">
            <div class="Image ">
                <img src="images/freres.png " class="align-right slide-in ">
            </div>
            <div class="Title ">
                <h1>Un bon casque et de la musique forte sont tout ce dont vous avez besoin</h1>
            </div>
            <div class="Icons ">
                <div class="Battery ">
                    <h3>Batterie</h3>
                    <p>Battery 6.2V-AAC Codec</p>
                    <a onclick= 'window.open("404.html", "_self")'>Savoir Plus</a>
                </div>
                <div class="Bluetooth ">
                    <h3>Bluetooth</h3>
                    <p>Battery 6.2V-AAC Codec</p>
                    <a onclick= 'window.open("404.html", "_self")'>Savoir Plus</a>
                </div>
                <div class="Microphone ">
                    <h3>Microphone</h3>
                    <p>Battery 6.2V-AAC Codec</p>
                    <a onclick= 'window.open("404.html", "_self")'>Savoir Plus</a>
                </div>
                <div class="one ">
                    <img src="images/ressources/Battery.png ">
                </div>
                <div class="two ">
                    <img src="images/ressources/Bluetooth.png ">
                </div>
                <div class="three ">
                    <img src="images/ressources/Microphone.png ">
                </div>
            </div>
        </div>
    </section>



    <div class="shop " style="text-align: center; ">
        <h1 style="text-align: center; font-size: 2.5vw; ">Nos Nouveaux Produits</h1>
        <p style="text-align: center; font-size: 1.5vw;">Des casques sans-fil standards ou customisées,<br> juste pour vous</p>


        <div class="container2 ">
            <div class="image gallery">
                <img src="images/red.png " id="gallery">
            </div>
            <div class="image2 gallery">
                <img src="images/qlf.png " id="gallery">
            </div>
            <div class="image3 gallery">
                <img src="images/legende.png " id="gallery">

            </div>

            <div class="about ">
                <div class="rating ">
                    <img src="images/ressources/Rating.png ">
                </div>
                <div class="desc ">
                    <p>Que La Famille - Rouge Foncé</p>
                    <p class="price " style="font-weight: bold; ">420$</p>
                </div>
            </div>
            <div class="about2 ">
                <div class="rating2 ">
                    <img src="images/ressources/Rating.png ">
                </div>
                <div class="desc2 ">
                    <p>Que La Famille - Rouge</p>
                    <p class="price " style="font-weight: bold; ">420$</p>
                </div>
            </div>
            <div class="about3 ">
                <div class="rating3 ">
                    <img src="images/ressources/Rating.png ">
                </div>
                <div class="desc3 ">
                    <p>Dans La Légende - Couverture</p>
                    <p class="price " style="font-weight: bold; "> 420$</p>
                </div>
            </div>
        </div>
    </div>

    <div id="overlay"></div>
    <div id="zoomed">
        <i class="material-icons" id="closezoomed" onclick="hidezoom()">close</i>
    </div>





    <div class="boite ">
        <div class="container3 ">
            <div class="box ">
                <img src="images/last-one.png " class="align-left slide-in ">
            </div>
            <div class="box-content ">
                <div class="box-title ">
                    <h1>Tout ce que vous obtenez dans la boite</h1>
                </div>
                <div class="box-elements ">
                    <div class="e1 ">
                        <span> <i class="material-icons" style="font-size: 1.5vw !important;">arrow_circle_right</i> </span>
                        <p>Chargeur 5A</p>
                    </div>
                    <div class="e2 ">
                        <span> <i class="material-icons" style="font-size: 1.5vw !important;">arrow_circle_right</i> </span>
                        <p>Batterie Supplémentaire</p>
                    </div>
                    <div class="e3 ">
                        <span> <i class="material-icons" style="font-size: 1.5vw !important;">arrow_circle_right</i> </span>
                        <p>Sac Sophistiqué</p>
                    </div>
                    <div class="e4 ">
                        <span> <i class="material-icons" style="font-size: 1.5vw !important;">arrow_circle_right</i> </span>
                        <p>Manuel d'utilisation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Quotes">
        <h1>PNL Quotes</h1>
        <p>Les meilleures phrases de PNL</p>

        <div class="Row">
            <div class="Column">
                <p>"Pour mes rêves, la Terre est trop petite"</p>

                <div class="info">
                    <i class="material-icons" onclick="Shenmue()" title="Jouer">play_arrow</i>
                    <p class="source"> - N.O.S<br>
                        Source: Shenmue</p>
                </div>
                
            </div>

            <div class="Column">
                <p>"Nous on charbonne pendant que toi tu tapes du bon temps"</p>

                <div class="info">
                    <i class="material-icons" onclick="Dans_ta_rue()" title="Jouer">play_arrow</i>
                    <p class="source">~PNL - Ademo<br>
                        Source: Dans ta rue</p>

                </div>
            </div>
        </div>

        <div class="Row">
            <div class="Column">
                <p>"J'ai souri à la merde, souri à l'envers, sans commentaire"</p>

                

                <div class="info">
                    <i class="material-icons" onclick="QLF()" title="Jouer">play_arrow</i>
                    <p class="source">~PNL - N.O.S<br>
                        Source: J'suis QLF</p>
                </div>
            </div>

            <div class="Column">
                <p>"Ce monde serait moche sans toi, et j'refuse le paradis si t'y es pas"</p>

                <div class="info">
                    <i class="material-icons" onclick="Zoulou_tchaing()" title="Jouer">play_arrow</i>
                    <p class="source">~PNL - Ademo<br>
                        Source: Zoulou Tchaing</p>
                </div>
            </div>
        </div>

        <div class="Row">
            <div class="Column">
                <p>"Baba, pour ton sourire, j'donnerais ma vie, et p't-être même ma place au paradis"</p>

                

                <div class="info">
                    <i class="material-icons" onclick="Zoulou_tchaing2()" title="Jouer">play_arrow</i>
                    <p class="source">~PNL - Ademo<br>
                        Source: Zoulou Tchaing</p>
                </div>
            </div>

            <div class="Column">
                <p>"J'remplace centimes par sentiments, mon cœur se transforme en billets"</p>


                <div class="info">
                    <i class="material-icons" onclick="Ammoniaque()" title="Jouer">play_arrow</i>
                    <p class="source">~PNL - Ademo<br>
                        Source: À l'ammoniaque</p>

                </div>
            </div>
        </div>

        <div class="Row">
            <div class="Column">
                    <p>"J'ai peur un peu pour moi, beaucoup pour toi"</p>

                    <div class="info">
                        <i class="material-icons" onclick="Blanka()" title="Jouer">play_arrow</i>
                        <p class="source">~PNL - N.O.S<br>
                        Source: Blanka</p>
                    </div>
            </div>

            <div class="Column">
                <p>"Le mal pour les biens, l'enfer pour le paradis"</p>

                <div class="info">
                    <i class="material-icons" onclick="Sheita()" title="Jouer">play_arrow</i>
                    <p class="source">~PNL - N.O.S<br>
                        Source: Sheita</p>
                </div>
            </div>
        </div>
    </div>







    <div class="mail ">
        <div class="subscribe ">
            <h1>S'abonner</h1>
            <p>Recevoir nos dernières actualités par E-mail</p>

            <form class="form" onsubmit="return">
                <input type="email"  id="input"  placeholder="example@example.com " required title="L'email doit inclure le symbole @, et ne pas inclure de caractères spéciaux comme ('=', '*', '/', '#', ';', '!', ...)">
                <button type="submit">S'abonner</button>
            </form>
        </div>
    </div>

    <div class="feedback-section" action= "BIN/post.php" method = "POST">
        <h1>Donnez votre avis au développeur de ce site Web</h1>

        <form id="feedback">
            <input type= "text" placeholder="Nom" id="nom" name="nom" required>
            <input type= "email" placeholder= "E-mail" id="email" name="email" required>
            <textarea placeholder= "Commentaire" id="commentaire" name="commentaire" required></textarea>

            <div class="rating">
                <label>
                  <input type="radio" name="stars" value="1" />
                  <span class="icon">★</span>
                </label>
                <label>
                  <input type="radio" name="stars" value="2" />
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                </label>
                <label>
                  <input type="radio" name="stars" value="3" />
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>   
                </label>
                <label>
                  <input type="radio" name="stars" value="4" />
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                </label>
                <label>
                  <input type="radio" name="stars" value="5" />
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                  <span class="icon">★</span>
                </label>
            </div>

            <button type="submit" id="submit" placeholder="Envoyer">Envoyer</button>
        </form>
    </div>

    <div class="comments">
        <div class="comments-title">
            <h1>Commentaires</h1>
        </div>

        <div class="list">
            <ul class="comments-list" id="Comments">
                

                <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $db = "comments";
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $db);
                    
                    $result = mysqli_query($conn,"SELECT * FROM comment ORDER BY date DESC ");

                    

                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<li class='comment'>";
                            echo "<div class='user'>";
                                echo "<div class='name'>";
                                    echo "<img src='images/profile.png'>";
                                    echo "<p>". $row['name'] . "</p>";
                                echo "</div>";
                                echo "<div class= 'date'>";
                                    echo "<p>" . $row['date'] . "</p>";
                                echo "</div>";
                            echo "</div>";
                            echo "<div class='subject'>";
                                echo "<p class='commentaire'>" . $row['subject'] . "</p>";
                            echo "</div>";
                        echo "</li>";
                    }
                ?>
            </ul>
        </div>
    </div>




    <footer>
        <div class="footer ">

            <img src="images/QLF-logo.png" class="logo" title="QLF">

            <p id="footer-info" style="font-size: 1vw;" title="Footer"></p>
            
            <div class="social-media ">
                <i class="fab fa-facebook" title="Facebook" onclick="window.open('https://www.facebook.com/yassine.cth')"></i>
                <i class="fab fa-instagram" title="Instagram" onclick="window.open('https://www.instagram.com/yassine_ct')"></i>
                <i class="fab fa-github" title="Github" onclick="window.open('https://github.com/yassine-ct')"></i>
                <i class="fab fa-behance" title="Behance" onclick="window.open('https://www.behance.net/yassine_ct')"></i>
            </div>

        </div>


        <div class="Merci" id="Merci">
            <div class="Overlay" id="Overlay">
                <i class="material-icons" id="cls" onclick= "Hide()">close</i>
                <div class="Message">
                    <h2>Merci!</h2>
                    <p>Nous avons reçus votre message</p>
                </div>
                <div class="follow">
                    <h4>Suivez nous</h4>
                    <div class="social">
                        <i class="fab fa-github" title="Github" onclick="window.open('https://github.com/yassine-ct')"></i>
                        <i class="fab fa-behance" title="Behance" onclick="window.open('https://www.behance.net/yassine_ct')"></i>
                        <i class="fab fa-linkedin" title="Linkedin" onclick="window.open('https://www.linkedin.com/in/yassinechettouch')"></i>
                    </div>
                </div>

            </div>
        </div>

    </footer>



    <!-- JavaScript Area-->
    <script src="playlist.json" type="text/javascript"></script>
    <script src="JS/script.js "></script>
    <script src="JS/playlist.js "></script>
    <script src="JS/slider.js "></script>
    <script src="JS/zoom.js "></script>
    <script src="JS/quotes.js "></script>
    <script src="JS/overlay.js "></script>
    <script>
         var beg_year = 2021; 
         var this_year = new Date();
         var copyright_text = ' TRYCOD LLC | Royalty Free ';
         var developed_by = '| Made with <span class="fa fa-heart" style="color: rgb(220,10,10);"></span> by Yassine Chettouch'; // Developer info
         
         this_year = this_year.getFullYear();
         if(this_year > beg_year) {
         var year = beg_year + ' - ' + this_year;
         } else {
         var year = this_year;
         }
         jQuery(function($){
         $('#footer-info').html('© ' + year + ' ' + copyright_text + ' ' + developed_by );
         });
        </script>

    <script>
        $('#input').oninvalid = function(event) {
            event.target.setCustomValidity("L'email doit inclure le symbole @, et ne pas inclure de caractères spéciaux comme ('=', '*', '/', '#', ';', '!', ...)");
        }
    </script>

</body>

</html>