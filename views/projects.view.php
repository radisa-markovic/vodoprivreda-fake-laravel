<!DOCTYPE html>
<html lang="en">
<?php require 'partials/head.php' ?>
<body>
    <main class="container">
        <?php require ('partials/Navigation.php'); ?>    
        <h1>
            Projekti
        </h1>
        <section class="project__previews">
            <?php foreach($projects as $project): ?>
                <?php include ('partials/projectPreview.php'); ?>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>