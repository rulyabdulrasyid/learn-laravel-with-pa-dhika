<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // User::create([
        //     'name'=>'Ruly Abdul Rasyid',
        //     'email'=>'ruly@gmail.com',
        //     'password'=> bcrypt('12345'),
        // ]);

        // User::create([
        //     'name'=>'Novita Purnamasari Hendarmin',
        //     'email'=>'nonop@gmail.com',
        //     'password'=> bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=> 'Web Programming',
            'slug'=> 'web-programming'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Post 1',
        //     'slug'=> 'judul-post-1',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam est et ad consequatur itaque tempora mollitia minima? Ab sapiente facilis modi, necessitatibus minus quaerat cum, ipsam maxime eius repellat minima deleniti delectus cupiditate fugiat. Rerum aliquid ea fuga cum facere eos',
        //     'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam est et ad consequatur itaque tempora mollitia minima? Ab sapiente facilis modi, necessitatibus minus quaerat cum, ipsam maxime eius repellat minima deleniti delectus cupiditate fugiat. Rerum aliquid ea fuga cum facere eos. Adipisci quia similique necessitatibus. </p><p>Ex iure eum ipsum corporis quam quia deserunt harum ut dolore soluta culpa dolores tempore consequatur autem odit, consequuntur modi sapiente aliquid reiciendis quae fuga quod! Et cumque odio enim totam, optio doloremque placeat suscipit numquam velit, minima vitae, non accusamus fugiat unde saepe quia nulla? Odit quidem facere alias cum dolores! Tempore obcaecati modi, incidunt corrupti blanditiis quod dolorem, nesciunt autem ipsam accusantium sapiente aperiam voluptatum voluptatibus et id maxime! Ut magnam dolores quaerat fuga earum debitis laboriosam tempore quasi laborum recusandae tenetur est facere neque voluptatum et, asperiores veritatis incidunt eos nemo officia quos quod. </p><p>Exercitationem porro ducimus expedita esse cum recusandae delectus in cumque? Nobis autem perferendis suscipit necessitatibus dolore aliquam alias beatae unde nostrum, minima cumque eos quos nihil quod amet quasi provident. Adipisci ex est, officia, autem minus fugiat delectus odit a nesciunt enim ratione similique voluptate veniam voluptas repudiandae nostrum explicabo! Ullam incidunt totam dignissimos maxime voluptatibus accusamus magni? In praesentium exercitationem molestiae voluptas fugiat iusto eum sed fugit officia mollitia debitis repudiandae distinctio ullam, quibusdam nihil, quae ducimus non officiis doloremque expedita corporis numquam amet! Quibusdam doloremque ea ipsum reprehenderit! Dolores nostrum odit, eligendi quam tempora perspiciatis laudantium ipsa eos voluptas quas deserunt nobis facilis sit delectus est numquam temporibus placeat hic explicabo ipsam aspernatur excepturi omnis. Ipsa, repellendus nesciunt sed nobis sit esse cum iste dolore delectus. Voluptas voluptatum quis ullam, deleniti itaque provident quisquam impedit ducimus. Repudiandae, nam architecto! Corrupti libero eius ipsam obcaecati accusamus, accusantium in ratione recusandae incidunt impedit minus ducimus temporibus hic quisquam blanditiis doloremque quidem ullam nobis, quod officiis soluta aliquam saepe necessitatibus. </p><p>Perferendis a veniam enim. Possimus, laboriosam quae delectus mollitia porro similique a magni odit optio doloribus facilis libero cumque harum quia nobis illum sapiente vitae, reiciendis modi sed autem inventore incidunt provident. Dolorem earum repellat distinctio placeat? Dolore libero suscipit repellat perferendis nemo doloremque temporibus harum exercitationem non velit modi excepturi natus obcaecati accusantium laborum hic consequatur, vero debitis ipsa voluptatem? Distinctio, nobis quam. At incidunt dolor molestiae vel velit facilis, debitis optio nihil suscipit consequuntur placeat, temporibus eveniet ab doloribus eius expedita alias accusamus impedit quis consequatur nobis? Distinctio reprehenderit assumenda accusamus, possimus quidem doloribus error iusto harum eum quas, mollitia voluptatum, ut cum culpa alias odit perferendis pariatur. Beatae, commodi. Illum molestiae molestias fugit nobis a distinctio necessitatibus! Accusantium quibusdam cupiditate cum corrupti nam aliquid, saepe quasi architecto debitis laboriosam excepturi porro officiis! Accusamus sapiente ut quibusdam repudiandae esse ad, harum blanditiis dolor recusandae nulla ab consequuntur quas autem inventore hic expedita cumque! Ipsam accusantium incidunt et harum modi quidem fugiat alias, vitae, numquam sed, facere neque molestias reprehenderit libero omnis aperiam quod. Unde quis quae dolor, placeat eum amet id rem quia, iure quasi accusantium labore.</p>',
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);


        // Post::create([
        //     'title'=>'Judul Post 2',
        //     'slug'=> 'judul-post-2',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam est et ad consequatur itaque tempora mollitia minima? Ab sapiente facilis modi, necessitatibus minus quaerat cum, ipsam maxime eius repellat minima deleniti delectus cupiditate fugiat. Rerum aliquid ea fuga cum facere eos',
        //     'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam est et ad consequatur itaque tempora mollitia minima? Ab sapiente facilis modi, necessitatibus minus quaerat cum, ipsam maxime eius repellat minima deleniti delectus cupiditate fugiat. Rerum aliquid ea fuga cum facere eos. Adipisci quia similique necessitatibus. </p><p>Ex iure eum ipsum corporis quam quia deserunt harum ut dolore soluta culpa dolores tempore consequatur autem odit, consequuntur modi sapiente aliquid reiciendis quae fuga quod! Et cumque odio enim totam, optio doloremque placeat suscipit numquam velit, minima vitae, non accusamus fugiat unde saepe quia nulla? Odit quidem facere alias cum dolores! Tempore obcaecati modi, incidunt corrupti blanditiis quod dolorem, nesciunt autem ipsam accusantium sapiente aperiam voluptatum voluptatibus et id maxime! Ut magnam dolores quaerat fuga earum debitis laboriosam tempore quasi laborum recusandae tenetur est facere neque voluptatum et, asperiores veritatis incidunt eos nemo officia quos quod. </p><p>Exercitationem porro ducimus expedita esse cum recusandae delectus in cumque? Nobis autem perferendis suscipit necessitatibus dolore aliquam alias beatae unde nostrum, minima cumque eos quos nihil quod amet quasi provident. Adipisci ex est, officia, autem minus fugiat delectus odit a nesciunt enim ratione similique voluptate veniam voluptas repudiandae nostrum explicabo! Ullam incidunt totam dignissimos maxime voluptatibus accusamus magni? In praesentium exercitationem molestiae voluptas fugiat iusto eum sed fugit officia mollitia debitis repudiandae distinctio ullam, quibusdam nihil, quae ducimus non officiis doloremque expedita corporis numquam amet! Quibusdam doloremque ea ipsum reprehenderit! Dolores nostrum odit, eligendi quam tempora perspiciatis laudantium ipsa eos voluptas quas deserunt nobis facilis sit delectus est numquam temporibus placeat hic explicabo ipsam aspernatur excepturi omnis. Ipsa, repellendus nesciunt sed nobis sit esse cum iste dolore delectus. Voluptas voluptatum quis ullam, deleniti itaque provident quisquam impedit ducimus. Repudiandae, nam architecto! Corrupti libero eius ipsam obcaecati accusamus, accusantium in ratione recusandae incidunt impedit minus ducimus temporibus hic quisquam blanditiis doloremque quidem ullam nobis, quod officiis soluta aliquam saepe necessitatibus. </p><p>Perferendis a veniam enim. Possimus, laboriosam quae delectus mollitia porro similique a magni odit optio doloribus facilis libero cumque harum quia nobis illum sapiente vitae, reiciendis modi sed autem inventore incidunt provident. Dolorem earum repellat distinctio placeat? Dolore libero suscipit repellat perferendis nemo doloremque temporibus harum exercitationem non velit modi excepturi natus obcaecati accusantium laborum hic consequatur, vero debitis ipsa voluptatem? Distinctio, nobis quam. At incidunt dolor molestiae vel velit facilis, debitis optio nihil suscipit consequuntur placeat, temporibus eveniet ab doloribus eius expedita alias accusamus impedit quis consequatur nobis? Distinctio reprehenderit assumenda accusamus, possimus quidem doloribus error iusto harum eum quas, mollitia voluptatum, ut cum culpa alias odit perferendis pariatur. Beatae, commodi. Illum molestiae molestias fugit nobis a distinctio necessitatibus! Accusantium quibusdam cupiditate cum corrupti nam aliquid, saepe quasi architecto debitis laboriosam excepturi porro officiis! Accusamus sapiente ut quibusdam repudiandae esse ad, harum blanditiis dolor recusandae nulla ab consequuntur quas autem inventore hic expedita cumque! Ipsam accusantium incidunt et harum modi quidem fugiat alias, vitae, numquam sed, facere neque molestias reprehenderit libero omnis aperiam quod. Unde quis quae dolor, placeat eum amet id rem quia, iure quasi accusantium labore.</p>',
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title'=>'Judul Post 3',
        //     'slug'=> 'judul-post-3',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam est et ad consequatur itaque tempora mollitia minima? Ab sapiente facilis modi, necessitatibus minus quaerat cum, ipsam maxime eius repellat minima deleniti delectus cupiditate fugiat. Rerum aliquid ea fuga cum facere eos',
        //     'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam est et ad consequatur itaque tempora mollitia minima? Ab sapiente facilis modi, necessitatibus minus quaerat cum, ipsam maxime eius repellat minima deleniti delectus cupiditate fugiat. Rerum aliquid ea fuga cum facere eos. Adipisci quia similique necessitatibus. </p><p>Ex iure eum ipsum corporis quam quia deserunt harum ut dolore soluta culpa dolores tempore consequatur autem odit, consequuntur modi sapiente aliquid reiciendis quae fuga quod! Et cumque odio enim totam, optio doloremque placeat suscipit numquam velit, minima vitae, non accusamus fugiat unde saepe quia nulla? Odit quidem facere alias cum dolores! Tempore obcaecati modi, incidunt corrupti blanditiis quod dolorem, nesciunt autem ipsam accusantium sapiente aperiam voluptatum voluptatibus et id maxime! Ut magnam dolores quaerat fuga earum debitis laboriosam tempore quasi laborum recusandae tenetur est facere neque voluptatum et, asperiores veritatis incidunt eos nemo officia quos quod. </p><p>Exercitationem porro ducimus expedita esse cum recusandae delectus in cumque? Nobis autem perferendis suscipit necessitatibus dolore aliquam alias beatae unde nostrum, minima cumque eos quos nihil quod amet quasi provident. Adipisci ex est, officia, autem minus fugiat delectus odit a nesciunt enim ratione similique voluptate veniam voluptas repudiandae nostrum explicabo! Ullam incidunt totam dignissimos maxime voluptatibus accusamus magni? In praesentium exercitationem molestiae voluptas fugiat iusto eum sed fugit officia mollitia debitis repudiandae distinctio ullam, quibusdam nihil, quae ducimus non officiis doloremque expedita corporis numquam amet! Quibusdam doloremque ea ipsum reprehenderit! Dolores nostrum odit, eligendi quam tempora perspiciatis laudantium ipsa eos voluptas quas deserunt nobis facilis sit delectus est numquam temporibus placeat hic explicabo ipsam aspernatur excepturi omnis. Ipsa, repellendus nesciunt sed nobis sit esse cum iste dolore delectus. Voluptas voluptatum quis ullam, deleniti itaque provident quisquam impedit ducimus. Repudiandae, nam architecto! Corrupti libero eius ipsam obcaecati accusamus, accusantium in ratione recusandae incidunt impedit minus ducimus temporibus hic quisquam blanditiis doloremque quidem ullam nobis, quod officiis soluta aliquam saepe necessitatibus. </p><p>Perferendis a veniam enim. Possimus, laboriosam quae delectus mollitia porro similique a magni odit optio doloribus facilis libero cumque harum quia nobis illum sapiente vitae, reiciendis modi sed autem inventore incidunt provident. Dolorem earum repellat distinctio placeat? Dolore libero suscipit repellat perferendis nemo doloremque temporibus harum exercitationem non velit modi excepturi natus obcaecati accusantium laborum hic consequatur, vero debitis ipsa voluptatem? Distinctio, nobis quam. At incidunt dolor molestiae vel velit facilis, debitis optio nihil suscipit consequuntur placeat, temporibus eveniet ab doloribus eius expedita alias accusamus impedit quis consequatur nobis? Distinctio reprehenderit assumenda accusamus, possimus quidem doloribus error iusto harum eum quas, mollitia voluptatum, ut cum culpa alias odit perferendis pariatur. Beatae, commodi. Illum molestiae molestias fugit nobis a distinctio necessitatibus! Accusantium quibusdam cupiditate cum corrupti nam aliquid, saepe quasi architecto debitis laboriosam excepturi porro officiis! Accusamus sapiente ut quibusdam repudiandae esse ad, harum blanditiis dolor recusandae nulla ab consequuntur quas autem inventore hic expedita cumque! Ipsam accusantium incidunt et harum modi quidem fugiat alias, vitae, numquam sed, facere neque molestias reprehenderit libero omnis aperiam quod. Unde quis quae dolor, placeat eum amet id rem quia, iure quasi accusantium labore.</p>',
        //     'category_id' => 2,
        //     'user_id'=> 2
        // ]);


        // Post::create([
        //     'title'=>'Judul Post 4',
        //     'slug'=> 'judul-post-4',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam est et ad consequatur itaque tempora mollitia minima? Ab sapiente facilis modi, necessitatibus minus quaerat cum, ipsam maxime eius repellat minima deleniti delectus cupiditate fugiat. Rerum aliquid ea fuga cum facere eos',
        //     'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam est et ad consequatur itaque tempora mollitia minima? Ab sapiente facilis modi, necessitatibus minus quaerat cum, ipsam maxime eius repellat minima deleniti delectus cupiditate fugiat. Rerum aliquid ea fuga cum facere eos. Adipisci quia similique necessitatibus. </p><p>Ex iure eum ipsum corporis quam quia deserunt harum ut dolore soluta culpa dolores tempore consequatur autem odit, consequuntur modi sapiente aliquid reiciendis quae fuga quod! Et cumque odio enim totam, optio doloremque placeat suscipit numquam velit, minima vitae, non accusamus fugiat unde saepe quia nulla? Odit quidem facere alias cum dolores! Tempore obcaecati modi, incidunt corrupti blanditiis quod dolorem, nesciunt autem ipsam accusantium sapiente aperiam voluptatum voluptatibus et id maxime! Ut magnam dolores quaerat fuga earum debitis laboriosam tempore quasi laborum recusandae tenetur est facere neque voluptatum et, asperiores veritatis incidunt eos nemo officia quos quod. </p><p>Exercitationem porro ducimus expedita esse cum recusandae delectus in cumque? Nobis autem perferendis suscipit necessitatibus dolore aliquam alias beatae unde nostrum, minima cumque eos quos nihil quod amet quasi provident. Adipisci ex est, officia, autem minus fugiat delectus odit a nesciunt enim ratione similique voluptate veniam voluptas repudiandae nostrum explicabo! Ullam incidunt totam dignissimos maxime voluptatibus accusamus magni? In praesentium exercitationem molestiae voluptas fugiat iusto eum sed fugit officia mollitia debitis repudiandae distinctio ullam, quibusdam nihil, quae ducimus non officiis doloremque expedita corporis numquam amet! Quibusdam doloremque ea ipsum reprehenderit! Dolores nostrum odit, eligendi quam tempora perspiciatis laudantium ipsa eos voluptas quas deserunt nobis facilis sit delectus est numquam temporibus placeat hic explicabo ipsam aspernatur excepturi omnis. Ipsa, repellendus nesciunt sed nobis sit esse cum iste dolore delectus. Voluptas voluptatum quis ullam, deleniti itaque provident quisquam impedit ducimus. Repudiandae, nam architecto! Corrupti libero eius ipsam obcaecati accusamus, accusantium in ratione recusandae incidunt impedit minus ducimus temporibus hic quisquam blanditiis doloremque quidem ullam nobis, quod officiis soluta aliquam saepe necessitatibus. </p><p>Perferendis a veniam enim. Possimus, laboriosam quae delectus mollitia porro similique a magni odit optio doloribus facilis libero cumque harum quia nobis illum sapiente vitae, reiciendis modi sed autem inventore incidunt provident. Dolorem earum repellat distinctio placeat? Dolore libero suscipit repellat perferendis nemo doloremque temporibus harum exercitationem non velit modi excepturi natus obcaecati accusantium laborum hic consequatur, vero debitis ipsa voluptatem? Distinctio, nobis quam. At incidunt dolor molestiae vel velit facilis, debitis optio nihil suscipit consequuntur placeat, temporibus eveniet ab doloribus eius expedita alias accusamus impedit quis consequatur nobis? Distinctio reprehenderit assumenda accusamus, possimus quidem doloribus error iusto harum eum quas, mollitia voluptatum, ut cum culpa alias odit perferendis pariatur. Beatae, commodi. Illum molestiae molestias fugit nobis a distinctio necessitatibus! Accusantium quibusdam cupiditate cum corrupti nam aliquid, saepe quasi architecto debitis laboriosam excepturi porro officiis! Accusamus sapiente ut quibusdam repudiandae esse ad, harum blanditiis dolor recusandae nulla ab consequuntur quas autem inventore hic expedita cumque! Ipsam accusantium incidunt et harum modi quidem fugiat alias, vitae, numquam sed, facere neque molestias reprehenderit libero omnis aperiam quod. Unde quis quae dolor, placeat eum amet id rem quia, iure quasi accusantium labore.</p>',
        //     'category_id' => 1,
        //     'user_id'=> 2
        // ]);
    }
}