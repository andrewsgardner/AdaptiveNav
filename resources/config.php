<?php
$config = array(
    "info" => array(
        "cacheVer" => "?v=2.0"
        ),
    "paths" => array(
        "css" => array(
            "expanded" => "/css/adaptivenav.css",
            "min" => "/css/adaptivenav.min.css"
        ),
        "img" => array(
            "layout" => "/img/layout"
        ),
        "scripts" => array(
            "expanded" => "/js/adaptivenav.js",
            "min" => "/js/adaptivenav.min.js",
            "html5shiv" => "https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"
        )
    ),
    "jQuery" => array(
        "cdn" => "https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js",
        "local" => "/js/local/jquery-1.12.2.min.js"
    )
);

defined("TEMPLATES_PATH")
	or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . "/templates"));
?>