<?php

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $company = [
            ['company' => 'A000', 'description' => 'PT Pupuk Indonesia (Persero)'],
            ['company' => 'B000', 'description' => 'PT Petrokimia Gresik'],
            ['company' => 'BA00', 'description' => 'PT Petrosida Gresik'],
            ['company' => 'BB00', 'description' => 'PT Petrokimia Kayaku'],
            ['company' => 'C000', 'description' => 'PT Pupuk Kujang'],
            ['company' => 'CA00', 'description' => 'PT Sintas Kurama Perdana'],
            ['company' => 'CB00', 'description' => 'PT Kawasan Industri Kujang Cikampek'],
            ['company' => 'D000', 'description' => 'PT Pupuk Kalimantan Timur'],
            ['company' => 'DA00', 'description' => 'PT Kaltim Industrial Estate'],
            ['company' => 'E000', 'description' => 'PT Pupuk Iskandar Muda'],
            ['company' => 'F000', 'description' => 'PT Pupuk Sriwidjaja Palembang'],
            ['company' => 'FA00', 'description' => 'PT Pusri Agro Lestari'],
            ['company' => 'G000', 'description' => 'PT Rekayasa Industri'],
            ['company' => 'GA00', 'description' => 'PT Yasa Industri Nusantara'],
            ['company' => 'GB00', 'description' => 'PT Tracon Industri'],
            ['company' => 'GC00', 'description' => 'PT Rekayasa Engineering'],
            ['company' => 'GE00', 'description' => 'REKIND Malaysia, Sdn, Bhd'],
            ['company' => 'GF00', 'description' => 'PT REKIND Daya Mamuju'],
            ['company' => 'GK00', 'description' => 'PT Puspetindo'],
            ['company' => 'H000', 'description' => 'PT Mega Eltra'],
            ['company' => 'HA00', 'description' => 'PT Sigma Utama'],
            ['company' => 'I000', 'description' => 'PT Pupuk Indonesia Logistik'],
            ['company' => 'J000', 'description' => 'PT Pupuk Indonesia Energi'],
            ['company' => 'JA00', 'description' => 'PT Kaltim Daya Mandiri'],
            ['company' => 'JAA0', 'description' => 'PT KDM Agro Energi'],
            ['company' => 'JAB0', 'description' => 'PT Banyumas Energi Lestari'],
            ['company' => 'K000', 'description' => 'PT Pupuk Indonesia Pangan'],
        ];

        Company::insert($company);
        $this->command->info('Company Seeders SuccessFull');
    }
}
