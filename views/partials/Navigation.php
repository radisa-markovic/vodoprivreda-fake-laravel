<?php 
$routes = require $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'routes.php';
?>
<nav class="navigation__main">
    <div class="mobile__navigation-header">
        <!-- <?php require 'logo.php'?> -->
        <!-- <button class="close-mobile-menu">
            &times;
        </button> -->
        <label for="hamburgerToggle-2">
            &times;
        </label>
        <input 
            type="radio" 
            name="hamburgerToggle" 
            id="hamburgerToggle-2"
        />
    </div>
    <ul class="navigation__list">
        <?php foreach($routes as $routeName => $routeValue) :?>
            <?php if($routeName !== 'management'): ?>
                <li class="navigation__item">
                    <a href="<?=$routeValue['url']?>"
                        class="navigation__link <?= urlIsActive($routeValue['url'])? 'active' : "" ?>"
                    >
                        <i class="<?= $routeValue['mobileIcon']?> mobileIcon"></i>
                        <?= $routeValue['caption'] ?>
                    </a>
                </li>
            <?php endif;?>
        <?php endforeach; ?>
    </ul>
</nav>