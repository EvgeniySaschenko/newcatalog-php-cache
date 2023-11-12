<footer class="app-footer">
  <div class="container">
    <div class="app-footer__row">
      <div class="app-footer__custom-code"><?= $_settings['footerHtml']; ?></div>
    </div>
    <div class="app-footer__row">
      <div class="app-footer__langs">
        <? foreach($_settings['langs']  as &$lang): ?>
          <a class="app-footer__langs-item" href="/<?= $lang; ?>" data-analyzed-element="footer-langs-item"><?= $lang; ?></a>
        <? endforeach; ?>
      </div>
    </div>
  </div>
</footer>