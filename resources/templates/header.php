<?php 
/* BEGIN header */
echo "<header>\n";

/* BEGIN logo */
echo "\t\t<div class=\"logo\">\n";
echo "\t\t\t<a href=\"" . $headerRoutes['demoDir1'] . "\"><img src=\"" . $config['paths']['img']['layout'] . "/logo.svg" . "\" alt=\"AdaptiveNav v2.0" . "\"></a>\n";
echo "\t\t</div>\n";
/* END logo */

/* BEGIN primary nav */
echo "\t\t<nav class=\"primary-menu\">\n";
/* BEGIN hamburger icon */
echo "\t\t\t<div class=\"hamburgerTrigger\">\n";
echo "\t\t\t\t<span class=\"hamburger-icon\"></span>\n";
echo "\t\t\t</div>\n";
/* END hamburger icon */
echo "\t\t\t<ul>\n";
echo "\t\t\t\t<li><a href=\"" . $headerRoutes['demoDir1'] . "\""?><?php if($currentPage == 'link_1') echo ' class="active"'; ?><?php echo ">Link 1</a></li>\n";
echo "\t\t\t\t<li><a href=\"" . $headerRoutes['demoDir2'] . "\""?><?php if($currentPage == 'link_2') echo ' class="active"'; ?><?php echo ">Link 2</a></li>\n";
echo "\t\t\t\t<li><a href=\"" . $headerRoutes['demoDir3'] . "\""?><?php if($currentPage == 'link_3') echo ' class="active"'; ?><?php echo ">Link 3</a></li>\n";
echo "\t\t\t\t<li><a href=\"" . $headerRoutes['demoDir4'] . "\""?><?php if($currentPage == 'link_4') echo ' class="active"'; ?><?php echo ">Link 4</a></li>\n";
echo "\t\t\t</ul>\n";
echo "\t\t</nav>\n";
/* END primary nav */

echo "\t</header>\n";
/* End header */
?>