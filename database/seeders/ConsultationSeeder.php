<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\Consultation;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data here
        $consultation = [
                [
                    'name' => 'Jantung Sesak',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Teknana Darah Tinggi',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Gangguan Irama Jantung',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                
            ];
    
            //this array specialist will be insert to table 'specialist'
            Consultation::insert($consultation);
    }
}
