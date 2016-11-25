<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, bara själva grunden.",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Mitt egna vald huvudtema",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Ljust tema",
            "class"      => "light",
            "stylesheets" => [
                "css/light.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Lätt färgsatt tema",
            "class"      => "color",
            "stylesheets" => [
                "css/color.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Mörkt tema",
            "class"      => "dark",
            "stylesheets" => [
                "css/dark.min.css"
            ]
        ],

        "colorful"  => [
            "title"      => "Färgglatt tema",
            "class"      => "colorful",
            "stylesheets" => [
                "css/colorful.min.css"
            ]
        ],

        "typography" => [
            "title"      => "Typografi",
            "class"      => "light",
            "stylesheets" => [
                "css/typography.min.css"
            ]
        ],

        "separator2" => "------------------------------------------------",

        //"fun"       => [
            //"title"      => "All fun, test and play, make it stand out!",
            //"class"      => "fun",
            //"stylesheets" => []
        //],
    ]
];
