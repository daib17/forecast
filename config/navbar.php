<?php
/**
* Supply the basis for the navbar as an array.
*/
return [
    [
        "text" => "Forecast",
        "url" => "forecast",
        "title" => "Forecast",
        "submenu" => [
            "items" => [
                [
                    "text" => "Standard output",
                    "url" => "forecast",
                    "title" => "Request weather forecast.",
                ],
                [
                    "text" => "JSON output",
                    "url" => "json/forecast",
                    "title" => "Request weather forecast (JSON).",
                ],
            ],
        ],
    ],
    [
        "text" => "REST API",
        "url" => "rest-documentation",
        "title" => "API Documentation",
    ],
];
