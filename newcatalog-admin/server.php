<?
list($url, $params) = explode("?", $_SERVER['REQUEST_URI']);
$url = trim($url, "/");

// labels
preg_match("/^api\/labels\/rating/", $url, $isLabels);
$isLabels = $isLabels[0] ? true : false;

// ratings-items
preg_match("/^api\/ratings-items\/rating/", $url, $isRatingsItems);
$isRatingsItems = $isRatingsItems[0] ? true : false;

// ratings
preg_match("/^api\/ratings/", $url, $isRatings);
$isRatings = $isRatings[0] ? true : false;

// sites screenshots
preg_match("/^api\/sites\/screenshots/", $url, $isSitesScreenshots);
$isSitesScreenshots = $isSitesScreenshots[0] ? true : false;

// sites screenshots errors
preg_match("/^api\/sites\/screenshots-errors/", $url, $isSitesScreenshotsErrors);
$isSitesScreenshotsErrors = $isSitesScreenshotsErrors[0] ? true : false;

switch ($url) {
    case "api/users/auth-refresh":
        echo file_get_contents("data/users/auth-refresh.json");
        break;
    case "api/settings":
        echo file_get_contents("data/settings.json");
        break;
    case "api/sections":
        echo file_get_contents("data/sections.json");
        break;
    case "api/backups":
        echo file_get_contents("data/backups.json");
        break;
    case "api/translations":
        echo file_get_contents("data/translations/{$_GET['serviceName']}/{$_GET['page']}.json");
        break;
    case "api/translations/function-translate":
        echo file_get_contents("data/translations/function-translate/{$_GET['serviceName']}.json");
        break;
    case $isLabels:
        $partUrl = explode("/", $url);
        echo file_get_contents("data/rating/labels/{$partUrl[3]}.json");
        break;
    case $isRatingsItems:
        $partUrl = explode("/", $url);
        echo file_get_contents("data/rating/ratings-items/{$partUrl[3]}.json");
        break;
    case $isRatings:
        $partUrl = explode("/", $url);
        $ratingId = $partUrl[2];
        if ($ratingId) {
            // ratingId
            echo file_get_contents("data/ratings/{$ratingId}.json");
        } else {
            // ratings list
            echo file_get_contents("data/ratings/page/{$_GET['page']}.json");
        }
        break;
    case $isSitesScreenshots:
        $partUrl = explode("/", $url);
        $ratingId = $partUrl[3];
        echo file_get_contents("data/sites/screenshots/{$ratingId}.json");
        break;
    case $isSitesScreenshotsErrors:
        $partUrl = explode("/", $url);
        $ratingId = $partUrl[3];
        echo file_get_contents("data/sites/screenshots-errors/{$ratingId}.json");
        break;
}
?>