<?php
defined("TEMPLATES_PATH")
	or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . "/templates"));

$config = array(
    "info" => array(
        "cacheVer" => "?v=2.0"
        ),
    "paths" => array(
        "css" => array(
            "expanded" => "/css/adaptivenav.css",
            "min" => "/css/adaptivenav.min.css"
        ),
        "scripts" => array(
            "expanded" => "/js/adaptivenav.js",
            "min" => "/js/adaptivenav.min.js",
            "html5Shiv" => "/js/local/html5shiv.min.js",
            "respondJs" => "/js/local/respond.min.js"
        ),
        "img" => array(
            "layout" => "/img"
        )
    ),
    "jQuery" => array(
        "cdn" => "https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js",
        "local" => "/js/local/jquery-1.12.2.min.js"
    )
);

$headerRoutes = array(
    "demoDir1" => "/",
    "demoDir2" => "/link-2/",
    "demoDir3" => "/link-3/",
    "demoDir4" => "/link-4/"
);
?>