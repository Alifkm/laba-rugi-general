<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfitLossComponent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profit_loss_components')->insert([
            'profit_loss_component_name' => 'Penghasilan Neto',
        ]);

        DB::table('profit_loss_components')->insert([
            'profit_loss_component_name' => 'Beban Pokok Penjualan',
        ]);

        DB::table('profit_loss_components')->insert([
            'profit_loss_component_name' => 'Beban Usaha',
        ]);

        DB::table('profit_loss_components')->insert([
            'profit_loss_component_name' => 'Beban Lain - Lain',
        ]);

    }
}
