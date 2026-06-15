<h2><?= DataText::NAV_DRONE_MENU ?></h2>
<section class="category-container">
  <ul class="category-container__menu">
    <?php
    if (isset($drone_category) && is_array($drone_category)) {
      foreach ($drone_category as $drone_sector) {
    ?>
        <li class="category-container__el"><a href="index.php?page=<?= Encryptor::encrypt('Drones') ?>" class="category-container__link"><?= htmlspecialchars($drone_sector) ?></a></li>
    <?php
      }
    }
    ?>
  </ul>
</section>