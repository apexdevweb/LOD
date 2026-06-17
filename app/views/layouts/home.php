<section class="home-container">
  <h2 class="home-container__title"><?= DataText::NAV_HOME ?></h2>
  <div class="home-container__mainwrapper">
    <div class="home-container__subwrapper">
      <div class="home-container__droneModel" data-us-project="PgUfX1gdCLd39jRT3zJz"></div>
      <img src="<?= DataLink::HOME_IMG_WIREFRAME ?>" class="home-container__droneWireframe" alt="drnImg">
    </div>
    <hr class="home-separate">
    <div class="home-container__subwrapper">
      <article class="home-article">
        <hgroup class="article-title__container">
          <h3 class="article-title__el"><?= DataText::HOME_ARTICLE_TITLE ?></h3>
          <h4 class="article-title__el"><?= DataText::HOME_ARTICLE_SUBTITLE ?></h4>
        </hgroup>
        <p class="home-article__txt"><?= DataText::HOME_ARTICLE_TEXT ?></p>
        <ul class="home-article__subcontainer">
          <li class="article-detail"><span class="article-detail__firstline"><i class="fa-solid fa-hashtag"></i></span><?= DataText::HOME_ARTICLE_DETAIL_A ?></li>
          <li class="article-detail"><span class="article-detail__firstline"><i class="fa-solid fa-hashtag"></i></span><?= DataText::HOME_ARTICLE_DETAIL_B ?></li>
          <li class="article-detail"><span class="article-detail__firstline"><i class="fa-solid fa-hashtag"></i></span><?= DataText::HOME_ARTICLE_DETAIL_C ?></li>
          <li class="article-detail"><span class="article-detail__firstline"><i class="fa-solid fa-hashtag"></i></span><?= DataText::HOME_ARTICLE_DETAIL_D ?></li>
        </ul>
        <a href="index.php?page=<?= Encryptor::encrypt('Custom') ?>"><?= DataText::HOME_ARTICLE_LINK ?></a>
      </article>
    </div>
  </div>
</section>