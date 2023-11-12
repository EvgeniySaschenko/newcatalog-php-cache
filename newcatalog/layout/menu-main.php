<div class="app-menu-main" data-app-menu-main style="display: none;">
  <div class="app-menu-main__wrapper">
      <div class="app-menu-main__btn-close" 
          data-analyzed-element="menu-main-button-close"
          data-app-menu-main-button-close>
      </div>
      <a href="/<?= $_langDefault ;?>" class="app-menu-main__logo" data-analyzed-element="menu-main-logo">
        <img class="app-menu-main__logo-img" src="<?= $_settings['imageAppLogo']; ?>">
      </a>
      <ul class="app-menu-main__list">
        <? foreach($_sections  as &$section): ?>
          <li class="app-menu-main__item">
            <a href="/<?= $_langDefault ;?>/section/<?= $section['sectionId']; ?>"
              class="app-menu-main__link <?= $_sectionId === $section['sectionId'] ? 'active' : ''; ?>" 
              data-analyzed-element="menu-main-item">
              <?= $section['name'][$_langDefault]; ?>
            </a>
          </li>
        <? endforeach; ?>
    </ul>
  </div>
</div>