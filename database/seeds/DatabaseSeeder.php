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
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'admin_event',
                'email' => 'event@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'admin_article',
                'email' => 'article@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
            ],
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
            ['role_id' => 3,'user_id' => 3],
            ['role_id' => 4,'user_id' => 4],
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

    }
}
