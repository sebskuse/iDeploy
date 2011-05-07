<?php
// Edit here to change the version that this file will show.
$version = "1.1.1";
$stage = "r4";
$commit = "d16184d6ac64ee360b5a45f82444c58f67b14be3";

require_once("settings.php");

// Setup filename for the build
$filename = str_replace("{version}", $version, BUILD_FILENAME);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
	<link rel="apple-touch-icon" href="icon.png">
	<meta name="apple-mobile-web-app-capable" content="yes" /> 
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> 
	<link href="css.css" media="screen" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="user-scalable=no, width=device-width" />
		<title><?=WEBSITE_NAME?></title>
	</head>
	<body>
		<?php
		if(!file_exists($filename)) echo "<h1>ERROR - Application not found!</h1>";
		?>
		<h1><?=WEBSITE_NAME?></h1>
		<h2>Current Version: v<?=$version?> [<?=$stage?>]</h2>
		<p>Compiled <?php echo date ("d/m/Y,  H:i", filemtime($filename)); ?></p>		
			<div><a href="provisioning.mobileprovision"><img src="settings.png"/><span>Provisioning</span></a></div>
			<div><a href="itms-services://?action=download-manifest&url=<?=str_replace("{version}", $version, PLIST_URL)?>"><img src="appicon.png" height="75" width="75"  /><span>Application</span></a><font style="font-size:9pt">(<?php echo number_format(filesize($filename) / 1024 / 1024, 2); ?>MB)</font></div>
		<p style="clear:both; padding-top:30px;">COMMIT <?=$commit;?></p>
	</body>
</html>
