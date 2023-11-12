<div class="app-breadcrumbs">
  <div class="app-breadcrumbs__list">
    <div class="app-breadcrumbs__item">
      <a href="/<?= $_langDefault; ?>" 
        class="app-breadcrumbs__link <?= count($_data['breadcrumbs']) ? '' : 'active'; ?>" 
        data-analyzed-element="breadcrumbs-item"><?= t('Home'); ?></a>
    </div>
    <? foreach($_data['breadcrumbs']  as &$breadcrumb): ?>
      <div class="app-breadcrumbs__item">
        <span class="app-breadcrumbs__link active"><?= $breadcrumb ?></span>
      </div>
    <? endforeach; ?>
  </div>
</div>