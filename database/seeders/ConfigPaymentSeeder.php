<?php

namespace Database\Seeders;

use App\Models\MasterData\ConfigPayment;
use Illuminate\Database\Seeder;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data here
        $configpayment = [
            [
                'fee' => '125000',
                'vat' => '20', //vat is %
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
                
            ];
    
            //this array specialist will be insert to table 'specialist'
            ConfigPayment::insert($configpayment);
    }
}
