<!DOCTYPE html>
<html lang="en">
<?php require 'partials/head.php' ?>
<body>
    <?php require ('partials/header.php'); ?>

    <main class="container">
        <h1 class="section-title">
            O nama <?= $jokojoko ?>
        </h1>
        <div class="image-container">
            <img 
                src="../images/about-us/Elphuk racunarstvo-zaposleni.jpg" 
                alt=""
            />
            </div>
        <p class="about-us-info">
            VP ,,Ćuprija’’ uspešno posluje već dugi niz godina. Preduzeće je osnovano još 1954. godine i od tada niže poslovne uspehe i neprestano raste i osavremenjuje se. Neki od osnovnih postulata <strong>preduzeća su zaštita od štetnog dejstva voda, zaštita vode od zagađenja, izgradnja, rekonstrukcija i održavanje vodoprivrednih objekata, a bavi se i proizvodnjom šljunka i kamena, kao i drugim delatnostima</strong>. Veliki broj stručnih radnika i odlična mehanizacija novije generacije stvaraju izuzetne uslove za kvalitetan rad, usled čega bi Vaš izbor trebalo da bude upravo naše preduzeće.
					Veliki broj zainteresovanih korisnika, organizacija ili pojedinaca su najbolja reklama za nas. Na ovim stranicama se možete bliže upoznati sa našim radom, našim službama i svemu ostalom što vas interesuje.
					 
        </p>
        <p class="about-us-info text--brand text--bold">
            70 godina iskustva Vama na raspolaganju.
        </p>
        <p class="about-us-info">
        Naše društvo obavlja različite delatnosti od kojih bismo izdvojili : zaštita od štetnog dejstva vode, zaštita vode od zagađenja, izgradnja rekonstrukcija, održavanje vodoprivrednih objekata, proizvodnja šljunka i kamena i dr. U okviru preduzeća postoji veliki broj projekata u izgradnji sa kojima se možete bliže upozanti na stranicama našeg sajta. VP ,,Ćuprija’’ je posebno opremljena i ima veliko iskustvo u gradnji objekata za zaštitu od voda, za vodosnabdevanje i gradnju malih akumulacija.
        </p>
    </main>

    <section class="about-us__development container">
        <h2 class="section-title">
            Razvojni put
        </h2>

        <ul class="about-us__development-path">
            <li class="about-us-info">
                9. maj 1954. godine 
                formirana je "Velikomoravska vodna zajednica“
            </li>
            <li class="about-us-info">
                24. septembar 1966. godine 
                "Velikomoravska vodna zajednica“ 
                prerasta u "Vodoprivredno preduzeće Morava"
            </li>
            <li class="about-us-info">
                20. mart 1967. godine 
                dolazi do spajanja 
                u Združno opšte vodoprivredno preduzeće „Morava“ 
                sa sedištem u Beogradu i nazivom 
                "Vodoprivredno preduzeće Ćuprija"
            </li>
            <li class="about-us-info">
                1989. preduzeće prerasta u firmu
                pod nazivom "Vodoprivredno preduzeće Ćuprija"
            </li>
            <li class="about-us-info">
                2002. godine u periodu tranzicije društva
                VP ,,Ćuprija’’ se registruje kao
                akcionarsko drustvo pod nazivom 
                Vodoprivredno preduzeće ,,Ćuprija’’ a. d.
            </li>
            <li class="about-us-info">
                2018. Godine kupovinom 100% akcija, 
                preduzeće ,,Metalac Company’’ iz Kuršumlije 
                postaje vlasnik našeg preduzeća, 
                pri čeme vrši i promenu pravne forme 
                i nastaje Vodoprivredno preduzeće ,,Ćuprija’’ d. o. o.
            </li>
        </ul>
    </section>

    <section class="about-us__management container">
        <h2 class="section-title">
            Rukovodioci
        </h2>
        <ul class="about-us__list">
            <?php foreach($management as $managementMember): ?>
                <?php require 'partials/managementMember.php'; ?>
            <?php endforeach;?>
        </ul>
    </section>
    
    <?php require 'partials/footer.php'; ?>
</body>
</html>