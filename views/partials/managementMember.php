<li class="about-us__managementMember">
    <div class="image-container"
        style="width: 50%; margin-right: 10px;"
    >
        <img 
            src="<?= $managementMember['imageURL']?>" 
            alt=""
        />
    </div>
    <div class="about-us__management-content">
        <h2 class="text--brand">
            <?= $managementMember['position'] ?>
        </h2>
        <h3>
            <?= $managementMember['name'] ?>
        </h3>
        <ul class="management-contact-list">
            <li>
                <a href="mailto:<?= $managementMember['email'] ?>">
                    <?= $managementMember['email'] ?>
                </a>
            </li>
            <li>
                <a href="tel:+:<?= $managementMember['phoneNumber'] ?>">
                    <?= $managementMember['phoneNumber'] ?>
                </a>
            </li>
        </ul>
        <a 
            href="<?= "{$routes['management']['url']}/{$managementMember['id']}" ?>"
            class="brand-button"
        >
            Vidi biografiju
            
        </a>
    </div>
</li>