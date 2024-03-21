<!DOCTYPE html>
<html lang="en">
<?php require 'partials/head.php' ?>
<style>
*,
*::before,
*::after
{
    box-sizing: border-box;  
    margin: 0;
    padding: 0;  
}

.image-container
{
    display: block;
}

.image-container.headline-image > img
{
    display: block;
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.headline-image,
.cta-and-description
{
    width: 50%;
    align-self: center;
}

button
{
    border: none;
}
</style>
<body>
    <main class="container" style="margin-bottom: 20px;">
        <?php require ('partials/Navigation.php'); ?>    
        <div style="display:flex; margin-top: 30px;">
            <div class="cta-and-description">
                <h1 class="main-title"max-width: 22ch;">
                    Zaštita od vode, 
                    izgradnja i održavanje
                    vodoprivrednih objekata
                </h1>
                <p class="secondary-title">
                    Već 70 godina sa vama.
                </p>
                <div>
                    <button 
                        class="brand-button cta-button" 
                        style="margin-right: 25px;"
                    >
                        Angažuj nas!
                    </button>
                    <button
                        class="secondary-button cta-button" 
                    >
                        Naši projekti
                    </button>
                </div>
            </div>
            <div class="image-container headline-image">
                <img 
                    src="../images/14.jpg" 
                    alt=""
                />
            </div>
        </div>

    </main>
    <!--=== TRUSTED BY ===-->
    <section style="background-color: #3A3C75;">
        <h2 class="container" style="color: white;">
            Veruju nam
        </h2>
        <ul class="partner__list container">
            <li class="partner__item">
                <img src="../images/MZZ.PNG" alt="">
            </li>
            <li class="partner__item">
                <img src="../images/SrbijaAutoput.PNG" alt="">
            </li>
            <li class="partner__item">
                <img src="../images/SrbijaVode.PNG" alt="">
            </li>
        </ul>
    </section>
    <!-- WHAT WE DO -->
    <section class="what-we-do">
        <h2 class="container">
            Čime se bavimo
        </h2>
        <ul class="what-we-do__list container">
            <li class="what-we-do__item">
                <div class="image-container">
                    <img src="../images/what-we-do/Izgradnja održavanje rekonstrukcija.PNG" alt="">
                </div>
                <p>Zaštita od štetnog dejstva vode</p>
            </li>
            <li class="what-we-do__item">
                <div class="image-container">
                    <img src="../images/what-we-do/Zaštita vode od zagađenja.PNG" alt="">
                </div>
                <p>Izgradnja, rekonstrukcija i održavanje vodoprivrednih objekata</p>
            </li>
            <li class="what-we-do__item">
                <div class="image-container">
                    <img src="../images/what-we-do/Izgradnja održavanje rekonstrukcija.PNG" alt="">
                </div>
                <p>Zaštita vode od zagađenja</p>
            </li>
        </ul>
    </section>

    <!-- OUR PROJECTS -->
    <section class="our-projects container" id="our-projects">
        <div class="section-heading">
            <h2>Naši projekti</h2>
            <a 
                href="<?= $routes['projects']['url'] ?>"
                class="brand-button"    
            >
                Pogledaj sve
            </a>
        </div>
        <section class="project__previews">
            <?php foreach($projects as $project): ?>
                <?php include ('partials/projectPreview.php'); ?>
            <?php endforeach; ?>
        </section>  
    </section>

    <!-- ISO Standards -->
    <section class="iso-standard">
        <div class="iso-standard__holder container">
            <h2 class="text--white">
                ISO Standardi
            </h2>
            <ul class="iso-standard__list">
                <li class="iso-standard__item">
                    14001:2015
                </li>
                <li class="iso-standard__item">
                    9001:2015
                </li>
                <li class="iso-standard__item">
                    45001:2018
                </li>
            </ul>
        </div>
    </section>

    <!-- MEHANIZACIJA -->
    <section class="mechanization container">
        <h2>Mehanizacija</h2>

        <ul class="mechanization__list">
            <!-- MECHANIZATION ITEM -->
            <li class="mechanization__item">
                <div class="image-container">
                    <img src="../images/mechanization/komercijalno-vozilo-kamion-kiper-3-5t-.jpg" alt="">
                </div>
                <span class="mechanization__amount">
                    10+
                </span>
                <p>Kamiona</p>
            </li>
            <!-- MECHANIZATION ITEM -->
            <li class="mechanization__item">
                <div class="image-container">
                    <img src="../images/mechanization/komercijalno-vozilo-kamion-kiper-3-5t-.jpg" alt="">
                </div>
                <span class="mechanization__amount">
                    10+
                </span>
                <p>Kamiona</p>
            </li>
            <!-- MECHANIZATION ITEM -->
            <li class="mechanization__item">
                <div class="image-container">
                    <img src="../images/mechanization/komercijalno-vozilo-kamion-kiper-3-5t-.jpg" alt="">
                </div>
                <span class="mechanization__amount">
                    10+
                </span>
                <p>Kamiona</p>
            </li>
            <!-- SEE ALL MECHANIZATION -->
            <li class="mechanization__see-all">
                <a 
                    href="<?= $routes['mechanization']['url']?>"
                    class="mechanization__see-all-link"    
                >
                    Pogledaj sve
                </a>
            </li>
        </ul>
    </section>

    <!--=== WHERE WE ARE ===-->
    <section class="where-we-are container">
        <h2>Gde se nalazimo?</h2>
        <div class="separator">
            <div class="address-holder">
                <address>
                    Ćuprija, Srbija
                    Cara Lazara 109
                </address>
                <div class="image-container">
                    <img 
                        src="../images/where-are-we/Cuprija.PNG" 
                        alt=""
                    />
                </div>
            </div>
            <div class="image-container">
                <img 
                    src="../images/where-are-we/Zgrada vodoprivrede.PNG" 
                    alt=""
                />
            </div>
        </div>
    </section>

    <!--=== CONTACT US ===-->
    <section class="contact-us container">
        <h2 class="contact-us-heading">Kontaktirajte nas</h2>
        <div class="separator">
            <ul class="contact__list">
                <li class="contact__item">
                    <span>Kancelarija</span>
                    <a href="tel:+">+381-555-555</a>
                    <a href="mailto:">email@email.com</a>
                </li>
            </ul>
            <form 
                action="#"
                class="contact-form"
            >
                <label for="email-author">Ko piše?</label>
                <input 
                    type="text" 
                    name="emailAuthor"
                    class="form-field" 
                    id="email-author"
                />
                <label for="guestEmail">Vaša email adresa</label>
                <input 
                    type="text" 
                    name="guestEmail" 
                    class="form-field"
                    id="guestEmail"
                />
                <label for="emailContent">Sadržaj poruke</label>
                <textarea 
                    style="resize: none;"
                    name="emailContent"
                    class="form-field" 
                    id="emailContent" 
                    cols="30" 
                    rows="10"
                ></textarea>
                
                <button 
                    type="submit"
                    class="brand-button"
                >
                    Pošalji
                </button>
            </form>
        </div>
    </section>

    <?php require('partials/footer.php'); ?>
</body>
</html>