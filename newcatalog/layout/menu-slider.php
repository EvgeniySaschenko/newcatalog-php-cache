<ul class="app-menu-slider">
  <? foreach($_sections  as &$section): ?>
    <li class="app-menu-slider__item" data-app-menu-slider="1">
      <a href="/<?= $_langDefault ;?>/section/<?= $section['sectionId']; ?>" 
        class="app-menu-slider__link <?= $_sectionId === $section['sectionId'] ? 'active' : ''; ?>" 
        data-analyzed-element="menu-slider-item">
        <?= $section['name'][$_langDefault]; ?>
      </a>
    </li>
  <? endforeach; ?>
</ul>