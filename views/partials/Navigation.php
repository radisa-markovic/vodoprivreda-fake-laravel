<nav class="navigation__main" name="margin-top: 20px;">
    <ul class="navigation__list">
        <li class="navigation__item logo">
            <a href="/" style="display: block; width: 200px;">
                <!-- <div class="image-container">
                    <img 
                        src="../../images/logo.png" 
                        alt=""
                        style="width: 36px; height: 36px;"
                    />
                </div> -->
                <?php require 'logo.php'?>
            </a>
        </li>
        <?php foreach($routes as $routeName => $routeValue) :?>
            <?php if($routeName !== 'management'): ?>
                <li class="navigation__item">
                    <a href="<?=$routeValue['url']?>"
                    class="navigation__link <?= urlIsActive($routeValue['url'])? 'active' : "" ?>"
                    >
                        <?= $routeValue['caption'] ?>
                    </a>
                </li>
            <?php endif;?>
        <?php endforeach; ?>
    </ul>
</nav>