<?php
/**
* Configuration file for page which can create and put together web pages
* from a collection of views. Through configuration you can add the
* standard parts of the page, such as header, navbar, footer, stylesheets,
* javascripts and more.
*/
return [
    // This layout view is the base for rendering the page, it decides on where
    // all the other views are rendered.
    "layout" => [
        "region" => "layout",
        "template" => "anax/v2/layout/dbwebb_se",
        "data" => [
            "baseTitle" => " | ramverk1",
            "bodyClass" => null,
            "favicon" => "favicon.ico",
            "htmlClass" => null,
            "lang" => "sv",
            "stylesheets" => [
                "css/dbwebb-se.min.css",
                "css/style.css",
            ],
            // "javascripts" => [
            //     "js/responsive-menu.js",
            // ],
        ],
    ],

    // These views are always loaded into the collection of views.
    "views" => [
        [
            "region" => "header",
            "template" => "anax/v2/header/default",
            "sort" => -1,
            "data" => null,
        ],
        [
            "region" => "navbar",
            "template" => "anax/v2/navbar/default",
            "sort" => -1,
            "data" => [
                "navbar" => require __DIR__ . "/navbar.php",
            ],
        ],
        [
            "region" => "footer",
            "template" => "anax/v2/footer/default",
            "sort" => -1,
            "data" => null,
        ],
    ],
];
