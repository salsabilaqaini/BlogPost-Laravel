<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Salsabila Qurrotul 'Aini",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab mollitia accusamus illo placeat saepe ea! Est, aperiam. Assumenda corrupti, numquam similique ducimus error explicabo illo vel earum quasi enim, laudantium in, placeat excepturi exercitationem! Harum illo impedit aperiam nisi. Deserunt autem ipsa repellat at! Omnis incidunt labore voluptatibus quasi praesentium laboriosam ea beatae eligendi nesciunt consequuntur iusto eum soluta eius sed voluptas maxime atque ratione, reprehenderit eos vero? Cumque quaerat fugit ducimus, natus reprehenderit consequuntur!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adibah Aida",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cum repudiandae quo soluta suscipit aperiam, ipsum molestiae facilis dolorem consequatur distinctio, assumenda quas enim nihil non, voluptatibus fuga ad. Aspernatur officia magnam sapiente. Optio dignissimos cupiditate quam, nisi, excepturi libero sapiente tenetur dicta ex, repellat enim saepe voluptates dolore veritatis reiciendis sunt expedita nobis accusantium. At ab officiis ducimus earum dolor porro maiores cupiditate repudiandae debitis inventore officia, asperiores maxime? Ducimus blanditiis inventore tenetur aut, illo impedit cum facilis facere explicabo sunt perferendis maxime omnis recusandae sapiente, expedita architecto non? Voluptatum quam soluta praesentium commodi voluptatibus provident sit expedita iusto?"
        ]
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
