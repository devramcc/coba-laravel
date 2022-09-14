<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Halaman 1",
            "author" => "Ramadhan",
            "slug" => "halaman-1",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium delectus exercitationem quo officiis, ullam praesentium eligendi culpa recusandae incidunt, eius officia. Odit dolores illum dolore veniam eum asperiores, voluptatem aut soluta numquam dignissimos est aspernatur id, iusto laboriosam voluptatibus. Sint corporis eligendi optio suscipit qui quo necessitatibus mollitia cum. Repudiandae, iusto quia necessitatibus ea illum hic, ex eveniet corrupti laboriosam laborum aperiam molestias quos harum earum quam sequi explicabo ipsum voluptas a reiciendis consequatur maiores voluptatem qui. Dignissimos, excepturi qui?"
        ],
        [
            "title" => "Halaman 2",
            "author" => "Ramadhan",
            "slug" => "halaman-2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium delectus exercitationem quo officiis, ullam praesentium eligendi culpa recusandae incidunt, eius officia. Odit dolores illum dolore veniam eum asperiores, voluptatem aut soluta numquam dignissimos est aspernatur id, iusto laboriosam voluptatibus. Sint corporis eligendi optio suscipit qui quo necessitatibus mollitia cum. Repudiandae, iusto quia necessitatibus ea illum hic, ex eveniet corrupti laboriosam laborum aperiam molestias quos harum earum quam sequi explicabo ipsum voluptas a reiciendis consequatur maiores voluptatem qui. Dignissimos, excepturi qui?"
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
