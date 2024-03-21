<!DOCTYPE html>
<html lang="en">
<?php require 'partials/head.php' ?>
<body>
    <?php require 'partials/header.php' ?>
    
    <main class="container">
        <h1 class="section-title">
            Mehanizacija
        </h1>
        <section 
            class="mechanization__holder"
            style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;"    
        >
            <?php foreach($mechanization as $mechanizationItem): ?>
                <?php require 'partials/mechanizationItem.php';?>
            <?php endforeach; ?>
        </section>
    </main>

    <?php require 'partials/footer.php'; ?>
</body>
</html>