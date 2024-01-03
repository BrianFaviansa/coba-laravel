<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Brian Faviansa",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam consequatur accusantium, voluptate fugit amet hic iusto repellat ullam magni distinctio nobis non qui vero magnam in incidunt! Earum quos totam cumque. Aut quaerat aperiam corporis minus nemo aspernatur praesentium fuga dolore repellendus, ducimus veniam dolores recusandae iusto saepe ut! Saepe exercitationem in error quo? Magnam optio, ipsam consectetur quia, officiis temporibus, sequi necessitatibus quibusdam quas totam quos illum labore libero quasi expedita accusamus. Quae distinctio fuga inventore rerum esse laborum!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ucup Surucup",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod esse minus provident enim incidunt repudiandae magni ut molestiae soluta non voluptas ab vitae quos, molestias distinctio culpa recusandae dolor. Aut eaque quam veritatis iure id maiores iusto, cumque, repellendus, ullam quisquam rem praesentium autem consequuntur aperiam dolore quia nemo eum voluptate ex ducimus deserunt nostrum officiis! Eos, illum! Mollitia consectetur aliquid architecto, animi commodi eveniet maiores, nam beatae repellendus, veritatis dolor blanditiis sed voluptas quisquam dicta maxime repellat fugiat. Tenetur, quo eius? Eos, ullam. Ea eos aperiam officiis, cum commodi minima soluta animi voluptatem temporibus, facilis corporis quos ratione in."
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
