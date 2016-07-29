<?php 
echo "<script src=\"" . $config['jQuery']['cdn'] . "\"></script>\n";
echo "<script>window.jQuery || document.write('<script src=\"" . $config['jQuery']['local'] . "\"><\/script>')</script>\n";
echo "<script src=\"" . $config['paths']['scripts']['min'] . $config['info']['cacheVer'] . "\"></script>\n";
?>