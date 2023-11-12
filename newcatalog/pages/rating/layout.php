<div class="page page--rating">
  <h1 class="app-title-1" style="text-align: center;"><?= $_data['title']; ?></h1>
  <div class="page__top">
    <div class="page__top-col-1">
      <div class="button-sources" data-analyzed-element="rating-button-links-to-sources">
        <span class="button-sources-text-1"><?= t('Links to sources'); ?></span><span class="button-sources-text-2"><?= t('Sources'); ?></span>
      </div>
    </div>
    <div class="page__top-col-2">
      <!-- labels-sections -->
      <div class="labels-sections">
        <? foreach($_data['rating']['sectionsIds']  as &$sectionsId): ?>
          <? foreach($_sections  as &$section): ?>
            <? if($section['sectionId'] === $sectionsId): ?>
              <a href="/<?= $_langDefault; ?>/section/<?= $sectionsId; ?>"
                class="labels-sections__item"
                data-analyzed-element="labels-sections-item">#<?= $section['name'][$_langDefault]; ?>
              </a>
            <? endif; ?>
          <? endforeach; ?>
        <? endforeach; ?>
      </div>
    </div>
  </div>
  <!--rating-items-->
  <div class="page__rating-items">
    <div class="rating-items">
      <div class="rating-items__list">
        <!--item-->
        <? foreach($_data['ratingItems']  as &$item): ?>
          <a class="rating-items__item" 
            href="<?= $item['url']; ?>" 
            target="_blank" 
            data-analyzed-element="rating-items-item" 
            data-analyzed-element-data="<?= $item['dataForAnalyzed']; ?>">
            <div class="rating-items__img-box" style="background-color: <?= $item['color']; ?>;">
              <img class="rating-items__img" alt="<?= $item['url']; ?>" src="<?= $item['logoImg']; ?>" loading="lazy">
            </div>
            <div class="rating-items__info">
              <div class="rating-items__name-box">
                <div class="rating-items__name"><?= $item['name'][$_langDefault]; ?></div>
              </div>
              <div class="rating-items__hostname"><?= $item['hostname']; ?></div>
              <div class="rating-items__labels">
                <? foreach($item['labelsIds']  as &$labelId): ?>
                  <? foreach($_data['labels']  as &$label): ?>
                    <? if($label['labelId'] === $labelId): ?>
                      <label class="app-label-rating" style="background-color: <?= $label['color']; ?>;">
                        #<?= $label['name'][$_langDefault]; ?>
                      </label>
                    <? endif; ?>
                  <? endforeach; ?>
                <? endforeach; ?>
              </div>
            </div>
          </a>
        <? endforeach; ?>
      </div>
    </div>
  </div>

  <!-- descr -->
  <div class="page__descr">
    <h3 class="app-title-3" style="text-align: left;"><?= t('Description'); ?></h3>
    <div><?= $_data['descr']; ?></div>
  </div>

  <!-- links-sources -->
  <? if(count($_data['rating']['linksToSources'])): ?>
    <div class="page__links-sources">
      <h3 class="app-title-3" style="text-align: left;"><?= t('Links to sources'); ?></h3>
      <div class="links-sources">
        <? foreach($_data['rating']['linksToSources']  as $index=>$linkToSource): ?>
          <div class="links-sources__item">
            <span class="links-sources__number">#<?= $index + 1; ?>.</span>
            <a class="links-sources__link" href="<?= $linkToSource; ?>" target="_blank" data-analyzed-element="links-to-sources-item"><?= $linkToSource; ?></a>
          </div>
        <? endforeach; ?>
      </div>
    </div>
  <? endif; ?>
</div>