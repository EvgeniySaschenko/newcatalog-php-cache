<div class="page page--ratings-all">
  <!-- title -->
  <h1 class="app-title-1" style="text-align: center;"><?= $_data['title']; ?></h1>
  <!-- list -->
  <div class="page__ratings-list">
    <div class="app-ratings-list">
      <div class="app-ratings-list__items">
          <? foreach($_data['items']  as $index=>$item): ?>
            <div class="app-ratings-list__item">
              <a href="/<?= $_langDefault; ?>/rating/<?= $item['rating']['ratingId']; ?>" 
                class="app-ratings-list__title" 
                data-analyzed-element="ratings-list-title">
                <?= $item['rating']['name'][$_langDefault]; ?>
              </a>
              <div class="app-ratings-list__descr"><?= $item['rating']['descr'][$_langDefault]; ?></div>
              <!-- labels -->

                <div class="app-ratings-list__labels">
                  <? foreach($item['labels']  as &$label): ?>
                    <label class="app-label-rating" style="background-color: <?= $label['color']; ?>;"><?= $label['name'][$_langDefault]; ?></label>
                  <? endforeach; ?>
                </div>


              <div class="app-ratings-list__bottom">
                <div>
                  <span class="app-ratings-list__number">
                    #<?= (($_GET['page'] ? $_GET['page'] : 1) - 1) * $_data['maxRecordsPerPage'] + ($index + 1); ?>
                  </span>
                </div>
                <!-- sections -->
                <div class="app-ratings-list__sections">
                  <? foreach($item['rating']['sectionsIds']  as &$sectionsId): ?>
                    <? foreach($_sections  as &$section): ?>
                      <? if($section['sectionId'] === $sectionsId): ?>
                        <label class="app-ratings-list__sections-item">#<?= $section['name'][$_langDefault]; ?></label>
                      <? endif; ?>
                    <? endforeach; ?>
                  <? endforeach; ?>
                </div>
              </div>
            </div>
          <? endforeach; ?>
      </div>
    </div>
  </div>

  <!-- pagination -->
  <? if($_data['pagesCount'] > 1): ?>
    <div class="app-pagination">
      <div class="app-pagination__list">
        <? for($i = 1; $i <= $_data['pagesCount']; $i++): ?>
          <a href="/<?= $_langDefault; ?>/?page=<?= $i; ?>" 
            class="app-pagination__item <?= $i === (int)$_GET['page'] || (!(int)$_GET['page'] && $i === 1) ? 'active' : '' ?>" 
            data-analyzed-element="pagination-item"><?= $i; ?></a>
        <? endfor; ?>
      </div>
    </div>
  <? endif; ?>

  <!-- descr -->
  <div class="page__descr">
    <h3 class="app-title-3" style="text-align: left;"><?= t('Description'); ?></h3>
    <div><?= $_data['descr']; ?></div>
  </div>
</div>
