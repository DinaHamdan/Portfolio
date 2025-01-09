<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--      <link rel="stylesheet" href="../styles/styles.css">
 -->
    <link rel="stylesheet" href="../asset/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">
    <title>New Portfolio</title>
</head>

<body>
    <!-- Header section -->
    <header id="navSection">
        <img id="burger-menu" src="../asset/img/burger-menu.png" alt="">
        <nav id="navbar">

            <!--  <a class="shownMenuIcon" href="">Acceuil<img class="shownMenuIcon" src="../asset/img/icons8-menu-64.png" alt="menu-icon"></a>
            <a class="hiddenMenuIcon" href="#about-me">A propos<img src="../asset/img/icons8-info-squared-64.png" alt="about-me-icon"></a>
            <a class="hiddenMenuIcon" href="#experience">Compétences<img src="../asset/img/icons8-work-64.png" alt="experience-icon"></a>
            <a class="hiddenMenuIcon" href="#past-experience">Parcours<img src="../asset/img/icons8-sand-watch-64.png" alt="experience-icon"></a>
            <a class="hiddenMenuIcon" href="#contact">Contact<img src="../asset/img/icons8-at-sign-64.png" alt="contact-icon"></a>
-->

            <a href="#info-title">A propos</a>
            <a href="#experience">Compétences</a>
            <a href="#past-experience">Parcours</a>
            <a href="#contact">Contact</a>

        </nav>
        <nav id="navbar-mobile">
            <p id="exit-button">X</p>
            <a href="#info-title">A propos</a>
            <a href="#experience">Compétences</a>
            <a href="#past-experience">Parcours</a>
            <a href="#contact">Contact</a>

        </nav>
    </header>
    <!-- About me section -->
    <section id="about-me">
        <div class="about-container-flex">
            <div class="about-me-container-1">
                <img class="info-icon-1" src=" ../asset/img/icons8-info-squared-64.png" alt="">

            </div>
            <div class="about-me-container-2">
                <div class="icon-name-container">
                    <img class="info-icon-2" src=" ../asset/img/icons8-info-squared-64.png" alt="">

                    <h1 id="myName">Dina Hamdan</h1>
                </div>
                <h2 class="second-about-me-title">Conceptrice développeuse d'applications</h2>

                <div class="blue-container-about-me">
                    <p class="about-me-paragraph">Grâce à mon background scientifique,
                        j’ai de l’expérience en analyse statistique
                        en langage R. </p>
                    <p class="about-me-paragraph">Lors d’un projet, j’ai été
                        initiée à la programmation pour faire une
                        étude de <span> bio-informatique sous Linux.</span>
                        J’ai découvert une véritable passion pour
                        <span> les nouvelles technologies</span> et la
                        <span> programmation</span>, ce qui m’a conduit à
                        entreprendre une <span>reconversion </span> en
                        <span> développement web </span> au Greta, où j’ai pu
                        confirmer mon appétence pour ce métier.
                    </p>
                    <p class="about-me-paragraph">
                        Aujourd’hui, je souhaite évoluer et mettre
                        mes compétences au profit d’un nouveau
                        challenge pour devenir <span> conceptrice
                            développeuse d'applications</span> au sein de
                        <span>Simplon </span> . Mon profil, caractérisé par une
                        grande rigueur et une curiosité, peut
                        apporter une valeur ajoutée à votre
                        équipe.
                    </p>
                    <a id="CV" href="Cv/CV-Dina-Hamdan.pdf" download="" class="linkButtons">Mon CV</a>

                </div>

            </div>

            <div class="bg-container">
                <img class="hiddenBgPhoto" src="../asset/img/resized-2-removebg-preview.png" alt="">
            </div>
        </div>



    </section>
    <h2 id="info-title"> A propos de moi</h2>
    <section id="info" class="reveal">
        <div id="namePhoto">

            <img id="headshot" src="../asset/img/CV-photo.png" alt="">

            <div id="soft-skills">

                <p>Rigoureuse</p>
                <p>Autonome</p>
                <p>Adaptable</p>
                <p>Travail en équipe</p>
                <p>Curieuse</p>
                <p>Dynamique</p>

            </div>
        </div>
        <div id="alternance-container">
            <h2>Recherche d'alternance</h2>

            <p><img src="../asset/img/map.png" alt=""> Marseile | Toulouse et agglomération </p>
            <p><img src="../asset/img/schedule.png" alt="">À partir de Mars 2025
            </p>
            <p><img src="../asset/img/education.png" alt="">Organisme de formation : Simplon
            </p>
            <p><img src="../asset/img/chronometer.png" alt="">3 semaines en entreprise, 1 semaine en formation
            </p>
            <p><img src="../asset/img/contract.png" alt="">Contrat de professionalisation</p>

            <a id="simplon-info" href="../Cv/plaquette-cda.pdf" download="" class="linkButtons">Plaquette Simplon</a>

        </div>


    </section>
    <!-- Web development experiences -->
    <section id="experience">

        <!--   <img class="experience-work-icon-one" src="../asset/img/icons8-work-64.png" alt="work-icon"> -->
        <div class="experience-container-flex">
            <div class="experience-container-one">
                <img class="experience-work-icon-two" src="../asset/img/icons8-work-64.png" alt="work-icon">
                <h2 class="experience-title">Mes compétences</h2>
            </div>
            <!--     <div class="experience-gradient-container">
                <div class="experience-blue-container">
                    <p>XP</p>

                    <p>1 year of experience in front end and back end web developpment.</p>
                </div>
            </div>-->
        </div>
        <div class="experience-icon-one">
            <p>HTML</p>
            <p>CSS</p>
            <p>Figma</p>
            <p>JS</p>
            <p>PHP</p>
            <p>POO</p>
            <p>MySQL</p>
            <p>MongoDB</p>
            <p>R</p>
            <p>Linux</p>
            <p>Docker</p>
            <p>Angular</p>
            <p>NodeJS</p>
            <p>React</p>
            <p>Symfony</p>
            <p>Twig</p>

            <!--        <img src="../asset/img/icons8-html-64.png" alt="html-logo">
            <img src="../asset/img/icons8-css-filetype-64.png" alt="css-logo">
            <img src="../asset/img/icons8-javascript-64.png" alt="js-logo">
            <img src="../asset/img/icons8-nodejs-64.png" alt="nodejs-logo">
            <img src="../asset/img/icons8-php-64.png" alt="php-logo">
            <img src="../asset/img/icons8-mysql-64.png" alt="sql-logo">
            <img src="../asset/img/icons8-database-64.png" alt="database-logo">
            <img src="../asset/img/icons8-git-64.png" alt="git-logo">
            <img src="../asset/img/icons8-bash-64.png" alt="bash-logo"> -->
        </div>


        <!-- 
            <div class="experience-icon-two">

                <p>HTML</p>
                <p>CSS</p>
                <p>Figma</p>
                <p>javascript</p>
                <p>PHP</p>
                <p>POO</p>
                <p>MySQL</p>
                <p>MongoDB</p>
                <p>R</p>
                <p>Linux</p>
                <p>Docker</p>
                <p>Angular</p>
                <p>NodeJs</p>
                <p>React</p>
                <p>Symfony</p>
                <p>Twig</p>
                 
            <img src="../asset/img/icons8-html-64.png" alt="html-logo">
            <img src="../asset/img/icons8-css-filetype-64.png" alt="css-logo">
            <img src="../asset/img/icons8-javascript-64.png" alt="js-logo">
            <img src="../asset/img/icons8-nodejs-64.png" alt="nodejs-logo">
            <img src="../asset/img/icons8-php-64.png" alt="php-logo">
            <img src="../asset/img/icons8-mysql-64.png" alt="sql-logo">
            <img src="../asset/img/icons8-database-64.png" alt="database-logo">
            <img src="../asset/img/icons8-git-64.png" alt="git-logo">
            <img src="../asset/img/icons8-bash-64.png" alt="bash-logo">
       

        </div>-->
    </section>

    <!-- Projects Section -->
    <h2 id="project-title">Mes Projets</h2>
    <section id="projects" class="reveal">
        <div class="project">
            <a target="_blank" href="https://github.com/DinaHamdan/FFM">
                <h3>Site Fire From Mars</h3>
                <img src="../asset/img/ffm.png" alt="">
                <p>Refonte du site d'une association de jongleur sur Marseille. </p>
                <p> HTML - SASS - JS - PHP - MVC - SQL - POO - login - CRUD </p>

            </a>
        </div>
        <div class="project">
            <a target="_blank" href="https://github.com/DinaHamdan/metropole-transport">
                <h3>Application métropole</h3>
                <img src="../asset/img/metropole.png" alt="">
                <p>Recréation de l'application du métropole Mobilité.</p>
                <p>Manipulation du DOM avec du javaScript</p>

            </a>
        </div>
        <div class="project">
            <a target="_blank" href="https://github.com/DinaHamdan/Blog">
                <h3>BlaBla Blog</h3>
                <img src="../asset/img/blog.png" alt="">
                <p>Création d'un blog - publication d'articles - mettre des commentaires et Likes.</p>
                <p> HTML - CSS - PHP - SQL - CRUD - login</p>

            </a>
        </div>
        <div class="project">
            <a target="_blank" href="https://github.com/DinaHamdan/api-carambar">

                <h3>API Carambar</h3>
                <img src="../asset/img/carambar.png" alt="">
                <p>Réalisation d'un API Carambar versionnée.</p>
                <p> API Rest - Node - Sequelize - Express - MVC</p>

            </a>
        </div>
    </section>


    <!-- Past Experiences -->
    <section id="past-experience">
        <!--  -->

        <div class="past-experience-container-1">
            <img class="past-experience-icon" src="../asset/img/icons8-sand-watch-64.png" alt="">
            <h2 class="past-experience-title">Mon Parcours</h2>
        </div>


        <!--  -->
        <div class="line-container-original"></div>
        <div class="past-experience-container-2">
            <div class="past-experience-container-flex">
                <!--  -->
                <div class="text-container">
                    <p>Licence Biochimie</p>
                    <div class="circle-1"></div>
                </div>
                <div class="text-container">
                    <p>Master Biotechnologie
                        <span>Bio-Statistique</span>
                    </p>
                    <div class="circle-2"></div>
                </div>
                <div class="text-container">
                    <p>Masters Agricultural Sciences
                        <span>Bio-Statistique</span>
                        <span>Bio-Informatique</span>
                        <span>Machine Learning</span>
                    </p>
                    <div class="circle-3"></div>
                </div>
                <div class="text-container">
                    <p>Ingénieur d'étude
                        <span>Bio-Statistique</span>
                        <span>Bio-Informatique</span>
                    </p>
                    <div class="circle-4"></div>
                </div>
                <div class="text-container">
                    <p class="big-title">Web Developper
                    </p>
                </div>
            </div>
            <div class="line-container"></div>
        </div>
    </section>

    <section id="contact">
        <div class="contact-container-1">
            <img class="contact-icon" src="../asset/img/icons8-at-sign-64.png" alt="">
            <h2 class="contact-title">Contactez Moi!</h2>
        </div>
        <div>
            <form action="contact.php" method="post">

                <div class="contact-container-2">
                    <input class="content" type="text" required name="fname" id="fname" placeholder="Prénom">
                    <input class="content" type="text" required name="lname" id="lname" placeholder="Nom">
                    <input class="content-email" type="email" required name="email" id="email" placeholder="Email">
                </div>
                <div class="contact-container-3">
                    <textarea class="inputMessage" required name="contactMsg" id="contactMsg" rows="10" cols="20" placeholder="Message..."></textarea>
                    <input class="sendButton" type="submit" value="Envoyer">
                </div>
            </form>

        </div>

    </section>

    <script src="../js/sticky.js"></script>
    <script src="../js/menu-burger.js"></script>

    <!-- Footer -->
    <footer>

        <div>
            <p>&copy; 2025 Dina Hamdan. All rights reserved</p>
            <a target="_blank" href="https://www.flaticon.com" title="location icons"> Icons created by Freepik - Flaticon</a>

        </div>
        <div>
            <a href="mailto: dina.m.hamdane@gmail.com">dina.m.hamdane@gmail.com</a>

            <a target="_blank" href="https://github.com/DinaHamdan"><img src="../asset/img/github.png" alt=""></a>
            <a target="_blank" href="https://www.linkedin.com/feed/"><img src="../asset/img/linkedin.png" alt=""></a>
        </div>
    </footer>
</body>

</html>