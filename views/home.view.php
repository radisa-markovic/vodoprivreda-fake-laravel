<!DOCTYPE html>
<html lang="en">
<?php require 'partials/head.php' ?>
<body>
    <?php require ('partials/header.php'); ?>  
    <main class="container" style="margin-bottom: 20px;">
        <div class="cta-and-headline-image-holder">
            <div class="cta-and-description">
                <h1 class="main-title">
                    Zaštita od vode, 
                    izgradnja i održavanje
                    vodoprivrednih objekata
                </h1>
                <p class="secondary-title">
                    Već 70 godina sa vama.
                </p>
                <div class="two-columns-separator">
                    <button class="brand-button cta-button">
                        Angažuj nas!
                    </button>
                    <button class="secondary-button cta-button">
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
        <h2 class="container section-title" style="color: white;">
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
        <h2 class="section-title container">
            Čime se bavimo
        </h2>
        <ul class="what-we-do__list container">
            <li class="what-we-do__item">
                <i class="fas fa-tint-slash" aria-hidden="true"></i>
                <p>Zaštita od štetnog dejstva vode</p>
            </li>
            <li class="what-we-do__item">
                <i class="fas fa-hand-holding-water" aria-hidden="true"></i>
                <p>Izgradnja, rekonstrukcija i održavanje vodoprivrednih objekata</p>
            </li>
            <li class="what-we-do__item">
                <i class="fas fa-shield-alt" aria-hidden="true"></i>
                <p>Zaštita vode od zagađenja</p>
            </li>
        </ul>
    </section>

    <!-- OUR PROJECTS -->
    <section class="our-projects container" id="our-projects">
        <div class="section-heading">
            <h2 class="section-title">Naši projekti</h2>
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
            <h2 class="iso-standard__title text--white">
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
        <h2 class="section-title">Mehanizacija</h2>

        <ul class="mechanization__list">
            <?php foreach($mechanization as $mechanizationItem): ?>
                <?php require 'partials/mechanizationItem.php'; ?>
            <?php endforeach; ?>
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
    <!-- <section class="where-we-are container">
        <h2 class="section-title">Gde se nalazimo?</h2>
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
    </section> -->

    <!--=== CONTACT US ===-->
    <!-- <section class="contact-us container">
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
    </section>-->

    <?php require('partials/footer.php'); ?>
</body>
</html>