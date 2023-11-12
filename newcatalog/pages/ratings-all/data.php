<?
global $_data;
global $_sections;
global $_urlParts;
global $_sectionId;
$maxRecordsPerPage = 10;
$page = $_GET['page'] ? $_GET['page'] : 1;
$start = $maxRecordsPerPage * $page - $maxRecordsPerPage;
$ratingsListIds;
$descr;
$title;
$items = [];
$breadcrumbs = [];

if (!$_sectionId) {
  // home
  $ratingsListIds = json_decode(file_get_contents("data/ratings-list.json"), true)['arr'];
  $meta = array_map(function($element) {
    global $_langDefault;
    return $element['name'][$_langDefault];
  }, $_sections);
  $descr = "#".implode(' #', $meta);
  $title = t('#Title main page');
  $breadcrumbs = [];
} else {
  // section
  $ratingsListIds = json_decode(file_get_contents("data/section-ratings/{$_sectionId}.json"), true)['arr'];

  $found_key = array_search($_sectionId, array_column($_sections, 'sectionId'));
  $meta = $_sections[$found_key];
  $descr = t('Media content').": ".$meta['descr'][$_langDefault];
  $title = $meta['name'][$_langDefault];
  $breadcrumbs = [$title];
}

$idsCurrent = array_slice($ratingsListIds, $start, $maxRecordsPerPage);
foreach ($idsCurrent  as &$id) {
  array_push($items, [
    'rating' => json_decode(file_get_contents("data/rating/{$id}.json"), true),
    'labels' => json_decode(file_get_contents("data/labels/{$id}.json"), true),
  ]);
}


$_data = [
  'descr' => $descr,
  'title' => $title,
  'items' => $items,
  'page' => $page,
  'pagesCount' => ceil(count($ratingsListIds) / $maxRecordsPerPage),
  'itemsCount' => count($ratingsListIds),
  'maxRecordsPerPage' => $maxRecordsPerPage,
  'breadcrumbs' => $breadcrumbs,
];
?>