<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "ramadhan",
        "email" => "dev.ramddd@gmail.com",
        "image" => "profile.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "halaman 1",
        "post" => $new_post
    ]);
});