<nav class="globale__nav--container">
  <ul class="nave__sub--container">
    <li class="nav__el"><a href="index.php?page=<?= Encryptor::encrypt('Home') ?>"><?= DataText::NAV_HOME ?></a></li>
    <li class="nav__el"><a href="index.php?page=<?= Encryptor::encrypt('Drones') ?>"><?= DataText::NAV_DRONE_MENU ?></a></li>
  </ul>
</nav>