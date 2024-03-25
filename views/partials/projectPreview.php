<article class="project__preview container">
    <div class="image-container">
        <img 
            src="../images/projects/SvojnovoParacin.jpg" 
            alt=""
        />
    </div>
    <div class="project__preview-content container">
        <p class="project__location text--brand">
            <?= $project['location']?>
        </p>
        <h3 class="project__title">
            <?= $project['title'] ?>
        </h3>
        <a 
            href="/projects/<?= $project['id'] ?>" 
            class="secondary-button project__link"
        >
            Pogledaj više
        </a>
    </div>
</article> 