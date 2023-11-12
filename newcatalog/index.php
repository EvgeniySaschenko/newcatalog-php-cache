<?
  $_settings = json_decode(file_get_contents('data/settings.json'), true);
  $_sections = json_decode(file_get_contents('data/sections.json'), true);
  $_translationsSite = json_decode(file_get_contents('data/translations-site.json'), true);
  $_urlParts = explode("/", trim($_SERVER['SCRIPT_URL'], '/'));
  $_template = '';
  $_data = '';
  $_langDefault = '';
  $_sectionId = $_urlParts[1] === 'section' ? (int)$_urlParts[2] : 0;
  
  // Redirect if there is a slash at the end
  function redirectIfSlash() {
    if(substr($_SERVER['SCRIPT_URL'], -1) === "/") {
      $url = substr($_SERVER['SCRIPT_URL'],0,-1);
      header("Location: {$url}");
    }
  }
  
  redirectIfSlash();

  // lang default
  function getLangDefault($settings) {
    global $_urlParts;
    $lang = $_urlParts[0];
    $langDefault = '';
    if ($lang) {
      $langDefault = $lang;
    } else if ($_COOKIE['lang']) {
      $langDefault = $_COOKIE['lang'];
    } else {
      $langDefault = $settings['langDefault'];
    }

    $isValidLang = in_array($langDefault, $settings['langs']);
    // If there is no language in the URL, we redirect to the default language
    if (!$isValidLang) {
      header("Location: /{$settings['langDefault']}");
    }
    if (!$lang) {
      header("Location: /{$langDefault}");
    }
    return $langDefault;
  }

  $_langDefault = getLangDefault($_settings);

  // translations
  function t($str) {
    global $_translationsSite;
    global $_langDefault;
    return $_translationsSite[$_langDefault][$str] ? $_translationsSite[$_langDefault][$str] : $str;
  }

  // router
  if (count($_urlParts) <= 1) {
    $_template = 'ratings-all';
  } else if($_urlParts[1] === 'section') {
    $_template = 'ratings-all';
  } else if ($_urlParts[1] === 'rating') {
    $_template = 'rating';
  }
  
  include("pages/{$_template}/data.php");
  
  // The function is needed to limit the scope of variables
  function createTemplate() {
    include("layout.php");
  }
  createTemplate();
?>



