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
                <div class="font-size-74 font-weight-bold">Neleiskite, kad prarasti dantys</div>
                <div class="font-size-92 font-weight-bold">taptu nuosprendžiu !</div>
                <div class="font-size-64 font-weight-bold">Kodėl netenkame dantų ?</div>
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
                <div class="b3-title">03</div>
                <div class="font-size-64">Gydytojai pataria</div>
                <ul class="b3-employees-cards">
                    <li class="b3-employee-card b3-employee-card-8">
                        <div class="name">Name</div>
                        <div class="position">Position</div>
                        <hr>
                        <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui architecto tenetur sint cupiditate maxime voluptatum totam in commodi quisquam deserunt, 
                        eum, autem obcaecati accusamus, distinctio explicabo? Suscipit cumque quia obcaecati?</p>
                    </li>
                    <li class="b3-employee-card b3-employee-card-9">
                        <div class="name">Name</div>
                        <div class="position">Position</div>
                        <hr>
                        <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui architecto tenetur sint cupiditate maxime voluptatum totam in commodi quisquam deserunt, 
                        eum, autem obcaecati accusamus, distinctio explicabo? Suscipit cumque quia obcaecati?</p>
                    </li>
                </ul>
            </section>
            <section>
                <div class="b6-title">06</div>
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