# AdaptiveNav
AdaptiveNav is a responsive navigation menu coded with pure CSS. This design utilizes media queries to detect the screen size of devices browsing your website. The menu adapts itself accordingly to present a quality user experience on computers, tablets, and smartphones.

## Demo
Live Demo: http://andrewsgardner.com/code/adaptivenav/demo.html

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

First Header | Second Header
------------ | -------------
Content from cell 1 | Content from cell 2
Content in the first column | Content in the second column

&#8805;
