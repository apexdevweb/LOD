<div class="header-container">
  <div class="header-container__mainsub">
    <hgroupe class="header-container__subctnr-A">
      <h1 class="header-title__primary"><?= DataText::HEADER_FIRST_TITLE ?></h1>
      <h2 class="header-title__secondary"><?= DataText::HEADER_SECOND_TITLE ?></h2>
      <hr class="header-title__separate">
      <h3 class="header-title__tertiary"><?= DataText::HEADER_THIRD_TITLE ?></h3>
    </hgroupe>
    <div class="header-container__subctnr-B">
      <a href="index.php?page=<?= Encryptor::encrypt('Signup') ?>" class="header-container__signup-el"><?= DataText::SIGNUP_TEXT ?></a><span>/</span><a href="index.php?page=<?= Encryptor::encrypt('Login') ?>" class="header-container__login-el"><?= DataText::LOGIN_TEXT ?></a>
    </div>
  </div>
  <div class="uncrn" data-us-project="3cc5zi7d2wI1yLyppAbD"></div>
  <div class="mobile-menu__container">
    <div class="mobile-menu__barre"></div>
    <div class="mobile-menu__barre"></div>
    <div class="mobile-menu__barre"></div>
  </div>
</div>
<?php
require_once __DIR__ . '/_nav.php';
?>