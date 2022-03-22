<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ramadhan Arif H.",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque quidem sint excepturi, fugiat corrupti iure quas numquam, debitis dicta doloremque officiis, adipisci neque aut quisquam! Nam error id consequatur rem provident? Est quo expedita odio sequi quae doloribus ipsum asperiores, iste magnam veniam esse ratione totam error vitae non officia id placeat dignissimos sunt dolores quas porro! Inventore nostrum ea consequuntur impedit, in amet asperiores, suscipit eligendi rerum recusandae optio enim dolore ullam, tenetur laboriosam? Possimus praesentium aut earum inventore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Writer 2",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum nisi doloremque voluptate temporibus quo architecto? Necessitatibus corrupti repudiandae consectetur voluptatum minima. Eos distinctio odit perspiciatis recusandae, molestiae quam saepe sequi labore inventore dolorem repellendus dicta fugit asperiores libero ut pariatur et porro deserunt consequuntur consequatur? Et itaque expedita a quo facilis obcaecati consectetur impedit magnam, qui maxime ea sit? Alias quae consequuntur, et nisi eveniet facilis est totam quam, ipsam maiores aut cupiditate illo sint. Unde eveniet eligendi esse at voluptate? Sint eum veniam labore quis quibusdam deleniti, soluta accusantium accusamus porro non. Natus veniam unde minima impedit deleniti tempore!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
