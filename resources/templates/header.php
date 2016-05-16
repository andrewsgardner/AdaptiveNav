<?php
include(dirname(__FILE__) . "/../config.php");

/* BEGIN header */
echo "\t\t<header>\n";

/* BEGIN logo */
echo "\t\t\t<div class=\"logo\">\n";
echo "\t\t\t\t"?><a href="#"><img src="<?php echo $config['paths']['img']['layout'] . "/logo.png"; ?>" alt="AdaptiveNav v2.0"></a><?php 
echo "\n\t\t\t</div>\n";
/* END logo */

/* BEGIN primary nav */
echo "\t\t\t<nav class=\"primary-menu\">\n";

/* BEGIN hamburger icon */
echo "\t\t\t<div class=\"hamburger-icon\"></div>\n";
/* END hamburger icon */

echo "\t\t\t<ul>\n"; ?>
<?php echo "\t\t\t\t"; ?><li><a href="#"<?php if($currentPage == 'link_1') echo ' class="active"'; ?>>Link 1</a></li><?php echo "\n"; ?>
<?php echo "\t\t\t\t"; ?><li><a href="#"<?php if($currentPage == 'Link_2') echo ' class="active"'; ?>>Link 2</a></li><?php echo "\n"; ?>
<?php echo "\t\t\t\t"; ?><li><a href="#"<?php if($currentPage == 'link_3') echo ' class="active"'; ?>>Link 3</a></li><?php echo "\n"; ?>
<?php echo "\t\t\t\t"; ?><li><a href="#"<?php if($currentPage == 'link_4') echo ' class="active"'; ?>>Link 4</a></li><?php echo "\n"; ?>
<?php echo "\t\t\t\t"; ?><li><a href="#"<?php if($currentPage == 'link_5') echo ' class="active"'; ?>>Link 5</a></li><?php echo "\n"; ?>
<?php echo "\t\t\t</ul>\n";
echo "\t\t\t</nav>\n";
/* END primary nav */

echo "\t\t</header>\n";
/* End header */
?>