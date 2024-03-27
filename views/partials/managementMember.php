<li class="about-us__managementMember">
    <div class="image-container">
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
                <i class="fa-regular fa-envelope"></i>
                <a href="mailto:<?= $managementMember['email'] ?>">
                    <?= $managementMember['email'] ?>
                </a>
            </li>
            <li>
                <i class="fa-solid fa-phone"></i>
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