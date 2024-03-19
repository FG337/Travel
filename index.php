<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON  -->

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- CSS  -->

    <link rel="stylesheet" href="css/style.css">

    <title>Travel</title>
</head>

<body>

    <!-- open -->

    <div class="layeropen">
        <img src="img/plane.png" class="plane">
    </div>
    <section class="open1"></section>
    <div class="textopen">
        <h2>Welcome To<br><span>Thailand</span></h2>
    </div>
    <section class="open2"></section>
    <script>
        let layeropen = document.querySelector('.layeropen');
        window.addEventListener('scroll', function () {
            let value = window.scrollY;
            layeropen.style.left = value * 2 + 'px';
        })
    </script>
    <!-- header -->

    <?php include ('header.php'); ?>

    <!-- main -->

    <main class="main">
        <section class="home section" id="home">
                <video autoplay muted loop>
                    <source src="img/seoul21116.mp4" type="video/mp4" alt="home image" class="home__bg">
                </video>
            <div class="home__shadow"></div>

            <div class="home__container container grid">
                <div class="home__data">
                    <h3 class="home__subtitle">
                        Recommend website
                    </h3>

                    <h1 class="home__title">
                        Location <br>
                        Travel
                    </h1>

                </div>

                <div class="home__cards grid">
                    <article class="home__card">
                        <a href="content.php?id=1" class="nav__link active-link">
                            <img src="https://cdn.discordapp.com/attachments/964596839754104986/1218632718305198110/R.jpg?ex=66085f29&is=65f5ea29&hm=8b8a1f229c108f7a41c9dbaaf56cf3ddc5fde074d2ffefa1fdbee9ee542413f5&"
                                alt="home image" class="home__card-img">
                            <h3 class="home__card-title">The North</h3>
                            <div class="home__card-shadow"></div>
                        </a>
                    </article>

                    <article class="home__card">
                        <a href="content.php?id=2" class="nav__link active-link">
                            <img src="https://cdn.discordapp.com/attachments/964596839754104986/1218642668176015401/hong-island-33.jpg?ex=6608686d&is=65f5f36d&hm=dfa0c74cf62b0cc6ba213a73db38c375c791ed14cfa11d8fbf3138f18b041d04&"
                                alt="home image" class="home__card-img">
                            <h3 class="home__card-title">The South</h3>
                            <div class="home__card-shadow"></div>
                        </a>
                    </article>

                    <article class="home__card">
                        <a href="content.php?id=3" class="nav__link active-link">
                            <img src="https://cdn.discordapp.com/attachments/964596839754104986/1218647767337926756/P03006451_1.jpg?ex=66086d2d&is=65f5f82d&hm=045e37c5d5e68826a739de09cedd29aa5a55f0ab76b68641fe59978de72a71a5&"
                                alt="home image" class="home__card-img">
                            <h3 class="home__card-title">The Central region</h3>
                            <div class="home__card-shadow"></div>
                        </a>
                    </article>

                    <article class="home__card">
                        <a href="content.php?id=4" class="nav__link active-link">
                            <img src="https://cdn.discordapp.com/attachments/964596839754104986/1218656665763709000/a9e9317d749f498835d82b4956f7fc2aa8c9a766.jpg?ex=66087576&is=65f60076&hm=646f2ff156c2ead150cfd91d28478ea2cb821de1755bd87b03ff88bcd75c17ff&"
                                alt="home image" class="home__card-img">
                            <h3 class="home__card-title">The North East</h3>
                            <div class="home__card-shadow"></div>
                        </a>
                    </article>
                </div>

            </div>
        </section>

        <!-- about -->

        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">
                        Longdo MAP <br>
                    </h2>

                    <p class="about__description">
                       If you want to use a map
                    </p>

                    <a href="Map.php" class="button">
                        MAP <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="about__image">
                    <img src="https://cdn.discordapp.com/attachments/946088226169438278/1219741145869979688/GoogleMapTA.webp?ex=660c6776&is=65f9f276&hm=cf33451ced5c1ad8d112a568aa5b5cee3e69f6229a19f4d19c805b2236b14c45&" alt="about image" class="about__img">
                    <div class="about__shadow"></div>
                </div>

            </div>
        </section>

        <!-- popular -->

        <section class="popular section" id="popular">
            <h2 class="section__title">
                Tourist attraction <br>
                Interesting
            </h2>

            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__image">
                        <img src="img/wallpaperpopulat-1.jpg" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>

                    <h2 class="popular__title">
                        Koh Kood
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Trat Province</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="img/wallpaperpopulat-2.jpg" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>

                    <h2 class="popular__title">
                        Jim Thompson Farm
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Nakhon Ratchasima</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="img/wallpaperpopulat-3.jpg" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>

                    <h2 class="popular__title">
                        Red Lotus Lake
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Udon Thani</span>
                    </div>
                </article>

            </div>
        </section>

        <!-- explore -->

        <section class="explore section" id="explore">
            <div class="explore__container">
                <div class="explore__image">
                    <img src="https://cdn.discordapp.com/attachments/964596839754104986/1218657927087525918/cover_name-01-3.jpg?ex=660876a3&is=65f601a3&hm=2010745ecf7039a60a775f7246ef2e8bda7ee7de4361ff09001cbe3fd8d642c5&"
                        alt="explore image" class="explore__img">
                    <div class="explore__shadow"></div>
                </div>

                <div class="explore__content container grid">
                    <div class="explore__data">
                        <h2 class="section__title">
                            If you have any questions <br>
                            Contact us
                        </h2>

                        <p class="explore__description">
                            Can talk about tourist attractions or
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- join -->

        <section class="join section">
            <div class="join__container container grid">
                <div class="join__data">
                    <h2 class="section__title">
                        Can <br>
                        Contact us
                    </h2>

                    <p class="join__description">
                        You can send us a message.                    
                    </p>

                    <form action="" class="join__form">
                        <input type="email" placeholder="Enter your email" class="join__input">

                        <button class="join__button button">
                            Send us a message <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>
                </div>

                <div class="join__image">
                    <img src="img/wallpaperhome-1.jpg"
                        alt="join image" class="join__img">
                    <div class="join__shadow"></div>
                </div>
            </div>
        </section>

    </main>

    <!-- footer -->

    <?php include ('footer.php'); ?>

    <!-- scroll up -->

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!-- scrollreveal -->

    <script src="js/scrollreveal.min.js"></script>

    <!-- MAIN JS -->

    <script src="js/main.js"></script>

</body>

</html> 