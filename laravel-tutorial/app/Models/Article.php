<?php

namespace App\Models;

class Article
{
    private static $articles = [
        [
            "title" => "Ukraine vs Russia",
            "slug" => "ukraine-vs-rusia",
            "author" => "Russia Today",
            "body" => "Russia side - Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo velit alias reiciendis optio asperiores provident omnis, dolorum nulla sequi explicabo exercitationem suscipit adipisci non libero magnam aspernatur? Saepe, blanditiis velit!"
        ],
        [
            "title" => "Omicron di Indonesia",
            "slug" => "omicron-di-indonesia",
            "author" => "Pemuda Pancasila Bogor",
            "body" => "Omicron - Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo velit alias reiciendis optio asperiores provident omnis, dolorum nulla sequi explicabo exercitationem suscipit adipisci non libero magnam aspernatur? Saepe, blanditiis velit!"
        ]
    ];

    public static function all() {
        // return collect(self::$articles);
        return self::$articles;
    }
}
