<?
global $_data;
global $_langDefault;
$ratingId = $_urlParts[2];
$rating = json_decode(file_get_contents("data/rating/{$ratingId}.json"), true);

$_data = [
  'descr' => $rating['descr'][$_langDefault],
  'title' => $rating['name'][$_langDefault],
  'rating' => $rating,
  'labels' => json_decode(file_get_contents("data/labels/{$ratingId}.json"), true),
  'ratingItems' => json_decode(file_get_contents("data/rating-items/{$ratingId}.json"), true),
  'breadcrumbs' => [$rating['name'][$_langDefault]],
];
?>