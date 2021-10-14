<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Putra Hanif Ammarta",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quibusdam, maiores officiis suscipit quod esse aperiam assumenda temporibus pariatur accusantium quam veniam repellendus nostrum quia dolorum consequuntur numquam quas eaque amet dolor quidem, consectetur provident! Quod consequuntur quo suscipit perferendis cupiditate a possimus, eius reiciendis nesciunt dignissimos quam laudantium? Quidem, voluptatem ea? Numquam, cum provident accusamus assumenda maiores, ab delectus adipisci incidunt odit minus veritatis reprehenderit iure expedita aliquid impedit nesciunt earum eos facilis facere sunt natus quod! Molestias, velit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Putra Hanif Ammarta",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quisquam obcaecati doloremque consequatur laboriosam, error voluptatum perspiciatis totam nam. Quasi minima consectetur praesentium, fuga pariatur soluta, dolores aspernatur, unde architecto veniam ducimus non fugit libero porro placeat obcaecati aperiam id culpa similique cupiditate eveniet blanditiis. Provident dolores necessitatibus accusantium laboriosam omnis cumque numquam deleniti iste eum? Corrupti ullam labore ad ratione totam sint officia architecto non accusamus dolorum, provident neque. Quo deleniti voluptates temporibus error autem ipsam omnis illo voluptatibus itaque modi quod, necessitatibus labore rerum? Explicabo laudantium iure excepturi, enim laborum voluptate? Eaque, ipsum voluptate. Voluptates dolorum vero placeat."
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
