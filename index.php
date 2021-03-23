<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
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
                <div class="font-size-74 font-weight-bold">Neleiskite, kad prarasti dantys</div>
                <div class="font-size-92 font-weight-bold">taptu nuosprendžiu !</div>
                <div class="font-size-64 font-weight-bold">Kodėl netenkame dantų ?</div>
                <div class="number">01</div>
                <ul class="example-modals">
                    <?php for($i = 1;$i <= 3;$i++)
                    {
                        $class = $i === 1 ? "smooth-box" : "smooth-box grey"?>
                    <li class="<?php echo $class?>">
                        <img src="Resources/Images/<?php echo $i ?>.jpg"/>
                        <p>Title <?php echo $i?></p>
                    </li>
                    <?php }?>
                </ul>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio quo excepturi quaerat necessitatibus ducimus saepe libero velit unde, 
                nisi aspernatur magni voluptates sit repellat a vitae itaque, ratione delectus cupiditate.lore</p>
            </section>
            <section>
                <div>03<div class="line"></div></div>
                <div>Gydytojai pataria</div>
                <div>
                        <img/>
                        <div>
                            <div>Name</div>
                            <div>Position</div>
                            <hr>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui architecto tenetur sint cupiditate maxime voluptatum totam in commodi quisquam deserunt, 
                            eum, autem obcaecati accusamus, distinctio explicabo? Suscipit cumque quia obcaecati?</p>
                        </div>
                </div>
            </section>
            <section>
                <div>06<div class="line"></div></div>
                <p>Pradėti yra praprasta<br>
                <strong>ženkite pirmą žingsnį</strong></p>
                <p>Registracija nemokamai konsultacijai</p>
                <p>Liko <strong>9</strong> nemokamos registracijos</p>
                <form>
                        <div>
                            <input type="text" placeholder="Vardas, pavardė"/>
                            <input type="text" placeholder="Telefonas"/>
                        </div>
                        <button>Registruotis</button>
                </form>
            </section>
        </main>
    </body>
</html>