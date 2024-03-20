<style>
    ul { list-style: none; margin: 0; padding: 0;}

    .navigation__list
    {
        display: flex;
        list-style: none;
    }

    .navigation__item
    {
        margin-right: 10px;
    }

    .navigation__item.logo { margin-right: auto; }

    .navigation__link
    {
        text-decoration: none;
        color: black;
        font-size: 16px;
        padding: 5px;
    }

    .navigation__link:hover,
    .navigation__link.active
    {
        background-color: #3A3C75;
        color: white;
    }
</style>
<nav style="margin-top: 20px;">
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
            <li class="navigation__item">
                <a href="<?=$routeValue['url']?>"
                   class="navigation__link <?= urlIsActive($routeValue['url'])? 'active' : $routeValue['url'] ?>"
                >
                    <?= $routeValue['caption'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>