<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            ['username' => 'admin', 'email' => 'admin@company.com', 'password' => Hash::make('admin'), 'status' => '1', 'company' => 'A000', 'mk_nopeg' => '0000', 'mk_nama' => 'Admin', 'company_default' => 'A000', 'costcenter' => '1', 'costcenter2' => '1', 'costcenter_default' => '1', 'created_by' => 'admin', 'updated_by' => 'admin', 'online' => '', 'visit' => '', 'photo' => 'default.jpg', 'reset' => ''],
            ['username' => 'admin2', 'email' => 'admin2@company.com', 'password' => Hash::make('admin2'), 'status' => '1', 'company' => 'B000', 'mk_nopeg' => '0000', 'mk_nama' => 'Admin', 'company_default' => 'B000', 'costcenter' => '1', 'costcenter2' => '1', 'costcenter_default' => '1', 'created_by' => 'admin', 'updated_by' => 'admin', 'online' => '', 'visit' => '', 'photo' => 'default.jpg', 'reset' => ''],
            ['username' => 'developer', 'email' => 'developer@company.com', 'password' => Hash::make('developer'), 'status' => '1', 'company' => 'B000', 'mk_nopeg' => '0000', 'mk_nama' => 'Developer', 'company_default' => 'B000', 'costcenter' => '1', 'costcenter2' => '1', 'costcenter_default' => '1', 'created_by' => 'admin', 'updated_by' => 'admin', 'online' => '', 'visit' => '0', 'photo' => 'default.jpg', 'reset' => ''],
            ['username' => 'view', 'email' => 'view@company.com', 'password' => Hash::make('view'), 'status' => '1', 'company' => 'BA00', 'mk_nopeg' => '0000', 'mk_nama' => 'View', 'company_default' => 'BA00', 'costcenter' => '1', 'costcenter2' => '1', 'costcenter_default' => '1', 'created_by' => 'admin', 'updated_by' => 'admin', 'online' => '', 'visit' => '', 'photo' => 'default.jpg', 'reset' => ''],
        ];

        User::insert($users);
        $this->command->info('User Seeders SuccessFullt');

    }
}
