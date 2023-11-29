<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
        "name" => "Ruly Abdul Rasyid",
        "email" => "email@gmail.com",
        "image" => "ruly.png"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "author 1",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi necessitatibus mollitia tenetur nihil? Recusandae veritatis placeat repudiandae blanditiis asperiores iusto nesciunt provident, ut similique quae natus eligendi voluptatibus quod obcaecati deleniti aliquid assumenda dignissimos ipsum exercitationem nisi labore error? Blanditiis sunt cum dolore vitae nisi perspiciatis modi voluptatum, perferendis eligendi molestias iure necessitatibus voluptatibus, est placeat corporis quaerat magnam. Doloribus hic repellendus culpa officia sunt odio quas nobis incidunt cupiditate atque temporibus voluptatibus, nulla corporis vel. Unde porro iste modi?"
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "author 2",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem sed quidem accusantium repudiandae iusto animi doloribus. Iste minus natus aperiam sit excepturi aliquid. Hic distinctio laborum eligendi, quo enim autem repudiandae eos sed iure amet earum! Amet debitis odit, provident laudantium distinctio placeat ipsam iusto exercitationem? Laborum, praesentium sint architecto doloribus maxime quod neque eveniet. Qui amet iste aliquam. Earum at, rerum nisi nemo tempore quos voluptatem amet. Excepturi itaque suscipit fuga facilis, accusamus tempora quod nulla obcaecati nostrum impedit alias eum autem quia consequatur totam enim perferendis ex maxime vel soluta, quibusdam vitae officia nihil architecto. Unde ipsam autem voluptatibus ullam sequi commodi doloremque. Cupiditate, laudantium magni dolor eius repudiandae quos id soluta quaerat, odit in et voluptatem porro excepturi maiores rerum, similique quia. Itaque, reprehenderit vel? Quas, illum. Consectetur a necessitatibus asperiores laudantium quaerat tempora quos vitae aspernatur architecto magnam iure in quisquam officia nobis laborum voluptate nemo esse quam labore quod quis, adipisci pariatur deleniti. Recusandae sed ipsum itaque hic? Veniam, eveniet, sed praesentium voluptate, itaque tempore perspiciatis quae natus sit in reiciendis! Earum neque perspiciatis architecto sequi reprehenderit. Molestiae est at debitis quas libero corporis exercitationem! Soluta est molestias, quisquam iste non ad inventore magni necessitatibus."
        ]
        ];
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// Halaman single posts

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "author 1",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi necessitatibus mollitia tenetur nihil? Recusandae veritatis placeat repudiandae blanditiis asperiores iusto nesciunt provident, ut similique quae natus eligendi voluptatibus quod obcaecati deleniti aliquid assumenda dignissimos ipsum exercitationem nisi labore error? Blanditiis sunt cum dolore vitae nisi perspiciatis modi voluptatum, perferendis eligendi molestias iure necessitatibus voluptatibus, est placeat corporis quaerat magnam. Doloribus hic repellendus culpa officia sunt odio quas nobis incidunt cupiditate atque temporibus voluptatibus, nulla corporis vel. Unde porro iste modi?"
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "author 2",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem sed quidem accusantium repudiandae iusto animi doloribus. Iste minus natus aperiam sit excepturi aliquid. Hic distinctio laborum eligendi, quo enim autem repudiandae eos sed iure amet earum! Amet debitis odit, provident laudantium distinctio placeat ipsam iusto exercitationem? Laborum, praesentium sint architecto doloribus maxime quod neque eveniet. Qui amet iste aliquam. Earum at, rerum nisi nemo tempore quos voluptatem amet. Excepturi itaque suscipit fuga facilis, accusamus tempora quod nulla obcaecati nostrum impedit alias eum autem quia consequatur totam enim perferendis ex maxime vel soluta, quibusdam vitae officia nihil architecto. Unde ipsam autem voluptatibus ullam sequi commodi doloremque. Cupiditate, laudantium magni dolor eius repudiandae quos id soluta quaerat, odit in et voluptatem porro excepturi maiores rerum, similique quia. Itaque, reprehenderit vel? Quas, illum. Consectetur a necessitatibus asperiores laudantium quaerat tempora quos vitae aspernatur architecto magnam iure in quisquam officia nobis laborum voluptate nemo esse quam labore quod quis, adipisci pariatur deleniti. Recusandae sed ipsum itaque hic? Veniam, eveniet, sed praesentium voluptate, itaque tempore perspiciatis quae natus sit in reiciendis! Earum neque perspiciatis architecto sequi reprehenderit. Molestiae est at debitis quas libero corporis exercitationem! Soluta est molestias, quisquam iste non ad inventore magni necessitatibus."
        ]
    ];

    $new_post = [];

    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "single Post",
        "post" => $new_post
    ]);
});