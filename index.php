<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Rieses Odontologija</title>
        <link rel="apple-touch-icon" sizes="180x180" href="Resources/Favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="Resources/Favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="Resources/Favicon/favicon-16x16.png">
        <link rel="manifest" href="Resources/Favicon/site.webmanifest">
        <link rel="mask-icon" href="Resources/Favicon/safari-pinned-tab.svg" color="#353535">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="theme-color" content="#000000">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="Resources/CSS/Main.css"/>
    </head>
    <body>
        <header>
            <img class="bg" src="Resources/Images/SVG/HeaderWave.svg"/>
            <div class="logo-container">
                <img src="Resources/Images/Logo/Logo.png" alt="logo">
            </div>
        </header>
        <main>
            <section>
                <h1 class="font-size-74 font-family-Montserrat-Bold fg-white">Neleiskite, kad prarasti dantys<br>
                <span class="font-size-92 font-family-Montserrat-Black fg-white">taptų nuosprendžiu !</span><br>
                <span class="font-size-64 font-family-Montserrat-Bold fg-white">Kodėl netenkame dantų ?</span>
            </h1>
                <div class="b1-title">01</div>
                <ul class="b1-imgs">
                    <?php for($i = 1;$i <= 3;$i++)
                    {?>
                        <li <?php echo $i === 1 ? 'class = "active"' : '';?>>
                            <div class="f-4 b1-img b1-img-<?php echo $i; ?>"></div>
                            <p class="f-1">Title <?php echo $i?></p>
                        </li>
                    <?php }?>
                </ul>
                <p class="b1-text fg-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio quo excepturi quaerat necessitatibus ducimus saepe libero velit unde, 
                nisi aspernatur magni voluptates sit repellat a vitae itaque, ratione delectus cupiditate.lore</p>
            </section>
            <section class="b3">
                <div class="b3-title">03</div>
                <h1 class="font-size-64 fg-main">Gydytojai pataria</h1>
                <ul class="b3-employees-cards">
                    <li class="b3-employee-card-8">
                        <div class="name">Name</div>
                        <div class="position fg-secondary">Position</div>
                        <hr>
                        <p class="description fg-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui architecto tenetur sint cupiditate maxime voluptatum totam in commodi quisquam deserunt, 
                        eum, autem obcaecati accusamus, distinctio explicabo? Suscipit cumque quia obcaecati?</p>
                    </li>
                    <li class="b3-employee-card-9">
                        <div class="name">Name</div>
                        <div class="position fg-secondary">Position</div>
                        <hr>
                        <p class="description fg-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui architecto tenetur sint cupiditate maxime voluptatum totam in commodi quisquam deserunt, 
                        eum, autem obcaecati accusamus, distinctio explicabo? Suscipit cumque quia obcaecati?</p>
                    </li>
                </ul>
                <img class="bg" src="Resources/Images/SVG/Kreives/KreivesAsset 5.svg"/>
            </section>
            <section class="b6">
                <img class="bg" src="Resources/Images/SVG/Kreives/KreivesAsset 2.svg"/>
                <div class="b6-title">06</div>
                <p class="font-size-67 font-family-Montserrat-Bold fg-secondary">Pradėti yra paprasta<br>
                <strong class="font-size-120 font-family-Montserrat-Black fg-main">ženkite pirmą žingsnį</strong></p>
                <img class="bg arrow" src="Resources/Images/SVG/Kreives/KreivesAsset 8.svg"/>
                <form class="register-form">
                    <p class="font-size-80 font-family-Montserrat-Bold fg-secondary">Registracija nemokamai konsultacijai</p>
                    <p class="font-size-60 font-family-Montserrat-Light fg-secondary">Liko <strong class="font-size-116 font-family-Montserrat-Bold fg-main">9</strong> nemokamos registracijos</p>
                        <div>
                            <input type="text" class="smooth-box" type="text" placeholder="Vardas, pavardė"/>
                            <input type="tel" class="smooth-box" type="text" placeholder="Telefonas"/>
                        </div>
                        <button type="submit" class="font-size-70 font-family-Montserrat-Bold smooth-box">Registruotis</button>
                </form>
            </section>
        </main>
        <footer class="f-dis f-row">
            <img class="bg" src="Resources/Images/SVG/FooterWave.svg"/>
            <div class="logo-container">
                <img src="Resources/Images/Logo/Logo.png" alt="logo">
            </div>
            <ul class="footer-address f-dis f-row">
                <li>
                    <p>MUS RASITE</p>
                    <address>
                        <div>Molėtų g. 13-1A, Didžioji Riešė,<div>
                        <div>LT-14264, Vilniaus raj.</div>
                        <div>Nemokamas automobilių stovėjimas</div>
                    </address>
                </li>
                <li>
                    <p>DARBO LAIKAS</p>
                    <p>I-V - <time datetime="10:00">10:00</time> - <time datetime="19:00">19:00</time>,</p>
                    <p>VI - <time datetime="10:00">10:00</time> - <time datetime="16:00">16:00</time></p>
                    <ul class="social-bar">
                        <li>
                            <a href="https://facebook.com" target="_blank" rel="no-follow">
                                <img src="Resources/Images/SVG/Socials/facebook_icon.svg"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com" target="_blank" rel="no-follow">
                                <img src="Resources/Images/SVG/Socials/insta_icon.svg"/>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </footer>
    </body>
</html>