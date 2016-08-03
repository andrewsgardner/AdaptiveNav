<?php 
$currentPage = "link_2";
require_once("config.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AdaptiveNav v2.0 - Responsive Navigation Menu: Link 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- AdaptiveNav stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo $config['paths']['css']['expanded'] . $config['info']['cacheVer']; ?>">
    
    <!-- Demo stylesheet for example styles -->
    <link rel="stylesheet" type="text/css" href="/css/demo-styles.css">
    
    <?php echo "<!--[if lt IE 9]>\n\t\t<script src=\"" . $config['paths']['scripts']['html5Shiv'] . "\"></script>\n\t\t<script src=\"" . $config['paths']['scripts']['respondJs'] . "\"></script>\n\t<![endif]-->\n"; ?>
</head>
<body>
    <!-- BEGIN AdaptiveNav -->
    
    <?php require_once(TEMPLATES_PATH . "/header.php"); ?>
    
    <!-- END AdaptiveNav -->
    
    <!-- Start demo markup -->
    
    <section>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
        <h1>Resize Browser Window...</h1>
    </section>
    
    <!-- End demo markup -->
    
    <?php require_once(TEMPLATES_PATH . "/loadScripts.php"); ?>
</body>
</html>