<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        * In a real production system, I imagine you'd either seed
        * reasonable credentials for a trusted user, or you'd have
        * no seeder and have someone with database access insert
        * the first user manually.
        * It's not necessary for the admin user to be an author,
        * but why waste seeded data?
        * Explicitly stated ID of 1 should fail if there's any data in
        * the table. Only run these seeders on a fresh database.
        */
        DB::table('users')->insert(
            [
                'id'       => 1,
                'name'     => 'Admin Admin',
                'email'    => 'admin@example.com',
                'password' => bcrypt('password'),
                'isAdmin'  => true,
                'isAuthor' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => 2,
                'name' => 'Arthur Author',
                'email' => 'author@example.com',
                'password' => bcrypt('password'),
                'isAuthor' => true,
            ]
        );
    }
}
