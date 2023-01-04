<?php

namespace Database\Seeders;

use App\Models\UserModel;
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
        UserModel::insertOrIgnore([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => hash('md5', '123456789'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
