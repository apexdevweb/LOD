<section class="category-container">
<h2 class="category-container__title"><?= DataText::NAV_DRONE_MENU ?></h2>
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