<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Ratna Sudiarto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore provident ex laboriosam neque, voluptatibus placeat voluptatum tempora quod unde, possimus facere sunt commodi quaerat doloribus est architecto accusantium impedit! Dolorum qui voluptatem laudantium nobis officia. Eaque, illo. Neque dolorum reiciendis ex error culpa aperiam modi, magnam dolorem alias veniam nam consequuntur vitae ab, repellat voluptatum perferendis quae, similique a iusto. Et perspiciatis asperiores, omnis quas, facere voluptas accusamus vitae aut voluptate exercitationem pariatur voluptatum, ipsa laborum deserunt nemo consequatur? Non cumque, similique porro consequuntur voluptatum, dolorem totam excepturi ducimus iste, atque beatae eaque ea ipsa reprehenderit id enim neque qui. Nisi fugiat accusantium ullam mollitia. Incidunt, libero dolor nam voluptas modi corporis delectus! Dolorem ab nihil soluta beatae sit quisquam?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Pandji Nugraha",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates exercitationem iste molestiae rem autem nostrum! Atque laborum accusamus vero impedit. Odio itaque sequi molestias explicabo ducimus quae corrupti omnis, qui, dignissimos quod, minima voluptas. Id recusandae unde perspiciatis dignissimos esse, neque impedit incidunt harum temporibus ad nihil eos commodi voluptatum saepe eligendi necessitatibus cumque dolores, corporis vel officiis consectetur deleniti. Rem ad animi earum quia exercitationem fugiat dignissimos iure nostrum. Atque repellat earum, praesentium error maiores facilis et nihil quod iure harum quis laudantium explicabo, quaerat quam totam necessitatibus voluptate! Itaque voluptatum rem dolore nostrum. Magni necessitatibus similique adipisci atque."
        ]
    ];

    public static function all()
    {
        //mendapatkan semua data
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        //mengambil semua postnya
        $posts = static::all();

        //mencari post dengan function bawaan firstwhere  slug = slug
        return $posts->firstWhere('slug', $slug);
    }
}
