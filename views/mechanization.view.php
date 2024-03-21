<!DOCTYPE html>
<html lang="en">
<?php require 'partials/head.php' ?>
<body>
    <?php require 'partials/Navigation.php' ?>
    
    <main class="container">
        <h1>Mechanization</h1>
        <section 
            class="mechanization__holder"
            style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;"    
        >
            <?php foreach($mechanization as $mechanizationItem): ?>
                <article class="mechanization__item">
                    <div class="image-container">
                        <img 
                            src="../images/mechanization/komercijalno-vozilo-kamion-kiper-3-5t-.jpg" 
                            alt=""
                        />
                    </div>
                    <span class="mechanization__quantity">
                        <?= $mechanizationItem['quantity'] ?>
                    </span>
                    <h2>
                        <?= $mechanizationItem['name'] ?>
                    </h2>
                </article>
            <?php endforeach; ?>
        </section>
    </main>

    <?php require 'partials/footer.php'; ?>
</body>
</html>