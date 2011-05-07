<?php
header('content-type: application/xml');
require_once("settings.php");

$url = str_replace("{version}", $_GET['v'], BUILD_URL);

echo str_replace(array("{url}", "{bundle-identifier}", "{app-name}"), array($url, APP_BUNDLE_IDENTIFIER, APP_DISPLAY_NAME), file_get_contents("template.plist"));
?>