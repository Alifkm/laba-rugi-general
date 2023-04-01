<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 1,
            'transaction_source_name' => 'Nilai kontrak project',
        ]);

        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 2,
            'transaction_source_name' => 'Pembelian material',
        ]);

        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 2,
            'transaction_source_name' => 'Gaji karyawan',
        ]);


        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 3,
            'transaction_source_name' => 'Penyusutan',
        ]);

        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 3,
            'transaction_source_name' => 'Transportasi',
        ]);

        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 3,
            'transaction_source_name' => 'Pemeliharaan',
        ]);

        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 3,
            'transaction_source_name' => 'Dokumen',
        ]);

        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 3,
            'transaction_source_name' => 'Listrik dan telepon',
        ]);

        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 3,
            'transaction_source_name' => 'Kantor',
        ]);

        DB::table('transaction_sources')->insert([
            'profit_loss_component_id' => 3,
            'transaction_source_name' => 'Operasional lainnya',
        ]);

        
        // DB::table('transaction_sources')->insert([
        //     'transaction_source_name' => 'pembayaran lainnya untuk client',
        // ]);
    }
}
