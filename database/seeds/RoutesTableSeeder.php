<?php

use Illuminate\Database\Seeder;
use App\Models\Routes;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Routes::whereNotNull('id')->delete();
        
        $data = [
            /*Login*/
            ['permission' => '', 'middleware' => 'lang', 'type' => 'view', 'method' => 'GET', 'url' => '/', 'route' => 'LoginController@index', 'guard' => 'web'],
            ['permission' => '', 'middleware' => 'lang', 'type' => 'view', 'method' => 'GET', 'url' => '/login', 'route' => 'LoginController@index', 'guard' => 'web'],
            ['permission' => '', 'middleware' => 'lang', 'type' => 'view', 'method' => 'POST', 'url' => '/login/store', 'route' => 'LoginController@store', 'guard' => 'web'],
            ['permission' => '', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/logout', 'route' => 'LoginController@destroy', 'guard' => 'web'],
            /*Forget Password*/             
            ['permission' => '', 'middleware' => 'lang', 'type' => 'view', 'method' => 'GET', 'url' => '/forgetpassword', 'route' => 'ForgotPasswordController@index', 'guard' => 'web'],
            ['permission' => '', 'middleware' => 'lang', 'type' => 'view', 'method' => 'POST', 'url' => '/forgetpassword/store', 'route' => 'ForgotPasswordController@submitForgetPasswordForm', 'guard' => 'web'],
            /*Dashboard*/
            ['permission' => 'dashboard-R', 'middleware' => 'lang,authz', 'type' => 'view', 'method' => 'GET', 'url' => '/dashboard', 'route' => 'DashboardController@index', 'guard' => 'web'],
            // Menu Setting
            ['permission' => 'menusetting-R', 'middleware' => 'lang,authz', 'type' => 'view', 'method' => 'GET', 'url' => '/menusetting', 'route' => 'WEBSETTING\MenuController@index', 'guard' => 'web'],
            ['permission' => 'menusetting-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/menusetting/list', 'route' => 'WEBSETTING\MenuController@datatables', 'guard' => 'web'],
            ['permission' => 'menusetting-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/menusetting/{id}', 'route' => 'WEBSETTING\MenuController@show', 'guard' => 'web'],
            ['permission' => 'menusetting-C', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/menusetting', 'route' => 'WEBSETTING\MenuController@store', 'guard' => 'web'],
            ['permission' => 'menusetting-U', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/menusetting/{id}', 'route' => 'WEBSETTING\MenuController@update', 'guard' => 'web'],
            ['permission' => 'menusetting-D', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'DELETE', 'url' => '/menusetting/{id}', 'route' => 'WEBSETTING\MenuController@destroy', 'guard' => 'web'],
            // Role Setting
            ['permission' => 'rolesetting-R', 'middleware' => 'lang,authz', 'type' => 'view', 'method' => 'GET', 'url' => '/rolesetting', 'route' => 'WEBSETTING\RoleController@index', 'guard' => 'web'],
            ['permission' => 'rolesetting-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/rolesetting/list', 'route' => 'WEBSETTING\RoleController@datatables', 'guard' => 'web'],
            ['permission' => 'rolesetting-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/rolesetting/{id}', 'route' => 'WEBSETTING\RoleController@show', 'guard' => 'web'],
            ['permission' => 'rolesetting-D', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'DELETE', 'url' => '/rolesetting/{id}', 'route' => 'WEBSETTING\RoleController@destroy', 'guard' => 'web'],
            ['permission' => 'rolesetting-U', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/rolesetting/{id}', 'route' => 'WEBSETTING\RoleController@update', 'guard' => 'web'],
            ['permission' => 'rolesetting-C', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/rolesetting', 'route' => 'WEBSETTING\RoleController@store', 'guard' => 'web'],
            ['permission' => 'rolesetting-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/rolesetting/showpermission/{id}', 'route' => 'WEBSETTING\RoleController@access', 'guard' => 'web'],
            ['permission' => 'rolesetting-U', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/rolesetting/{id}/syncrnpermission', 'route' => 'WEBSETTING\RoleController@sycrnaccess', 'guard' => 'web'],
            // Route Setting
            ['permission' => 'routesetting-R', 'middleware' => 'lang,authz', 'type' => 'view', 'method' => 'GET', 'url' => '/routesetting', 'route' => 'WEBSETTING\RouteController@index', 'guard' => 'web'],
            ['permission' => 'routesetting-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/routesetting/list', 'route' => 'WEBSETTING\RouteController@datatables', 'guard' => 'web'],
            ['permission' => 'routesetting-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/routesetting/{id}', 'route' => 'WEBSETTING\RouteController@show', 'guard' => 'web'],
            ['permission' => 'routesetting-D', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'DELETE', 'url' => '/routesetting/{id}', 'route' => 'WEBSETTING\RouteController@destroy', 'guard' => 'web'],
            ['permission' => 'routesetting-U', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/routesetting/{id}', 'route' => 'WEBSETTING\RouteController@update', 'guard' => 'web'],
            ['permission' => 'routesetting-C', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/routesetting', 'route' => 'WEBSETTING\RouteController@store', 'guard' => 'web'],
            // User Setting
            ['permission' => 'usersetting-R', 'middleware' => 'lang,authz', 'type' => 'view', 'method' => 'GET', 'url' => '/usersetting', 'route' => 'WEBSETTING\UserController@index', 'guard' => 'web'],
            ['permission' => 'usersetting-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/usersetting/list', 'route' => 'WEBSETTING\UserController@datatables', 'guard' => 'web'],

            ['permission' => 'usersetting-C', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/templateuser', 'route' => 'WEBSETTING\UserController@template', 'guard' => 'web'],
            ['permission' => 'usersetting-C', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/uploaduser', 'route' => 'WEBSETTING\UserController@upload', 'guard' => 'web'],

            ['permission' => 'usersetting-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/usersetting/{uuid}', 'route' => 'WEBSETTING\UserController@show', 'guard' => 'web'],
            ['permission' => 'usersetting-D', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'DELETE', 'url' => '/usersetting/destroy/{uuid}', 'route' => 'WEBSETTING\UserController@destroy', 'guard' => 'web'],
            ['permission' => 'usersetting-C', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/usersetting', 'route' => 'WEBSETTING\UserController@store', 'guard' => 'web'],
            ['permission' => 'usersetting-U', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/usersetting/resetpassword/{uuid}', 'route' => 'WEBSETTING\UserController@resetpassword', 'guard' => 'web'],
            ['permission' => 'usersetting-U', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/usersetting/synronroles/{uuid}', 'route' => 'WEBSETTING\UserController@syncronRole', 'guard' => 'web'],
            ['permission' => 'usersetting-U', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/usersetting/{uuid}', 'route' => 'WEBSETTING\UserController@update', 'guard' => 'web'],

            // Permission Setting
            ['permission' => 'permission-R', 'middleware' => 'lang,authz', 'type' => 'view', 'method' => 'GET', 'url' => '/permissionsetting', 'route' => 'WEBSETTING\PermissionController@index', 'guard' => 'web'],
            ['permission' => 'permission-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/permissionsetting/list', 'route' => 'WEBSETTING\PermissionController@datatables', 'guard' => 'web'],
            ['permission' => 'permission-R', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'GET', 'url' => '/permissionsetting/{uuid}', 'route' => 'WEBSETTING\PermissionController@show', 'guard' => 'web'],
            ['permission' => 'permission-D', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'DELETE', 'url' => '/permissionsetting/destroy/{uuid}', 'route' => 'WEBSETTING\PermissionController@destroy', 'guard' => 'web'],
            ['permission' => 'permission-C', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/permissionsetting', 'route' => 'WEBSETTING\PermissionController@store', 'guard' => 'web'],
            ['permission' => 'permission-U', 'middleware' => 'lang,authz', 'type' => 'data', 'method' => 'POST', 'url' => '/permissionsetting/{uuid}', 'route' => 'WEBSETTING\PermissionController@update', 'guard' => 'web'],

            //Change Password
            ['permission'=>'','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/changepassword','route'=>'WEBSETTING\UserController@changePassword','guard'=>'web'],

            //Chart Dashboard Data
            ['permission'=>'dashboard-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/dashboard/data','route'=>'DashboardController@list','guard'=>'web'],

            //Chart Dashboard Data Summary
            ['permission'=>'dashboard-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/dashboard/summary','route'=>'DashboardController@summary','guard'=>'web'],
            
            //Chart Dashboard Data New
            ['permission'=>'dashboard-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/dashboard/list_data','route'=>'DashboardController@list_data','guard'=>'web'],
            //Download Excel Progress Dashboard
            ['permission'=>'dashboard-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/dashboard/excel_progress','route'=>'DashboardController@download_progress','guard'=>'web'],

            //master Data
            // Robi
            // COMPANY
            ['permission'=>'company-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/company','route'=>'CompanyController@index','guard'=>'web'],
            ['permission'=>'company-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/company/list','route'=>'CompanyController@datatables','guard'=>'web'],
            ['permission'=>'company-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/company','route'=>'CompanyController@store','guard'=>'web'],
            ['permission'=>'company-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/company/{id}','route'=>'CompanyController@show','guard'=>'web'],
            ['permission'=>'company-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/company/{id}/update','route'=>'CompanyController@update','guard'=>'web'],
            ['permission'=>'company-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/company/{id}','route'=>'CompanyController@destroy','guard'=>'web'],

            // Cost Center
            ['permission'=>'costcenter-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/costcenter','route'=>'CostcenterStructureController@index','guard'=>'web'],
            ['permission'=>'costcenter-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/costcenter/list','route'=>'CostcenterStructureController@datatables','guard'=>'web'],
            ['permission'=>'costcenter-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/costcenter','route'=>'CostcenterStructureController@store','guard'=>'web'],
            ['permission'=>'costcenter-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/costcenter/{id}','route'=>'CostcenterStructureController@show','guard'=>'web'],
            ['permission'=>'costcenter-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/costcenter/{id}/update','route'=>'CostcenterStructureController@update','guard'=>'web'],
            ['permission'=>'costcenter-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/costcenter/{id}','route'=>'CostcenterStructureController@destroy','guard'=>'web'],

            // Kikik Add Simulate User
            ['permission'=>'usersetting-A','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/usersetting/simulate/{id}','route'=>'WEBSETTING\UserController@simulate','guard'=>'web'],
            ['permission'=>'usersetting-A','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/usersetting/leaveSimulate','route'=>'WEBSETTING\UserController@leaveSimulate','guard'=>'web'],

            // Gl Account
            ['permission'=>'glaccount-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/glaccount','route'=>'GLAccountController@index','guard'=>'web'],
            ['permission'=>'glaccount-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/glaccount/list','route'=>'GLAccountController@datatables','guard'=>'web'],
            ['permission'=>'glaccount-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/glaccount','route'=>'GLAccountController@store','guard'=>'web'],
            ['permission'=>'glaccount-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/glaccount/{id}','route'=>'GLAccountController@show','guard'=>'web'],
            ['permission'=>'glaccount-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/glaccount/{id}/update','route'=>'GLAccountController@update','guard'=>'web'],
            ['permission'=>'glaccount-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/glaccount/{id}','route'=>'GLAccountController@destroy','guard'=>'web'],

            // Plant
            ['permission'=>'plant-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/plant','route'=>'PlantController@index','guard'=>'web'],
            ['permission'=>'plant-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/plant/list','route'=>'PlantController@datatables','guard'=>'web'],
            ['permission'=>'plant-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/plant','route'=>'PlantController@store','guard'=>'web'],
            ['permission'=>'plant-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/plant/{id}','route'=>'PlantController@show','guard'=>'web'],
            ['permission'=>'plant-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/plant/{id}/update','route'=>'PlantController@update','guard'=>'web'],
            ['permission'=>'plant-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/plant/{id}','route'=>'PlantController@destroy','guard'=>'web'],

            // functional location
            ['permission'=>'functional-location-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/functional-location','route'=>'FunctionalLocationController@index','guard'=>'web'],
            ['permission'=>'functional-location-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/functional-location/list','route'=>'FunctionalLocationController@datatables','guard'=>'web'],
            ['permission'=>'functional-location-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/functional-location','route'=>'FunctionalLocationController@store','guard'=>'web'],
            ['permission'=>'functional-location-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/functional-location/{id}','route'=>'FunctionalLocationController@show','guard'=>'web'],
            ['permission'=>'functional-location-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/functional-location/{id}/update','route'=>'FunctionalLocationController@update','guard'=>'web'],
            ['permission'=>'functional-location-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/functional-location/{id}','route'=>'FunctionalLocationController@destroy','guard'=>'web'],

            // role capex
            ['permission'=>'rolecapex-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/rolecapex','route'=>'RoleCapexController@index','guard'=>'web'],
            ['permission'=>'rolecapex-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/rolecapex/list','route'=>'RoleCapexController@datatables','guard'=>'web'],
            ['permission'=>'rolecapex-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/rolecapex','route'=>'RoleCapexController@store','guard'=>'web'],
            ['permission'=>'rolecapex-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/rolecapex/{id}','route'=>'RoleCapexController@show','guard'=>'web'],
            ['permission'=>'rolecapex-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/rolecapex/{id}/update','route'=>'RoleCapexController@update','guard'=>'web'],
            ['permission'=>'rolecapex-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/rolecapex/{id}','route'=>'RoleCapexController@destroy','guard'=>'web'],

            // invest type
            ['permission'=>'investType-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/investType','route'=>'InvestTypeController@index','guard'=>'web'],
            ['permission'=>'investType-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/investType/list','route'=>'InvestTypeController@datatables','guard'=>'web'],
            ['permission'=>'investType-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/investType','route'=>'InvestTypeController@store','guard'=>'web'],
            ['permission'=>'investType-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/investType/{id}','route'=>'InvestTypeController@show','guard'=>'web'],
            ['permission'=>'investType-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/investType/{id}/update','route'=>'InvestTypeController@update','guard'=>'web'],
            ['permission'=>'investType-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/investType/{id}','route'=>'InvestTypeController@destroy','guard'=>'web'],

            // project profile
            ['permission'=>'projectprofile-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/projectprofile','route'=>'ProjectProfileController@index','guard'=>'web'],
            ['permission'=>'projectprofile-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/projectprofile/list','route'=>'ProjectProfileController@datatables','guard'=>'web'],
            ['permission'=>'projectprofile-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/projectprofile','route'=>'ProjectProfileController@store','guard'=>'web'],
            ['permission'=>'projectprofile-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/projectprofile/{id}','route'=>'ProjectProfileController@show','guard'=>'web'],
            ['permission'=>'projectprofile-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/projectprofile/{id}/update','route'=>'ProjectProfileController@update','guard'=>'web'],
            ['permission'=>'projectprofile-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/projectprofile/{id}','route'=>'ProjectProfileController@destroy','guard'=>'web'],

            // capex config
            ['permission'=>'capexconfig-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/capexconfig','route'=>'CapexConfigController@index','guard'=>'web'],
            ['permission'=>'capexconfig-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/capexconfig/list','route'=>'CapexConfigController@datatables','guard'=>'web'],
            ['permission'=>'capexconfig-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/capexconfig','route'=>'CapexConfigController@store','guard'=>'web'],
            ['permission'=>'capexconfig-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/capexconfig/{id}','route'=>'CapexConfigController@show','guard'=>'web'],
            ['permission'=>'capexconfig-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/capexconfig/{id}/update','route'=>'CapexConfigController@update','guard'=>'web'],
            ['permission'=>'capexconfig-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/capexconfig/{id}','route'=>'CapexConfigController@destroy','guard'=>'web'],

            // koor budget
            ['permission'=>'koorbudget-R','middleware'=> 'lang,authz','type'=>'view','method'=>'GET','url'=>'/koorbudget','route'=>'KoorBudgetController@index','guard'=>'web'],
            ['permission'=>'koorbudget-R','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/koorbudget/list','route'=>'KoorBudgetController@datatables','guard'=>'web'],
            ['permission'=>'koorbudget-C','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/koorbudget','route'=>'KoorBudgetController@store','guard'=>'web'],
            ['permission'=>'koorbudget-U','middleware'=> 'lang,authz','type'=>'data','method'=>'GET','url'=>'/koorbudget/{id}','route'=>'KoorBudgetController@show','guard'=>'web'],
            ['permission'=>'koorbudget-U','middleware'=> 'lang,authz','type'=>'data','method'=>'POST','url'=>'/koorbudget/{id}/update','route'=>'KoorBudgetController@update','guard'=>'web'],
            ['permission'=>'koorbudget-D','middleware'=> 'lang,authz','type'=>'data','method'=>'DELETE','url'=>'/koorbudget/{id}','route'=>'KoorBudgetController@destroy','guard'=>'web'],
        ];

        foreach($data as $k_data => $v_data){
            $check = Routes::where($v_data)->first();
            if(!$check)
                Routes::insert($v_data);
        }
        // Routes::insert($data);
        $this->command->info("Routes Seeder Success !");
    }
}
