<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
