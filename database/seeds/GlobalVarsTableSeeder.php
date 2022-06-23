<?php

use App\Models\GlobalVar;
use Illuminate\Database\Seeder;

class GlobalVarsTableSeeder extends Seeder
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
            ['group'=> 'ROUTE','id' => 1, 'name' => 'METHOD', 'desc' => 'GET method of the routes', 'value' => 'GET', 'created_by' => 'system'],
            ['group'=> 'ROUTE','id' => 2, 'name' => 'METHOD', 'desc' => 'POST method of the routes', 'value' => 'POST', 'created_by' => 'system'],
            ['group'=> 'ROUTE','id' => 3, 'name' => 'METHOD', 'desc' => 'PUT method of the routes', 'value' => 'PUT', 'created_by' => 'system'],
            ['group'=> 'ROUTE','id' => 4, 'name' => 'METHOD', 'desc' => 'DELETE method of the routes', 'value' => 'DELETE', 'created_by' => 'system'],
        ];
        
        GlobalVar::insert($datas);
        $this->command->info("Global Variable Seeder Success !");
    }
}
