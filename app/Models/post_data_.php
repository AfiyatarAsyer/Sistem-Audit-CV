<?php

namespace App\Models;


class post_data 
{
   private static $blog_pos = [
    [
        "title" => "judul post pertamaku",
        "slug" => "judul-post-pertama",
        "author" => "Virgelius Hendrawan Taralandu",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quidem itaque ad odit harum dicta, tempora pariatur aliquid optio blanditiis aperiam maxime fuga alias placeat dolorem magni rem temporibus aut soluta possimus. Doloribus accusamus libero minus dicta pariatur illum deleniti similique! Sed ducimus adipisci placeat maiores quasi. Ut, sunt quae. Labore quisquam doloremque, consequuntur numquam incidunt possimus corrupti error dolore reiciendis atque adipisci quos distinctio vel ut consequatur aut nostrum ea maiores laudantium a cumque praesentium. 
        Sapiente ipsum soluta vel maiores."
    ],
    [
        "title" => "judul post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "fernando tores",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum suscipit consectetur molestias optio dolores atque nihil, laudantium animi consequuntur esse debitis deleniti nesciunt soluta vero eius, doloremque praesentium sequi mollitia a eligendi, tenetur eaque autem in. Quas perspiciatis nobis velit sapiente blanditiis suscipit laboriosam ea! Atque, perspiciatis voluptatibus vero tempore exercitationem blanditiis quibusdam possimus officiis dolore maiores eos fugiat, corrupti repellat veritatis, aliquid neque impedit ducimus alias mollitia accusantium! Dolor, architecto dolorum quae sit magnam repudiandae quis numquam aliquid eos? Iure consequatur, 
        sint voluptate possimus ad ab in distinctio pariatur hic, 
        illo quae quod asperiores! Repellendus quia accusamus nam id."
    ]
];

public static function all()
    {
        return collect (self::$blog_pos);
    }

public static function find($slug)
{
        $posts = static::all();
    return $posts->firstWhere('slug',$slug);
}
}
