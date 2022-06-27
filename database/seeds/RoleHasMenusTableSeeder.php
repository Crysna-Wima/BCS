<?php

use Illuminate\Database\Seeder;
use App\Models\RoleHasMenu;

class RoleHasMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = [
        	['role_id'=> 2, 'menu_id'=>1],
        	['role_id'=> 2, 'menu_id'=>2],
        	['role_id'=> 2, 'menu_id'=>3],
        	['role_id'=> 2, 'menu_id'=>4],
        	['role_id'=> 2, 'menu_id'=>5],
        	['role_id'=> 2, 'menu_id'=>6],
        	['role_id'=> 2, 'menu_id'=>7],
        	['role_id'=> 2, 'menu_id'=>8],
        	['role_id'=> 2, 'menu_id'=>9],
        	['role_id'=> 2, 'menu_id'=>10],
            ['role_id'=> 2, 'menu_id'=>11],
            ['role_id'=> 2, 'menu_id'=>12],
            ['role_id'=> 2, 'menu_id'=>13],
            ['role_id'=> 2, 'menu_id'=>14],
            ['role_id'=> 2, 'menu_id'=>15],
            ['role_id'=> 2, 'menu_id'=>16],
            ['role_id'=> 2, 'menu_id'=>17],
            ['role_id'=> 2, 'menu_id'=>18],
            ['role_id'=> 2, 'menu_id'=>19],
        ];

        RoleHasMenu::insert($datas);
        $this->command->info("Role Has Menu Seeder Success !");
    }
}
