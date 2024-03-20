<footer class="footer">
    <div class="container footer-content">
        <?php require 'logo.php'?>
        <div class="links">
            <p class="text--bold">Stranice</p>
            <ul class="footer__links">
                <?php foreach($routes as $routeName => $routeDetails): ?>
                    <li class="footer__item">
                        <a 
                            href="<?= $routeDetails['url'] ?>"
                            class="footer__link"    
                        >
                            <?= $routeDetails['caption'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="work-hours">
            <p class="text--bold">Radno vreme:</p>
            <p style="font-size: 13px;">
                Ponedeljak-Petak: 07-15h
            </p>
            <p style="font-size: 13px;">
                Subota-Nedelja: neradni
            </p>
        </div>
    </div>
    <p class="text--center">
        Sva prava zadržana
    </p>
</footer>