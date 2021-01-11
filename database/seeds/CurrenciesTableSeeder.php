<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = ['Dollar', 'Pound', 'Euro ', 'Rial', 'Rupee', 'Dinar', 'Tk',];

        foreach ($currencies as $currency){
            DB::table('currencies')->insert([
                'currency_name'=>$currency,
                'created_at'=>\Carbon\Carbon::now()->toDateTimeLocalString(),
            ]);
        }
    }
}
