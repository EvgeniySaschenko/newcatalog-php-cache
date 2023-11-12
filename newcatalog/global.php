<?
  $_settings = json_decode(file_get_contents('data/settings.json'), true);
  $_sections = json_decode(file_get_contents('data/sections.json'), true);
  $_translationsSite = json_decode(file_get_contents('data/translations-site.json'), true);
  $_urlParts = explode("/", trim($_SERVER['SCRIPT_URL'], '/'));
  $_template = '';
  $_data = '';
  $_langDefault = '';
?>