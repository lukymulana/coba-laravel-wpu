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
        "name" => "Luky Mulana",
        "email" => "vilodrive28@gmail.com",
        "image" => "Avatar.jpg",
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Luky Mulana",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. In iusto debitis laborum officia necessitatibus impedit. Nobis quam eligendi voluptate dignissimos dolore, quod ratione, tenetur, incidunt fugit reiciendis consectetur aliquid. Iusto impedit consectetur illum sequi. Ducimus, unde eum. Omnis totam cumque optio animi deleniti! Doloremque architecto rem exercitationem deleniti consequuntur similique vero eaque. Qui fugiat nostrum vero hic, aperiam repellendus, facilis veniam repudiandae officiis neque exercitationem ex dolore aut quam iure enim? Quaerat animi odit qui? Eum blanditiis quo earum odio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Avilo",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. In iusto debitis laborum officia necessitatibus impedit. Nobis quam eligendi voluptate dignissimos dolore, quod ratione, tenetur, incidunt fugit reiciendis consectetur aliquid. Iusto impedit consectetur illum sequi. Ducimus, unde eum. Omnis totam cumque optio animi deleniti! Doloremque architecto rem exercitationem deleniti consequuntur similique vero eaque. Qui fugiat nostrum vero hic, aperiam repellendus, facilis veniam repudiandae officiis neque exercitationem ex dolore aut quam iure enim? Quaerat animi odit qui? Eum blanditiis quo earum odio."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Luky Mulana",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. In iusto debitis laborum officia necessitatibus impedit. Nobis quam eligendi voluptate dignissimos dolore, quod ratione, tenetur, incidunt fugit reiciendis consectetur aliquid. Iusto impedit consectetur illum sequi. Ducimus, unde eum. Omnis totam cumque optio animi deleniti! Doloremque architecto rem exercitationem deleniti consequuntur similique vero eaque. Qui fugiat nostrum vero hic, aperiam repellendus, facilis veniam repudiandae officiis neque exercitationem ex dolore aut quam iure enim? Quaerat animi odit qui? Eum blanditiis quo earum odio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Avilo",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. In iusto debitis laborum officia necessitatibus impedit. Nobis quam eligendi voluptate dignissimos dolore, quod ratione, tenetur, incidunt fugit reiciendis consectetur aliquid. Iusto impedit consectetur illum sequi. Ducimus, unde eum. Omnis totam cumque optio animi deleniti! Doloremque architecto rem exercitationem deleniti consequuntur similique vero eaque. Qui fugiat nostrum vero hic, aperiam repellendus, facilis veniam repudiandae officiis neque exercitationem ex dolore aut quam iure enim? Quaerat animi odit qui? Eum blanditiis quo earum odio."
        ],
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
