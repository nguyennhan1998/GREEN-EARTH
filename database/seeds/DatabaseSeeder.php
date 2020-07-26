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
            ['name'=>'user'],
            ['name'=>'admin_event'],
            ['name'=>'admin_article'],
        ]);
        DB::table('role_user')->insert([
            ['role_id' => 1,'user_id' => 1],
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
            ['permission_id'=> 1, 'role_id'=> 3],
            ['permission_id'=> 2, 'role_id'=> 3],
            ['permission_id'=> 3, 'role_id'=> 3],
            ['permission_id'=> 4, 'role_id'=> 3],
            ['permission_id'=> 5, 'role_id'=> 3],
            ['permission_id'=> 6, 'role_id'=> 3],
            ['permission_id'=> 7,'role_id'=> 4],
            ['permission_id'=> 8,'role_id'=> 4],
            ['permission_id'=> 9,'role_id'=> 4],
            ['permission_id'=> 10,'role_id'=> 4],
            ['permission_id'=> 11,'role_id'=> 4],
            ['permission_id'=> 12,'role_id'=> 4],
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
                'name'=>'nhan nguyen',
                'email'=>'nguyennhanlovermyself@gmail.com',
                'phone'=>'0393910646',
                'address'=>'Ha Noi',
                'client_id'=>'12355',
                'secret'=>'1',
                'team_size'=>'12',

            ]
        ]);
        DB::table('events')->insert([
//            [
//                'title'=>'',
//                'image'=>'',
//                'description'=>'',
//                'content'=>'',
//                'start_at'=>'',
//                'end_at'=>'',
//                'total_money'=>'',
//                'organization_id'=>'',
//                'user_id'
//            ]
            [
                'title'=>'sự kiện bảo về môi trường biển',
                'image'=>'https://www.crushpixel.com/static13/preview2/green-earth-concept-with-leavesecology-1185970.jpg',
                'description'=>'đây là sự kiện gây quỹ có quy mô lớn với sự tài trợ ',
                'content'=>'sự kiện được diễn ra tại trung tâm hội nghị quốc gia',
                'start_at'=>'2020-07-24 10:20:44',
                'end_at'=>'2020-07-24 10:20:44',
                'target_money'=>'200000',
                'organization_id'=>'1',
                'user_id'=>'1'
            ],
            [
                'title'=>'sự kiện bảo về môi trường biển',
                'image'=>'https://www.crushpixel.com/static13/preview2/green-earth-concept-with-leavesecology-1185970.jpg',
                'description'=>'đây là sự kiện gây quỹ có quy mô lớn với sự tài trợ ',
                'content'=>'sự kiện được diễn ra tại trung tâm hội nghị quốc gia',
                'start_at'=>'2020-07-24 10:20:44',
                'end_at'=>'2020-07-24 10:20:44',
                'target_money'=>'200000',
                'organization_id'=>'1',
                'user_id'=>'1'
            ],
            [
                'title'=>'sự kiện bảo về môi trường biển',
                'image'=>'https://www.crushpixel.com/static13/preview2/green-earth-concept-with-leavesecology-1185970.jpg',
                'description'=>'đây là sự kiện gây quỹ có quy mô lớn với sự tài trợ ',
                'content'=>'sự kiện được diễn ra tại trung tâm hội nghị quốc gia',
                'start_at'=>'2020-07-24 10:20:44',
                'end_at'=>'2020-07-24 10:20:44',
                'target_money'=>'200000',
                'organization_id'=>'1',
                'user_id'=>'1'
            ],
            [
                'title'=>'sự kiện bảo về môi trường biển',
                'image'=>'https://www.crushpixel.com/static13/preview2/green-earth-concept-with-leavesecology-1185970.jpg',
                'description'=>'đây là sự kiện gây quỹ có quy mô lớn với sự tài trợ ',
                'content'=>'sự kiện được diễn ra tại trung tâm hội nghị quốc gia',
                'start_at'=>'2020-07-24 10:20:44',
                'end_at'=>'2020-07-24 10:20:44',
                'target_money'=>'200000',
                'organization_id'=>'1',
                'user_id'=>'1'
            ],
            [
                'title'=>'sự kiện bảo về môi trường biển',
                'image'=>'https://www.crushpixel.com/static13/preview2/green-earth-concept-with-leavesecology-1185970.jpg',
                'description'=>'đây là sự kiện gây quỹ có quy mô lớn với sự tài trợ ',
                'content'=>'sự kiện được diễn ra tại trung tâm hội nghị quốc gia',
                'start_at'=>'2020-07-24 10:20:44',
                'end_at'=>'2020-07-24 10:20:44',
                'target_money'=>'200000',
                'organization_id'=>'1',
                'user_id'=>'1'
            ],



        ]);
        DB::table('products')->insert([
            ['name'=>'vanh ngao',
                'image1'=>'https://www.crushpixel.com/static13/preview2/green-earth-concept-with-leavesecology-1185970.jpg',
                'image2'=>'https://www.crushpixel.com/static13/preview2/green-earth-concept-with-leavesecology-1185970.jpg',
                'image3'=>'https://www.crushpixel.com/static13/preview2/green-earth-concept-with-leavesecology-1185970.jpg',
                'image4'=>'https://www.crushpixel.com/static13/preview2/green-earth-concept-with-leavesecology-1185970.jpg',
                'qty'=>10,
                'price'=>20000,
                'event_id'=>1,
                ],
                ['name'=>'linh ngao',
                    'image1'=>'https://arbordayblog.org/wp-content/uploads/2018/06/oak-tree-sunset-iStock-477164218-1080x608.jpg',
                    'image2'=>'https://arbordayblog.org/wp-content/uploads/2018/06/oak-tree-sunset-iStock-477164218-1080x608.jpg',
                    'image3'=>'https://arbordayblog.org/wp-content/uploads/2018/06/oak-tree-sunset-iStock-477164218-1080x608.jpg',
                    'image4'=>'https://arbordayblog.org/wp-content/uploads/2018/06/oak-tree-sunset-iStock-477164218-1080x608.jpg',
                    'qty'=>10,
                    'price'=>20000,
                    'event_id'=>1,
                ],
                ]);
        DB::table('categories')->insert([
            ['title'=>'nguyennhan',
            'url'=>'nguyennhanlovemyself@gmail.com',
            ],
            ['title'=>'sbd',
                'url'=>'nguyennhanfsadfaovemyself@gmail.com',
            ]
                ]
        );
        DB::table('articles')->insert([
            ['title'=>'nhannguyen',
                'description'=>'Bảo vệ môi trường là điều rất quan trọng trong cuộc sống. Chúng ta biết ',
                'category_id'=>1,
                'user_id'=>1],
            ['title'=>'vanhnguyen',
                'description'=>'Bảo vệ môi trường là những hoạt động giữ cho môi trường trong lành, sạch đẹp,  ',
                'category_id'=>1,
                'user_id'=>1],
            ['title'=>'mailinhnguyen',
                'description'=>'Cây xanh hấp thụ khí carbon dioxide, ọi sinh vật sống. ',
                'category_id'=>1,

                'user_id'=>1]
                ]
     );
    }
}
