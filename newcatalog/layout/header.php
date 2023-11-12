<? if($_settings['headerInfoHtml']): ?>
  <div class="wrapper__info-band"><?= $_settings['headerInfoHtml']; ?></div>
<? endif; ?>
<header class="app-header">
  <div class="app-header__row container">
    <!--logo-->
    <div class="app-header__col app-header__col--logo">
      <a href="/<?= $_langDefault; ?>" class="app-header__logo" data-analyzed-element="header-logo">
        <img class="app-header__logo-img" src="<?= $_settings['imageAppLogo']; ?>" alt="Logo">
      </a>
    </div>
    <div class="app-header__col app-header__col--custom-code"><?= $_settings['headerHtml']; ?></div>
    <div class="app-header__col app-header__col--control">
      <!--langs-->
      <div class="app-header__langs">
        <div class="app-language-swich" data-app-language-swich="">
            <div class="app-language-swich__current" data-app-language-swich-current><?= $_langDefault; ?></div>
            <div class="app-language-swich__box" style="display: none;" data-app-language-swich-box>
              <ul class="app-language-swich__list">
                <? foreach($_settings['langs']  as &$lang): ?>
                  <li data-analyzed-element="header-language-swich-item" 
                      data-header-language-swich-item="<?= $lang; ?>" 
                      class="app-language-swich__item <?= $lang === $_langDefault ? 'active' : ''; ?>"><?= $lang; ?>
                  </li>
                <? endforeach; ?>
              </ul>
            </div>
        </div>
      </div>
      <!--btn-menu-->
      <div class="app-header__btn-menu" 
          data-analyzed-element="header-button-menu-main" 
          data-header-button-menu-main>
        <div class="app-header__btn-menu-item"></div>
        <div class="app-header__btn-menu-item"></div>
        <div class="app-header__btn-menu-item"></div>
      </div>
    </div>
  </div>
</header>