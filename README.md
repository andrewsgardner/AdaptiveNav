# AdaptiveNav
AdaptiveNav is a responsive, mobile-first navigation menu for modern web layouts. This versatile design uses media queries to detect the screen size of devices browsing your website. The menu adapts itself accordingly to present a quality user experience on computers, tablets, and smartphones.

## Demo
Live Demo: http://www.andrewsgardner.com/code/adaptivenav/demo/

## Recommended Directory Structure

Position ```/resources/``` relative to ```/public_html/``` within the internal structure of your web server.

```
project-root
 |
 +---- public_html
 |    |
 |    +---- css
 |    +---- img
 |    +---- js
 |    +---- .htaccess
 |    +---- index.php
 |
 +---- resources
 |    |
 |    +---- scripts
 |    +---- scss
 |    +---- templates
 |    +---- config.php
 |
 +---- .gitignore
 +---- Gruntfile.js
 +---- package.json
```

## Features
* Pure CSS responsive design.
* Smooth performance on computers, tablets, and smartphones.
* Cross-browser compatibility.

## Usage
1. **Set the Viewport**

   Insert this meta viewport tag into the ```<head>``` section of your HTML document:

   ```<meta name="viewport" content="width=device-width, initial-scale=1.0">```

2. **Include the AdaptiveNav Stylesheet**

   Reference the included ```adaptivenav.css``` stylesheet in the ```<head>``` section of your HTML document.
   
   ```<link rel="stylesheet" type="text/css" href="css/adaptivenav.css"/>```

3. **Add the Menu Markup**

   Insert the following markup into the ```<body>``` section of your HTML Document:

   ```   
   <header class="clearfix">
	   <h1 class="logo"><a href="#">Andrew S. Gardner</a></h1>
	   <div class="menu">
		   <ul>
			   <li><a href="#" class="active">Link 1</a></li>
			   <li><a href="#">Link 2</a></li>
			   <li><a href="#">Link 3</a></li>
			   <li><a href="#">Link 4</a></li>
			   <li><a href="#">Link 5</a></li>
		   </ul>
	   </div>
   </header>
   ```
## Media Queries
If necessary, you can change these breakpoints to best suit the needs of your website:

   Breakpoints | Intended Devices
   ----------- | -------------
   Screen widths &#8805; 940px | Computers
   Screen widths between 939px and 639px | Tablets
   Screen widths &#8804; 640px | Smartphones

## Browser Support
* Chrome 10+
* Internet Explorer 9+
* Firefox 4+
* Opera 11+
* Safari 5.0.5+
* iOS Safari
* Android Browser

## License
The MIT License (MIT)

Copyright (c) 2015 Andrew S. Gardner

Author URI: http://www.andrewsgardner.com/

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

