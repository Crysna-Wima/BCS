<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
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
            ['type'=> 'dashboard','id' => 1, 'icon' => 'fa fa-tachometer-alt text-success mr-5', 'name' => 'Dashboard', 'url' => 'dashboard', 'permission' => 'dashboard'],
            ['type'=> 'dashboard','id' => 2, 'icon' => 'fa fa-server text-success mr-5', 'name' => 'Master Data', 'url' => '#', 'permission' => 'masterdata'],
            ['type'=> 'dashboard','id' => 3, 'icon' => 'fa fa-cog text-danger mr-5', 'name' => 'Web Settings', 'url' => '#', 'permission' => 'websettings'],

        ];
        
        // Menu::insert($datas);        
        foreach ($datas as $k_datas => $v_datas){
            $check = Menu::where($v_datas)->first();
            if(!$check)
            Menu::create($v_datas);

        }

        $childrens = [
            //websettings
            ['type'=> 'dashboard','id' => 4, 'icon' => "fa fa-caret-square-down text-danger", 'name' => 'Menu', 'parent_id' => 3, 'url' => 'menusetting', 'permission' => 'menusetting'],
            ['type'=> 'dashboard','id' => 5, 'icon' => "fa fa-house-user text-danger", 'name' => 'Role', 'parent_id' => 3, 'url' => 'rolesetting', 'permission' => 'rolesetting'],
            ['type'=> 'dashboard','id' => 6, 'icon' => "fa fa-route text-danger", 'name' => 'Route Settings', 'parent_id' => 3, 'url' => 'routesetting', 'permission' => 'routesetting'],
            ['type'=> 'dashboard','id' => 7, 'icon' => "fa fa-users text-danger", 'name' => 'Users Management', 'parent_id' => 3, 'url' => 'usersetting', 'permission' => 'usersetting'],
            ['type'=> 'dashboard','id' => 8, 'icon' => "fa fa-user-shield text-danger", 'name' => 'Permission', 'parent_id' => 3, 'url' => 'permissionsetting', 'permission' => 'permission'],
            ['type'=> 'dashboard','id' => 9, 'icon' => "fa fa-upload text-success", 'name' => 'Company', 'parent_id' => 2, 'url' => 'company', 'permission' => 'company'],
            ['type'=> 'dashboard','id' => 10, 'icon' => "fa fa-upload text-success", 'name' => 'Costcenter Structure', 'parent_id' => 2, 'url' => 'costcenter', 'permission' => 'costcenter'],

        ];

        // Menu::insert($childrens);             
        foreach ($childrens as $k_data => $v_data){
            $check = Menu::where($v_data)->first();
            if(!$check)
            Menu::create($v_data);

        }

        $this->command->info("Success insert Menu Seeder");
    }
}
