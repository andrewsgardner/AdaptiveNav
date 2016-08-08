# AdaptiveNav
AdaptiveNav is a responsive, mobile-first navigation menu for modern web layouts. This versatile design uses media queries to detect the screen size of devices browsing your website. The menu adapts itself accordingly to present a quality user experience on computers, tablets, and smartphones.

## Demo
Live Demo: http://www.andrewsgardner.com/code/adaptivenav/demo/

## Features
* Mobile-first responsive design.
* Smooth performance on computers, tablets, and smartphones.
* Scroll-based animation via CSS3 transitions.
* Menu link paths are handled by a PHP array.
* Cross-browser compatibility.
* Loads jQuery from [Google Hosted Libraries](https://developers.google.com/speed/libraries/#jquery) with a local fallback available.
* Hamburger menu renders on mobile devices to optimize screen real estate.
* Active page is emphasized in navigation menu styling.

## Recommended Directory Structure

Position ```/resources/``` relative to ```/public_html/``` within the internal structure of your web server.

```
project-root
 |
 +---- public_html        <-- Document Root
 |    |
 |    +---- css           <-- Compiled CSS
 |    +---- img
 |    +---- js            <-- Compiled JavaScript
 |    +---- .htaccess     <-- Apache Server Configs
 |    +---- index.php
 |
 +---- resources          <-- Configs & Source Files
 |    |
 |    +---- scripts       <-- JavaScript Source Files
 |    +---- scss          <-- Sass Partials
 |    +---- templates     <-- PHP Includes
 |    +---- config.php    <-- Routing & Variable Configs
 |
 +---- .gitignore
 +---- Gruntfile.js
 +---- package.json
```

## Installation

Clone AdaptiveNav into your project behind the document root of your host.

```
git clone https://github.com/andrewsgardner/AdaptiveNav.git .
```

###### Adding a period at the end prevents AdaptiveNav's root folder name form being cloned into your project.

## Configuration

1. **Create an .htaccess file in your test server's [/public_html/](https://github.com/andrewsgardner/AdaptiveNav/tree/master/public_html) directory.**

   In .htaccess, point the PHP include path at the [/resources/](https://github.com/andrewsgardner/AdaptiveNav/tree/master/resources) directory. *
   
   ```
   php_value include_path "/path/to/resources/directory/"
   ```

   ###### * Linux uses forward slashes in URLs while Windows uses back slashes. Accordingly, please ensure that you only use forward slashes.

2. **Add an empty ```$currentPage``` variable at the top of each page** *
   
   ```
   <?php $currentPage = ""; ?>
   ```
   
   ###### * The values for $currentPage will be covered later in this documentation.
   
3. **Add a ```require_once``` statement for [config.php](https://github.com/andrewsgardner/AdaptiveNav/blob/master/resources/config.php) at the top of each page.**
   
   ```
   <?php require_once("config.php"); ?>
   ```
   
4. **Add a viewport in the ```<head>``` section of each page.**
   
   ```
   <meta name="viewport" content="width=device-width, initial-scale=1">
   ```

5. **Link AdaptiveNav's stylesheet in the ```<head>``` section of each page.**
   
   ```
   <link rel="stylesheet" type="text/css" href="<?php echo $config['paths']['css']['expanded'] . $config['info']['cacheVer']; ?>">
   ```
   
6. **Provide conditional comments in the ```<head>``` section of each page.**

   These will only be processed by Internet Explorer 9 and below.
   
   ```
   <?php echo "<!--[if lt IE 9]>\n\t\t<script src=\"" . $config['paths']['scripts']['html5Shiv'] . "\"></script>\n\t\t<script src=\"" . $config['paths']['scripts']['respondJs'] . "\"></script>\n\t<![endif]-->\n"; ?>
   ```

7. **Add a ```require_once``` statement for [header.php](https://github.com/andrewsgardner/AdaptiveNav/blob/master/resources/templates/header.php) in the ```<body>``` section of each page.**

   ````
   <?php require_once(TEMPLATES_PATH . "/header.php"); ?>
   ```

8. **Add a ```require_once``` statement for [loadScripts.php](https://github.com/andrewsgardner/AdaptiveNav/blob/master/resources/templates/loadScripts.php) in the ```<body>``` section of each page.**
   
   ```
   <?php require_once(TEMPLATES_PATH . "/loadScripts.php"); ?>
   ```
   
## Custom Menu Links

The included menu link paths are for demonstration purposes only.

Follow the instructions below to establish your own link structure:

1. **In ```config.php```, define directories your header will link to using the [$headerRoutes](https://github.com/andrewsgardner/AdaptiveNav/blob/master/resources/config.php#L30) array.**
   
   Assign a unique variable name for each link path.
   
   ```
   // example config settings
   
   $headerRoutes = array(
        "landing_page" => "/",
        "about_link" => "/about/",
        "portfolio_link" => "/portfolio/",
        "contact_link" => "/contact/"
   );
   ```

2. **In [header.php](https://github.com/andrewsgardner/AdaptiveNav/blob/master/resources/templates/header.php), update the array values for ```$headerRoutes```.**

   ```
   $headerRoutes[landing_page]
   $headerRoutes[about_link]
   $headerRoutes[portfolio_link]
   $headerRoutes[contact_link]
   ```

3. **In [header.php](https://github.com/andrewsgardner/AdaptiveNav/blob/master/resources/templates/header.php), assign a unique value for each instance of ```$currentPage```.**

   ```$currentPage``` visually emphasizes the active page in the menu's styling.
   
   ```
   if ( $currentPage == 'landing' ) echo ' class="active"'
   if ( $currentPage == 'about' ) echo ' class="active"'
   if ( $currentPage == 'portfolio' ) echo ' class="active"'
   if ( $currentPage == 'contact' ) echo ' class="active"'
   ```

4. **In [/public_html/](https://github.com/andrewsgardner/AdaptiveNav/tree/master/public_html), create directories for each new link path.**

   ```
   project-root
    |
    +---- public_html          <-- Document Root
    |    |
    |    +---- about           <-- /about/
    |    +---- portfolio       <-- /portfolio/
    |    +---- contact         <-- /contact/
    |    +---- index.php       <-- /
   ```

5. **Add the appropriate ```$currentPage``` value on each page as defined in step three.**

## Media Queries
If necessary, you can change these breakpoints to best suit the needs of your website:

   Breakpoints | Intended Devices
   ----------- | -------------
   Screen min-width of 0.1em (1.6px) | Smartphones
   Screen min-width of 40em (640px) | Tablets
   Screen min-width of 62em (992px) | Computers

## Browser Support
* Chrome 10+
* Internet Explorer 9+
* Firefox 4+
* Opera 11+
* Safari 5.0.5+
* iOS Safari
* Android Browser

## License
AdaptiveNav is licensed under the [MIT license](https://github.com/andrewsgardner/AdaptiveNav/blob/master/LICENSE).
