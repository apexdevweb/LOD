<nav class="globale-nav">
  <ul class="globale-nav__subctnr">
    <li class="nav-el"><a href="index.php?page=<?= Encryptor::encrypt('Home') ?>" class="nav-el__link"><?= DataText::NAV_HOME ?></a></li>
    <li class="nav-el"><a href="index.php?page=<?= Encryptor::encrypt('Drones') ?>" class="nav-el__link"><?= DataText::NAV_DRONE_MENU ?></a></li>
    <li class="nav-el"><a href="index.php?page=<?= Encryptor::encrypt('Custom') ?>" class="nav-el__link"><?= DataText::NAV_CUSTOM_MENU ?></a></li>
  </ul>
</nav>