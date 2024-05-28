<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">
    <title>New Portfolio</title>
</head>

<body>
    <!-- Header section -->
    <header id="navSection">
        <div id="namePhoto">
            <h1 id="myName">Dina Hamdan.</h1>
            <img id="headshot" src="../asset/img/CV-photo.png" alt="">
        </div>
        <nav id="navbar">

            <a class="shownMenuIcon" href=""><img class="shownMenuIcon" src="../asset/img/icons8-menu-64.png" alt="menu-icon"></a>
            <a class="hiddenMenuIcon" href="#about-me"><img src="../asset/img/icons8-info-squared-64.png" alt="about-me-icon"></a>
            <a class="hiddenMenuIcon" href="#experience"><img src="../asset/img/icons8-work-64.png" alt="experience-icon"></a>
            <a class="hiddenMenuIcon" href="#past-experience"><img src="../asset/img/icons8-sand-watch-64.png" alt="experience-icon"></a>
            <a class="hiddenMenuIcon" href="#contact"><img src="../asset/img/icons8-at-sign-64.png" alt="contact-icon"></a>
            <a class="hiddenMenuIcon" href="/ctrl/login-display.php">Login</a>
        </nav>
    </header>
    <!-- About me section -->
    <section id="about-me">
        <div class="about-container-flex">
            <div class="about-me-container-1">
                <img class="info-icon" src=" ../asset/img/icons8-info-squared-64.png" alt="">
                <h2 class="first-about-me-title">Junior Web Developper</h2>
            </div>
            <div class="about-me-container-2">
                <h2 class="second-about-me-title">Junior Web Developper</h2>
                <div class="blue-container-about-me">
                    <p class="about-me-paragraph">
                        Passionate about coding and web developpment, I am always seeking ways to improve my skillsets.
                        Sciences and new technologies have always been part of my interests. Take a look around my
                        portfolio
                        to get to know me better.</p>
                </div>
                <a id="CV" href="Cv/CV-Dina-Hamdan.pdf" download="" class="linkButtons">Download my CV</a>

            </div>
            <div class="bg-container">
                <img class="hiddenBgPhoto" src="../asset/img/resized-2-removebg-preview.png" alt="">
            </div>
        </div>

    </section>
    <!-- Web development experiences -->
    <section id="experience">

        <img class="experience-work-icon-one" src="../asset/img/icons8-work-64.png" alt="work-icon">

        <div class="experience-icon-one">
            <img src="../asset/img/icons8-html-64.png" alt="html-logo">
            <img src="../asset/img/icons8-css-filetype-64.png" alt="css-logo">
            <img src="../asset/img/icons8-javascript-64.png" alt="js-logo">
            <img src="../asset/img/icons8-nodejs-64.png" alt="nodejs-logo">
            <img src="../asset/img/icons8-php-64.png" alt="php-logo">
            <img src="../asset/img/icons8-mysql-64.png" alt="sql-logo">
            <img src="../asset/img/icons8-database-64.png" alt="database-logo">
            <img src="../asset/img/icons8-git-64.png" alt="git-logo">
            <img src="../asset/img/icons8-bash-64.png" alt="bash-logo">
        </div>
        <div class="experience-container-flex">
            <div class="experience-container-one">
                <img class="experience-work-icon-two" src="../asset/img/icons8-work-64.png" alt="work-icon">
                <h2 class="experience-title">Web Developpment</h2>
            </div>
            <div class="experience-gradient-container">
                <div class="experience-blue-container">
                    <p>XP</p>

                    <p>1 year of experience in front end and back end web developpment.</p>
                </div>
            </div>
        </div>
        <div class="experience-icon-two">
            <img src="../asset/img/icons8-html-64.png" alt="html-logo">
            <img src="../asset/img/icons8-css-filetype-64.png" alt="css-logo">
            <img src="../asset/img/icons8-javascript-64.png" alt="js-logo">
            <img src="../asset/img/icons8-nodejs-64.png" alt="nodejs-logo">
            <img src="../asset/img/icons8-php-64.png" alt="php-logo">
            <img src="../asset/img/icons8-mysql-64.png" alt="sql-logo">
            <img src="../asset/img/icons8-database-64.png" alt="database-logo">
            <img src="../asset/img/icons8-git-64.png" alt="git-logo">
            <img src="../asset/img/icons8-bash-64.png" alt="bash-logo">
        </div>

    </section>
    <!-- Past Experiences -->
    <section id="past-experience">
        <!--  -->

        <div class="past-experience-container-1">
            <img class="past-experience-icon" src="../asset/img/icons8-sand-watch-64.png" alt="">
            <h2 class="past-experience-title">Past experiences</h2>
        </div>


        <!--  -->
        <div class="line-container-original"></div>
        <div class="past-experience-container-2">
            <div class="past-experience-container-flex">
                <!--  -->
                <div class="text-container">
                    <p>Bachelor's Biochemistry</p>
                    <div class="circle-1"></div>
                </div>
                <div class="text-container">
                    <p>Masters Plant Biotechnology
                        <span>Bio-Statistics</span>
                    </p>
                    <div class="circle-2"></div>
                </div>
                <div class="text-container">
                    <p>Masters Agricultural Sciences
                        <span>Bio-Statistics</span>
                        <span>Bio-Informatics</span>
                        <span>Machine Learning</span>
                    </p>
                    <div class="circle-3"></div>
                </div>
                <div class="text-container">
                    <p>Research Engineer
                        <span>Bio-Statistics</span>
                        <span>Bio-Informatics</span>
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
            <h2 class="contact-title">Contact Me</h2>
        </div>
        <div>
            <form action="/ctrl/message.php" method="post">

                <div class="contact-container-2">
                    <input class="content" type="text" name="fname" id="fname" placeholder="First Name">
                    <input class="content" type="text" name="lname" id="lname" placeholder="Last Name">
                    <input class="content" type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
                    <input class="content" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="contact-container-3">
                    <textarea class="inputMessage" name="contactMsg" id="contactMsg" rows="10" cols="20" placeholder="Your Message..."></textarea>
                    <input class="sendButton" type="submit" value="Send" name="" id="">
                </div>
            </form>

        </div>
        <p class="notificationMsg">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </p>
    </section>
    <script src="../js/sticky.js"></script>
</body>

</html>