<?php 
/* BEGIN header */
echo "<header>\n";

/* BEGIN navbar */
echo "<div class=\"nav-container\">\n";

/* BEGIN logo */
echo "<div class=\"logo\">\n";
echo "<a href=\"" . "#" . "\"><img src=\"" . $config['paths']['img']['layout'] . "/logo.png" . "\" alt=\"AdaptiveNav v2.0" . $config['info']['author'] . "\"></a>\n";
echo "</div>\n";
/* END logo */

/* BEGIN primary nav */
echo "<nav class=\"primary-menu\">\n";
/* BEGIN hamburger icon */
echo "<div class=\"hamburgerTrigger\">\n";
echo "<span class=\"hamburger-icon\"></span>\n";
echo "</div>\n";
/* END hamburger icon */
echo "<ul>\n";
echo "<li><a href=\"" . $headerRoutes['demoDir1'] . "\""?><?php if($currentPage == 'link_1') echo ' class="active"'; ?><?php echo ">Link 1</a></li>\n";
echo "<li><a href=\"" . $headerRoutes['demoDir2'] . "\""?><?php if($currentPage == 'link_2') echo ' class="active"'; ?><?php echo ">Link 2</a></li>\n";
echo "<li><a href=\"" . $headerRoutes['demoDir3'] . "\""?><?php if($currentPage == 'link_3') echo ' class="active"'; ?><?php echo ">Link 3</a></li>\n";
echo "<li><a href=\"" . $headerRoutes['demoDir4'] . "\""?><?php if($currentPage == 'link_4') echo ' class="active"'; ?><?php echo ">Link 4</a></li>\n";
echo "</ul>\n";
echo "</nav>\n";
/* END primary nav */

echo "</div>\n";
/* END navbar */

echo "</header>\n";
/* End header */
?>