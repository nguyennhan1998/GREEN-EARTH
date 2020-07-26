<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
            ],
//            [
//                'name' => 'user',
//                'email' => 'user@gmail.com',
//                'password' => bcrypt('123456'),
//                'created_at' => now(),
//                'updated_at' => now(),
//                'email_verified_at' => now(),
//            ],
//            [
//                'name' => 'admin_event',
//                'email' => 'event@gmail.com',
//                'password' => bcrypt('123456'),
//                'created_at' => now(),
//                'updated_at' => now(),
//                'email_verified_at' => now(),
//            ],
//            [
//                'name' => 'admin_article',
//                'email' => 'article@gmail.com',
//                'password' => bcrypt('123456'),
//                'created_at' => now(),
//                'updated_at' => now(),
//                'email_verified_at' => now(),
//            ],
        ]);

        DB::table('permissions')->insert([
            ['name' => 'new_event'],
            ['name' => 'list_event'],
            ['name' => 'edit_event'],
            ['name' => 'update_event'],
            ['name' => 'save_event'],
            ['name' => 'delete_event'],
            ['name' => 'new_article'],
            ['name' => 'list_article'],
            ['name' => 'edit_article'],
            ['name' => 'update_article'],
            ['name' => 'save_article'],
            ['name' => 'delete_article'],
            ['name' => 'new_user'],
            ['name' => 'list_user'],
            ['name' => 'edit_user'],
            ['name' => 'update_user'],
            ['name' => 'save_user'],
            ['name' => 'delete_user'],


        ]);

        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'user'],
            ['name' => 'admin_event'],
            ['name' => 'admin_article'],
        ]);
        DB::table('role_user')->insert([
            ['role_id' => 1, 'user_id' => 1],
//            ['role_id' =>2,'user_id'=>2],
//            ['role_id' => 3,'user_id' => 3],
//            ['role_id' => 4,'user_id' => 4],
        ]);
        DB::table('permission_role')->insert([
            ['permission_id' => 1, 'role_id' => 1],
            ['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],
            ['permission_id' => 4, 'role_id' => 1],
            ['permission_id' => 5, 'role_id' => 1],
            ['permission_id' => 6, 'role_id' => 1],
            ['permission_id' => 7, 'role_id' => 1],
            ['permission_id' => 8, 'role_id' => 1],
            ['permission_id' => 9, 'role_id' => 1],
            ['permission_id' => 10, 'role_id' => 1],
            ['permission_id' => 11, 'role_id' => 1],
            ['permission_id' => 12, 'role_id' => 1],
            ['permission_id' => 13, 'role_id' => 1],
            ['permission_id' => 14, 'role_id' => 1],
            ['permission_id' => 15, 'role_id' => 1],
            ['permission_id' => 16, 'role_id' => 1],
            ['permission_id' => 17, 'role_id' => 1],
            ['permission_id' => 18, 'role_id' => 1],
            ['permission_id' => 1, 'role_id' => 3],
            ['permission_id' => 2, 'role_id' => 3],
            ['permission_id' => 3, 'role_id' => 3],
            ['permission_id' => 4, 'role_id' => 3],
            ['permission_id' => 5, 'role_id' => 3],
            ['permission_id' => 6, 'role_id' => 3],
            ['permission_id' => 7, 'role_id' => 4],
            ['permission_id' => 8, 'role_id' => 4],
            ['permission_id' => 9, 'role_id' => 4],
            ['permission_id' => 10, 'role_id' => 4],
            ['permission_id' => 11, 'role_id' => 4],
            ['permission_id' => 12, 'role_id' => 4],
        ]);
        DB::table('organizations')->insert([
//            [
//                'name'=>'',
//                 'email'=>'',
//                 'phone'=>'',
//                 'address'=>'',
//                 'client_id'=>'',
//                 'secret'=>'',
//                 'team_size'=>'',
//
//            ]
            [
                'name' => 'nhan nguyen',
                'email' => 'nguyennhanlovermyself@gmail.com',
                'phone' => '0393910646',
                'address' => 'Ha Noi',
                'client_id' => '12355',
                'secret' => '1',
                'team_size' => '12',

            ]
        ]);
        DB::table('events')->insert([
            [
                'title' => 'Praesent mattis sapien nec lorem dictu eget massa sit amet',
                'image' => 'https://upanh.vn/images/2020/07/26/event-grid-img1502f6585521b20b6.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a nunc dui. Curabitur dignissim luc tus nisi id euismod.',
                'start_at' => '2020-07-26 06:00:35',
                'end_at' => '2020-07-30 23:00:00',
                'target_money' => '20000',
                'organization_id' => '1',
                'user_id' => 1
            ],
            [
                'title' => 'Praesent mattis sapien nec lorem dictu eget massa sit amet',
                'image' => 'https://upanh.vn/images/2020/07/26/blog-medium-img88990ca9496e20a1e.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a nunc dui. Curabitur dignissim luc tus nisi id euismod.',
                'start_at' => '2020-07-26 06:00:35',
                'end_at' => '2020-08-30 23:00:00',
                'target_money' => '30000',
                'organization_id' => 1,
                'user_id'=>1
            ],
            [
                'title' => 'Praesent mattis sapien nec lorem dictu eget massa sit amet',
                'image' => 'https://upanh.vn/images/2020/07/26/blog-grid-img-782bbc9a39a5ce391.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a nunc dui. Curabitur dignissim luc tus nisi id euismod.',
                'start_at' => '2020-07-26 06:00:00',
                'end_at' => '2020-09-30 23:00:00',
                'target_money' => '40000',
                'organization_id' => 1,
                'user_id'=>1
            ],
            [
                'title' => 'Praesent mattis sapien nec lorem dictu eget massa sit amet',
                'image' => 'https://upanh.vn/images/2020/07/26/cause-simple-grid2f028ae412f5f4904.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a nunc dui. Curabitur dignissim luc tus nisi id euismod.',
                'start_at' => '2020-07-26 06:00:00',
                'end_at' => '2020-10-30 23:00:00',
                'target_money' => '50000',
                'organization_id' => 1,
                'user_id'=>1
            ], [
                'title' => 'Praesent mattis sapien nec lorem dictu eget massa sit amet',
                'image' => 'https://upanh.vn/images/2020/07/26/cause-list-img298401594d8164a5e.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a nunc dui. Curabitur dignissim luc tus nisi id euismod.',
                'start_at' => '2020-07-26 06:00:00',
                'end_at' => '2020-10-30 23:00:00',
                'target_money' => '40000',
                'organization_id' => 1,
                'user_id'=>1,
            ],
            [
                'title' => 'Praesent mattis sapien nec lorem dictu eget massa sit amet',
                'image' => 'https://upanh.vn/images/2020/07/26/blog-medium-img380e560e281fd9155.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a nunc dui. Curabitur dignissim luc tus nisi id euismod.',
                'start_at' => '2020-07-26 06:00:00',
                'end_at' => '2020-10-30 23:00:00',
                'target_money' => '20000',
                'organization_id' => '1',
                'user_id'=>1
            ]


        ]);
        DB::table('products')->insert([

          ['name'=>'Black Ninja T-Shirt',
              'image1'=>'https://upanh.vn/images/2020/07/26/shop-detail-imgdb2abfd3ec374497.jpg',
              'image2'=>'https://upanh.vn/images/2020/07/26/shop-list-img2ebde0b7bda2af5ac.jpg',
              'image3'=>'https://upanh.vn/images/2020/07/26/shop-list-img1ae3c92c00ab968b9.jpg',
              'image4'=>'https://upanh.vn/images/2020/07/26/shop-list-img406fba828ddeb016c.jpg',
              'qty'=>1,
              'price'=>30,
              'event_id'=>1],
            ['name'=>'Black Ninja T-Shirt',
                'image1'=>'https://upanh.vn/images/2020/07/26/shop-grid-img22a584e81e7233ab6.jpg',
                'image2'=>'https://upanh.vn/images/2020/07/26/shop-list-img2ebde0b7bda2af5ac.jpg',
                'image3'=>'https://upanh.vn/images/2020/07/26/shop-list-img1ae3c92c00ab968b9.jpg',
                'image4'=>'https://upanh.vn/images/2020/07/26/shop-list-img406fba828ddeb016c.jpg',
                'qty'=>1,
                'price'=>25,
                'event_id'=>1],
            ['name'=>'Black Ninja T-Shirt',
                'image1'=>'https://upanh.vn/images/2020/07/26/shop-grid-img3e88214daf51d36e5.jpg',
                'image2'=>'https://upanh.vn/images/2020/07/26/shop-list-img2ebde0b7bda2af5ac.jpg',
                'image3'=>'https://upanh.vn/images/2020/07/26/shop-list-img1ae3c92c00ab968b9.jpg',
                'image4'=>'https://upanh.vn/images/2020/07/26/shop-list-img406fba828ddeb016c.jpg',
                'qty'=>1,
                'price'=>35,
                'event_id'=>1],
            ['name'=>'Black Ninja T-Shirt',
                'image1'=>'https://upanh.vn/images/2020/07/26/shop-grid-img491ce690bb4b5d702.jpg',
                'image2'=>'https://upanh.vn/images/2020/07/26/shop-list-img2ebde0b7bda2af5ac.jpg',
                'image3'=>'https://upanh.vn/images/2020/07/26/shop-list-img1ae3c92c00ab968b9.jpg',
                'image4'=>'https://upanh.vn/images/2020/07/26/shop-list-img406fba828ddeb016c.jpg',
                'qty'=>1,
                'price'=>40,
                'event_id'=>1]

        ]);
        DB::table('categories')->insert([
            ['title' => 'nguyennhan',
                'url' => 'nguyennhanlovemyself@gmail.com',
            ],
            ['title' => 'sbd',
                'url' => 'nguyennhanfsadfaovemyself@gmail.com',
            ]
        ]);
        DB::table('articles')->insert([
            ['title' => 'Phasellus vitae ligula sodales',
                'image' => 'https://upanh.vn/images/2020/07/26/related-blog-img1ac035869c953480a.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut vestibulum lacus in cursus.',
                'category_id' => 1,
                'user_id' => 1],
            ['title' => 'Eco environment green enviro',
                'image' => 'https://upanh.vn/images/2020/07/26/project-medium-img69e160ad85d2c171f.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut vestibulum lacus in cursus. ',
                'category_id' => 1,
                'user_id' => 1],
            ['title' => 'Printing and typesetting',
                'image' => 'https://upanh.vn/images/2020/07/26/project-medium-img3fb274bc9a9682f5f.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut vestibulum lacus in cursus.',
                'category_id' => 1,

                'user_id' => 1],
            ['title' => 'Phasellus vitae ligula sodales',
                'image' => 'https://upanh.vn/images/2020/07/26/blog-grid-img-425c527137de27711.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut vestibulum lacus in cursus.',
                'category_id' => 1,
                'user_id' => 1],
            ['title' => 'Printing and typesetting',
                'image' => 'https://upanh.vn/images/2020/07/26/blog-grid-img-5df3f6ab4acb3d128.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut vestibulum lacus in cursus.',
                'category_id' => 1,
                'user_id' => 1],
            ['title' => 'Printing and typesetting',
                'image' => 'https://upanh.vn/images/2020/07/26/cause-list-img393c404b16f9b0dff.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut vestibulum lacus in cursus.',
                'category_id' => 1,
                'user_id' => 1]
//            ['title'=>'',
//                'image'=>'',
//                'description'=>'',
//                'category_id'=>1,
//                'user_id'=>1],
        ]);


        DB::table('donates')->insert([
//          ['title',
//              'image'=>'',
//              'description'=>'',
//              'start_at'=>'2020-06-24 06:00:00',
//              'end_at'=>'2020-07-24 23:00:00',
//              'target_money'=>30000,
//              'organization_id'=>1],
            ['title'=>'Go Green Movement',
                'image'=>'https://upanh.vn/images/2020/07/26/project-grid-img23df1637d4852db2d.jpg',
                'description'=>'Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus',
                'start_at'=>'2020-06-24 06:00:00',
                'end_at'=>'2020-07-24 23:00:00',
                'target_money'=>30000,
                'organization_id'=>1],
            ['title'=>'Give Them Education',
                'image'=>'https://upanh.vn/images/2020/07/26/project-list-img49fc12b608f573292.jpg',
                'description'=>'Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus',
                'start_at'=>'2020-06-24 06:00:00',
                'end_at'=>'2020-07-24 23:00:00',
                'target_money'=>30000,
                'organization_id'=>1],
            ['title'=>'Help In Planting Trees',
                'image'=>'https://upanh.vn/images/2020/07/26/project-medium-img3fb274bc9a9682f5f.jpg',
                'description'=>'Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus',
                'start_at'=>'2020-06-24 06:00:00',
                'end_at'=>'2020-07-24 23:00:00',
                'target_money'=>30000,
                'organization_id'=>1],
            ['title'=>'Go Green Movement',
                'image'=>'https://upanh.vn/images/2020/07/26/related-blog-img1ac035869c953480a.jpg',
                'description'=>'Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus',
                'start_at'=>'2020-06-24 06:00:00',
                'end_at'=>'2020-07-24 23:00:00',
                'target_money'=>30000,
                'organization_id'=>1],
            ['title'=>'Go Green Movement',
                'image'=>'https://upanh.vn/images/2020/07/26/project-grid-img32f796bf39ed9d12a.jpg',
                'description'=>' Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus',
                'start_at'=>'2020-06-24 06:00:00',
                'end_at'=>'2020-07-24 23:00:00',
                'target_money'=>30000,
                'organization_id'=>1],
            ['title'=>'Go Green Movement',
                'image'=>'https://upanh.vn/images/2020/07/26/project-grid-img5c7bb667518f02cd3.jpg',
                'description'=>'Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus',
                'start_at'=>'2020-06-24 06:00:00',
                'end_at'=>'2020-07-24 23:00:00',
                'target_money'=>30000,
                'organization_id'=>1],
            ['title'=>'Go Green Movement',
                'image'=>'https://upanh.vn/images/2020/07/26/project-list-img236536bad6f43297e.jpg',
                'description'=>'Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus',
                'start_at'=>'2020-06-24 06:00:00',
                'end_at'=>'2020-07-24 23:00:00',
                'target_money'=>30000,
                'organization_id'=>1],
            ['title'=>'Go Green Movement',
                'image'=>'https://upanh.vn/images/2020/07/26/project-list-img1ed4f7389eeb96516.jpg',
                'description'=>'Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus',
                'start_at'=>'2020-06-24 06:00:00',
                'end_at'=>'2020-07-24 23:00:00',
                'target_money'=>30000,
                'organization_id'=>1],

        ]);
    }
}
