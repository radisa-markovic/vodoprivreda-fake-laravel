<!DOCTYPE html>
<html lang="en">
<?php require 'partials/head.php' ?>
<body>
    <?php require ('partials/header.php'); ?>    
    <main class="container">
        <h1 class="section-title">
            Projekti
        </h1>
        <section class="project__previews">
            <?php foreach($projects as $project): ?>
                <?php include ('partials/projectPreview.php'); ?>
            <?php endforeach; ?>
        </section>
    </main>

    <?php require 'partials/footer.php'; ?>
</body>
</html>