<?php

use Illuminate\Database\Seeder;
use App\Models\CostcenterStructure;
use Illuminate\Support\Facades\Hash;

class CostcenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $costcenter = [
            ['directorat' => '1', 'departement' => '1', 'pic' => 'Crysna', 'company' => '1', 'created_by' => 'admin', 'updated_by' => 'admin', 'status' => '1', 'kadir' => 'Wima', 'unit_kerja' => '1', 'year' => '2022'],
            ['directorat' => '1', 'departement' => '1', 'pic' => 'Rangga', 'company' => '1', 'created_by' => 'admin', 'updated_by' => 'admin', 'status' => '1', 'kadir' => 'Test', 'unit_kerja' => '1', 'year' => '2022'],
            ['directorat' => '1', 'departement' => '1', 'pic' => 'Rizki', 'company' => '1', 'created_by' => 'admin', 'updated_by' => 'admin', 'status' => '1', 'kadir' => 'Test', 'unit_kerja' => '1', 'year' => '2022'],
            ['directorat' => '1', 'departement' => '1', 'pic' => 'Soeharwo', 'company' => '1', 'created_by' => 'admin', 'updated_by' => 'admin', 'status' => '1', 'kadir' => 'Test', 'unit_kerja' => '1', 'year' => '2022'],
        ];

        CostcenterStructure::insert($costcenter);
        $this->command->info('Costcenter Seeders SuccessFull');
    }
}
