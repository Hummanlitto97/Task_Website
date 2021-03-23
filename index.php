<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Rieses Odontologija</title>
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
                <img class="bg" src="Resources/Images/SVG/Kreives/KreivesAsset 3.svg"/>
                <div class="font-size-74 font-weight-bold fg-white">Neleiskite, kad prarasti dantys</div>
                <div class="font-size-92 font-weight-bold fg-white">taptu nuosprendžiu !</div>
                <div class="font-size-64 font-weight-bold fg-white">Kodėl netenkame dantų ?</div>
                <div class="b1-title">01</div>
                <ul class="b1-imgs">
                    <?php for($i = 1;$i <= 3;$i++)
                    {?>
                        <li>
                            <div class="f-4 b1-img b1-img-<?php echo $i === 1 ? $i." active" : $i; ?>"></div>
                            <p class="f-1">Title <?php echo $i?></p>
                        </li>
                    <?php }?>
                </ul>
                <p class="b1-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio quo excepturi quaerat necessitatibus ducimus saepe libero velit unde, 
                nisi aspernatur magni voluptates sit repellat a vitae itaque, ratione delectus cupiditate.lore</p>
            </section>
            <section>
                <img class="bg" src="Resources/Images/SVG/Kreives/KreivesAsset 8.svg"/>
                <div class="b3-title">03</div>
                <div class="font-size-64 fg-main">Gydytojai pataria</div>
                <ul class="b3-employees-cards">
                    <li class="b3-employee-card-8">
                        <div class="name">Name</div>
                        <div class="position">Position</div>
                        <hr>
                        <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui architecto tenetur sint cupiditate maxime voluptatum totam in commodi quisquam deserunt, 
                        eum, autem obcaecati accusamus, distinctio explicabo? Suscipit cumque quia obcaecati?</p>
                    </li>
                    <li class="b3-employee-card-9">
                        <div class="name">Name</div>
                        <div class="position">Position</div>
                        <hr>
                        <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui architecto tenetur sint cupiditate maxime voluptatum totam in commodi quisquam deserunt, 
                        eum, autem obcaecati accusamus, distinctio explicabo? Suscipit cumque quia obcaecati?</p>
                    </li>
                </ul>
            </section>
            <section>
                <img class="bg" src="Resources/Images/SVG/Kreives/KreivesAsset 7.svg"/>
                <div class="b6-title">06</div>
                <p class="font-size-67 font-weight-bold fg-secondary">Pradėti yra praprasta<br>
                <strong class="font-size-120 font-weight-bold fg-main">ženkite pirmą žingsnį</strong></p>
                <p class="font-size-80 font-weight-bold fg-secondary">Registracija nemokamai konsultacijai</p>
                <form class="register-form">
                <p class="font-size-30 font-weight-lighter">Liko <strong class="font-size-116 font-weight-bold fg-main">9</strong> nemokamos registracijos</p>
                        <div>
                            <input class="smooth-box" type="text" placeholder="Vardas, pavardė"/>
                            <input class="smooth-box" type="text" placeholder="Telefonas"/>
                        </div>
                        <button type="submit" class="font-size-70 font-weight-bold smooth-box">Registruotis</button>
                </form>
            </section>
        </main>
        <footer>
            <img class="bg" src="Resources/Images/SVG/FooterWave.svg"/>
        </footer>
    </body>
</html>