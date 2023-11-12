<?
  global $_settings;
  global $_sections;
  global $_translationsSite;
  global $_urlParts;
  global $_template;
  global $_data;
  global $_langDefault;
  global $_sectionId;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $_data['title']; ?> <?= $_settings['pageTitleSufix']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= $_data['descr']; ?>">
  <link rel="icon" type="image/x-icon" href="<?= $_settings['imageAppFavicon']; ?>">
  <style>
    :root {
      --app-color-body-background: <?= $_settings['colorBodyBackground']; ?>;
      --app-color-primary: <?= $_settings['colorPrimary']; ?>;
      --app-color-primary-inverted: <?= $_settings['colorPrimaryInverted']; ?>;
      --app-color-text-regular: <?= $_settings['colorTextRegular']; ?>;
      --app-color-selection-background: <?= $_settings['colorSelectionBackground']; ?>;
      --app-color-selection-text: <?= $_settings['colorSelectionText']; ?>;
      --app-image-preloader: url(<?= $_settings['imageAppPreloader']; ?>);
    }
  </style>
  <link rel="stylesheet" href="/assets/css/styles.css?v=4">
  <script>
    <?= $_settings['headScript']; ?>
  </script>
  <style>
    <?= $_settings['headStyles']; ?>
  </style>
</head>
<body>
  <div class="wrapper">
    <?= $page; ?>
    <? include("layout/header.php") ?> 
    <div class="app-content container">
      <div class="app-content__layout">
        <? include("layout/breadcrumbs.php"); ?>
        <? include("layout/menu-slider.php"); ?>
        <? include("pages/{$_template}/layout.php"); ?>
      </div>
    </div>
    <? include("layout/menu-main.php"); ?>
    <? include("layout/footer.php"); ?> 
  </div>
  <script src="/assets/js/app.js?v=1"></script>
  <script>
    <?= $_settings['googleTagManagerCode']; ?>
  </script>
</body>
</html>