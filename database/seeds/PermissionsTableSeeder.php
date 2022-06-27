<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // Permission::truncate();

        $permissions = [
            /*Roles Permission*/
            array('id' => 1, 'name' => 'dashboard-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 1),
            array('id' => 2, 'name' => 'dashboard-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 1),
            array('id' => 3, 'name' => 'dashboard-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 1),
            array('id' => 4, 'name' => 'dashboard-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 1),
            array('id' => 5, 'name' => 'dashboard-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 1),

            array('id' => 6, 'name' => 'websettings-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 3),
            array('id' => 7, 'name' => 'websettings-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 3),
            array('id' => 8, 'name' => 'websettings-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 3),
            array('id' => 9, 'name' => 'websettings-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 3),
            array('id' => 10, 'name' => 'websettings-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 3),

            array('id' => 11, 'name' => 'menusetting-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 4),
            array('id' => 12, 'name' => 'menusetting-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 4),
            array('id' => 13, 'name' => 'menusetting-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 4),
            array('id' => 14, 'name' => 'menusetting-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 4),
            array('id' => 15, 'name' => 'menusetting-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 4),

            array('id' => 16, 'name' => 'rolesetting-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 5),
            array('id' => 17, 'name' => 'rolesetting-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 5),
            array('id' => 18, 'name' => 'rolesetting-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 5),
            array('id' => 19, 'name' => 'rolesetting-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 5),
            array('id' => 20, 'name' => 'rolesetting-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 5),

            array('id' => 21, 'name' => 'usersetting-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 7),
            array('id' => 22, 'name' => 'usersetting-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 7),
            array('id' => 23, 'name' => 'usersetting-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 7),
            array('id' => 24, 'name' => 'usersetting-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 7),
            array('id' => 25, 'name' => 'usersetting-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 7),

            array('id' => 26, 'name' => 'routesetting-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 6),
            array('id' => 27, 'name' => 'routesetting-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 6),
            array('id' => 28, 'name' => 'routesetting-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 6),
            array('id' => 29, 'name' => 'routesetting-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 6),
            array('id' => 30, 'name' => 'routesetting-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 6),

            array('id' => 31, 'name' => 'permission-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 8),
            array('id' => 32, 'name' => 'permission-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 8),
            array('id' => 33, 'name' => 'permission-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 8),
            array('id' => 34, 'name' => 'permission-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 8),
            array('id' => 35, 'name' => 'permission-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 8),

            array('id' => 36, 'name' => 'masterdata-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 2),
            array('id' => 37, 'name' => 'masterdata-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 2),
            array('id' => 38, 'name' => 'masterdata-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 2),
            array('id' => 39, 'name' => 'masterdata-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 2),
            array('id' => 40, 'name' => 'masterdata-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 2),

            array('id' => 41, 'name' => 'company-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 9),
            array('id' => 42, 'name' => 'company-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 9),
            array('id' => 43, 'name' => 'company-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 9),
            array('id' => 44, 'name' => 'company-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 9),
            array('id' => 45, 'name' => 'company-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 9),

            array('id' => 46, 'name' => 'costcenter-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 10),
            array('id' => 47, 'name' => 'costcenter-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 10),
            array('id' => 48, 'name' => 'costcenter-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 10),
            array('id' => 49, 'name' => 'costcenter-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 10),
            array('id' => 50, 'name' => 'costcenter-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 10),

            array('id' => 51, 'name' => 'glaccount-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 11),
            array('id' => 52, 'name' => 'glaccount-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 11),
            array('id' => 53, 'name' => 'glaccount-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 11),
            array('id' => 54, 'name' => 'glaccount-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 11),
            array('id' => 55, 'name' => 'glaccount-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 11),

            array('id' => 56, 'name' => 'plant-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 12),
            array('id' => 57, 'name' => 'plant-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 12),
            array('id' => 58, 'name' => 'plant-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 12),
            array('id' => 59, 'name' => 'plant-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 12),
            array('id' => 60, 'name' => 'plant-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 12),

            array('id' => 61, 'name' => 'functional-location-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 13),
            array('id' => 62, 'name' => 'functional-location-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 13),
            array('id' => 63, 'name' => 'functional-location-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 13),
            array('id' => 64, 'name' => 'functional-location-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 13),
            array('id' => 65, 'name' => 'functional-location-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 13),

            array('id' => 66, 'name' => 'roleCapex-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 14),
            array('id' => 67, 'name' => 'roleCapex-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 14),
            array('id' => 68, 'name' => 'roleCapex-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 14),
            array('id' => 69, 'name' => 'roleCapex-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 14),
            array('id' => 70, 'name' => 'roleCapex-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 14),

            array('id' => 71, 'name' => 'investType-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 15),
            array('id' => 72, 'name' => 'investType-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 15),
            array('id' => 73, 'name' => 'investType-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 15),
            array('id' => 74, 'name' => 'investType-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 15),
            array('id' => 75, 'name' => 'investType-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 15),

            array('id' => 76, 'name' => 'projectprofile-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 16),
            array('id' => 77, 'name' => 'projectprofile-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 16),
            array('id' => 78, 'name' => 'projectprofile-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 16),
            array('id' => 79, 'name' => 'projectprofile-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 16),
            array('id' => 80, 'name' => 'projectprofile-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 16),

            array('id' => 81, 'name' => 'capexconfig-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 17),
            array('id' => 82, 'name' => 'capexconfig-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 17),
            array('id' => 83, 'name' => 'capexconfig-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 17),
            array('id' => 84, 'name' => 'capexconfig-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 17),
            array('id' => 85, 'name' => 'capexconfig-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 17),

            array('id' => 86, 'name' => 'koorbudget-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 18),
            array('id' => 87, 'name' => 'koorbudget-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 18),
            array('id' => 88, 'name' => 'koorbudget-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 18),
            array('id' => 89, 'name' => 'koorbudget-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 18),
            array('id' => 90, 'name' => 'koorbudget-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 18),

            array('id' => 91, 'name' => 'capex-C', 'guard_name' => 'web', 'action_id' => 'C', 'menu_id' => 19),
            array('id' => 92, 'name' => 'capex-R', 'guard_name' => 'web', 'action_id' => 'R', 'menu_id' => 19),
            array('id' => 93, 'name' => 'capex-U', 'guard_name' => 'web', 'action_id' => 'U', 'menu_id' => 19),
            array('id' => 94, 'name' => 'capex-D', 'guard_name' => 'web', 'action_id' => 'D', 'menu_id' => 19),
            array('id' => 95, 'name' => 'capex-A', 'guard_name' => 'web', 'action_id' => 'A', 'menu_id' => 19),
        ];

        foreach ($permissions as $k_data => $v_data){
            $check = Permission::where($v_data)->first();
            if(!$check)
            Permission::create($v_data);

        }

        $this->command->info("Permission Seeder Success");
    }
}
