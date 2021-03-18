<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="Resources/CSS/Main.css"/>
    </head>
    <body>
        <header>
            <div class="logo-container">
                <img src="Resources/Images/Logo/Logo.png" alt="logo">
            </div>
        </header>
        <main>
            <section>
                <div>Neleiskite, kad prarasti dantys taptu nuosprendžiu !</div>
                <div>Kodėl netenkame dantų ?</div>
                <ul class="example-modals">
                    <?php for($i = 0;$i < 3;$i++)
                    {?>
                    <li class="example-modal-<?php echo $i?>">
                        <img src=""/>
                        <p></p>
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