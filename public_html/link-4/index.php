<?php 
$currentPage = "link_4";
require_once("config.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AdaptiveNav v2.0 - Responsive Navigation Menu: Link 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo "\t<!--[if lt IE 9]>\n\t\t<script src=\"" . $config['paths']['scripts']['html5shiv'] . "\"></script>\n\t<![endif]-->\n"; ?>
    
    <!-- AdaptiveNav stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo $config['paths']['css']['expanded'] . $config['info']['cacheVer']; ?>">
</head>
<body>
    <!-- BEGIN AdaptiveNav -->
    
    <?php require_once(TEMPLATES_PATH . "/header.php"); ?>
    
    <!-- END AdaptiveNav -->
    
    <h1>Link 4</h1>
    
    <?php require_once(TEMPLATES_PATH . "/loadScripts.php"); ?>
</body>
</html>