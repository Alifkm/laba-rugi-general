<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionOutcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        
        // // ==================================================
        // // Tahun 2020
        // // ==================================================
        
        
        // Jan
        // -------------
        // Salary (gaji)
        DB::table('transactions')->insert([ 
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-01-28',
            'total' => 57000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-01-28',
            'total' => 6700000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-01-28',
            'total' => 1750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-01-28',
            'total' => 250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service motor kantor',
            'date' => '2020-01-28',
            'total' => 250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya ertifikat kompetensi',
            'date' => '2020-01-28',
            'total' => 4000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 7,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-01-28',
            'total' => 952000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-01-28',
            'total' => 377500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-01-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-01-28',
            'total' => 950000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // feb
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-02-28',
            'total' => 57000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-02-28',
            'total' => 5645000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-02-28',
            'total' => 1750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-02-28',
            'total' => 250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-02-28',
        //     'total' => 1137000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-02-28',
            'total' => 1202500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-02-28',
            'total' => 397000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-02-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya atk',
            'date' => '2020-02-28',
            'total' => 200000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-02-28',
            'total' => 700000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya overhead',
            'date' => '2020-02-28',
            'total' => 503581,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // mar
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-03-28',
            'total' => 57000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-03-28',
            'total' => 5505000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-03-28',
            'total' => 1750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-03-28',
            'total' => 250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-02-28',
        //     'total' => 1100000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-03-28',
            'total' => 1072500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-03-28',
            'total' => 457500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-03-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-03-28',
            'total' => 1000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        

        // -------------
        // apr
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-04-28',
            'total' => 57000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-04-28',
            'total' => 550000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-04-28',
            'total' => 350000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-04-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service mobil operasional',
            'date' => '2020-04-28',
            'total' => 2500000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-04-28',
        //     'total' => 1223000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-04-28',
            'total' => 875000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-04-28',
            'total' => 365000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-04-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-04-28',
            'total' => 450000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // may
        // -------------

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-05-28',
            'total' => 57000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Total biaya THR karyawan',
            'date' => '2020-05-28',
            'total' => 40000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-05-28',
            'total' => 165000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-05-28',
            'total' => 350000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-05-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya pemeliharaan peralatan project',
            'date' => '2020-05-28',
            'total' => 4200000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-05-28',
        //     'total' => 542000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-05-28',
            'total' => 996000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-05-28',
            'total' => 298000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-05-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-05-28',
            'total' => 2350000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya overhead',
            'date' => '2020-05-28',
            'total' => 2007129,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        
        // -------------
        // jun
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-06-28',
            'total' => 57000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-06-28',
            'total' => 375000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-06-28',
            'total' => 450000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-06-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya pemeliharaan peralatan kantor',
            'date' => '2020-06-28',
            'total' => 3500000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-06-28',
        //     'total' => 213000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-06-28',
            'total' => 895500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-06-28',
            'total' => 403000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-06-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya atk',
            'date' => '2020-06-28',
            'total' => 200000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-06-28',
            'total' => 750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // jul
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-07-28',
            'total' => 57000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-07-28',
            'total' => 430000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-07-28',
            'total' => 550000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-07-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service mobil kantor',
            'date' => '2020-07-28',
            'total' => 1950000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-07-28',
        //     'total' => 549000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-07-28',
            'total' => 789500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-07-28',
            'total' => 350500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-07-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-07-28',
            'total' => 850000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // aug
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-08-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-08-28',
            'total' => 3650000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-08-28',
            'total' => 1550000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-08-28',
            'total' => 250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service motor kantor',
            'date' => '2020-08-28',
            'total' => 350000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-08-28',
        //     'total' => 680000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-08-28',
            'total' => 833500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-08-28',
            'total' => 375000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-08-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-08-28',
            'total' => 900000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya overhead',
            'date' => '2020-08-28',
            'total' => 863448,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // sep
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-09-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-09-28',
            'total' => 3980000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-09-28',
            'total' => 1550000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-09-28',
            'total' => 250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-09-28',
        //     'total' => 846000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-09-28',
            'total' => 724911,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-09-28',
            'total' => 330000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-09-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-09-28',
            'total' => 1000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // oct
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-10-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-10-28',
            'total' => 3430000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-10-28',
            'total' => 1550000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-10-28',
            'total' => 250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service mobil operasional',
            'date' => '2020-10-28',
            'total' => 2750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya pemeliharaan peralatan project',
            'date' => '2020-10-28',
            'total' => 5000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-10-28',
        //     'total' => 890000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-10-28',
            'total' => 809000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-10-28',
            'total' => 387500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-10-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya atk',
            'date' => '2020-10-28',
            'total' => 280000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-10-28',
            'total' => 750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // -------------
        // nov
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-11-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-11-28',
            'total' => 4320000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-11-28',
            'total' => 1750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-11-28',
            'total' => 250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2020-11-28',
        //     'total' => 732000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-11-28',
            'total' => 642500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-11-28',
            'total' => 390000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-11-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2020-11-28',
            'total' => 100000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-11-28',
            'total' => 950000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // des
        // -------------

        // Material
        DB::table('transactions')->insert([ 
            'transaction_name' => 'Biaya total pembelian material project pemasangan SUTM, gardu portal & SUTR tahap 1 PT. BUKILLA',
            'date' => '2020-12-28',
            'total' => 51072870,
            'transaction_type_id' => 2,
            'transaction_source_id' => 2,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2020-12-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Total biaya bonus karyawan',
            'date' => '2020-12-28',
            'total' => 90000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Penyusutan
        DB::table('transactions')->insert([
            'transaction_name' => 'Penyusutan kendaraan operasional',
            'date' => '2020-12-28',
            'total' => 35300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 4,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Penyusutan kendaraan kantor',
            'date' => '2020-12-28',
            'total' => 23075000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 4,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2020-12-28',
            'total' => 5150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2020-12-27',
            'total' => 1750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2020-12-27',
            'total' => 250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya akuntan publik',
            'date' => '2020-12-28',
            'total' => 6000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 7,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2020-12-28',
            'total' => 984500,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2020-12-28',
            'total' => 401000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2020-12-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2020-12-28',
            'total' => 100000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2020-12-28',
            'total' => 600000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya overhead',
            'date' => '2020-12-28',
            'total' => 1246357,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);










        // ==============================================================================
        // Tahun 2021
        // ==============================================================================


        // -------------
        // Jan
        // -------------

        // Salary (gaji)
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-01-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-01-28',
            'total' => 4950000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-01-28',
            'total' => 1800000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-01-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya pemeliharaan peralatan project',
            'date' => '2021-01-28',
            'total' => 7500000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service mobil kantor',
            'date' => '2021-01-28',
            'total' => 2650000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya perpanjangan sertifikat kompetensi',
            'date' => '2021-01-28',
            'total' => 4750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 7,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya perpanjangan sertifikat badan usaha',
            'date' => '2021-01-28',
            'total' => 3500000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 7,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-01-28',
            'total' => 1594667,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-01-28',
            'total' => 555333,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-01-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-01-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-01-28',
            'total' => 1000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya overhead',
            'date' => '2021-01-28',
            'total' => 449012,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // feb
        // -------------

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-02-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-02-28',
            'total' => 5250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-02-28',
            'total' => 1800000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-02-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya pemeliharaan peralatan kantor',
            'date' => '2021-02-28',
            'total' => 9200000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);        

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service motor kantor',
            'date' => '2021-02-28',
            'total' => 350000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);        

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2021-02-28',
        //     'total' => 3810000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-02-28',
            'total' => 1145000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-02-28',
            'total' => 555000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-02-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-02-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-02-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // mar
        // -------------

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-03-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-03-28',
            'total' => 4650000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-03-28',
            'total' => 1800000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya motor kantor',
            'date' => '2021-03-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2021-03-28',
        //     'total' => 3300000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-03-28',
            'total' => 1094667,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-03-28',
            'total' => 555333,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-03-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-03-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya atk',
            'date' => '2021-03-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-03-28',
            'total' => 940000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // apr
        // -------------

        // Material
        DB::table('transactions')->insert([ 
            'transaction_name' => 'Biaya total pembelian material project pemasangan SUTM, gardu portal & SUTR tahap 2 tahun 2021 PT. BUKILLA',
            'date' => '2021-04-28',
            'total' => 47892156,  
            'transaction_type_id' => 2,
            'transaction_source_id' => 2,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-04-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-04-28',
            'total' => 3530000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-04-28',
            'total' => 1800000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-04-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service mobil operasional',
            'date' => '2021-04-28',
            'total' => 3500000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2021-04-28',
        //     'total' => 3450000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-04-28',
            'total' => 1420000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-04-28',
            'total' => 555000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-04-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-04-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-04-28',
            'total' => 600000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya overhead',
            'date' => '2021-04-28',
            'total' => 998237,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // -------------
        // may
        // -------------

        // Material
        DB::table('transactions')->insert([ 
            'transaction_name' => 'Biaya total pembelian material project pemasangan LBS wilayah ULP Babelan',
            'date' => '2021-05-28',
            'total' => 57001012,  
            'transaction_type_id' => 2,
            'transaction_source_id' => 2,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([ 
            'transaction_name' => 'Biaya total pembelian material project pemasangan CUT OUT wilayah ULP Babelan',
            'date' => '2021-05-28',
            'total' => 50100046,  
            'transaction_type_id' => 2,
            'transaction_source_id' => 2,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([ 
            'transaction_name' => 'Biaya total pembelian material project pemasangan SKTM dan gardu kios SPLIT 3C',
            'date' => '2021-05-28',
            'total' => 53735000,  
            'transaction_type_id' => 2,
            'transaction_source_id' => 2,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-05-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Total biaya THR karyawan',
            'date' => '2021-05-28',
            'total' => 45000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-05-28',
            'total' => 4800000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-05-28',
            'total' => 1800000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-05-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya pemeliharaan peralatan project',
            'date' => '2021-05-28',
            'total' => 8900000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);        

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2021-05-28',
        //     'total' => 2950000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-05-28',
            'total' => 1794667,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-05-28',
            'total' => 555333,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-05-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-05-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-05-28',
            'total' => 1250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya overhead',
            'date' => '2021-05-28',
            'total' => 1251984,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // jun
        // -------------
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-06-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-06-28',
            'total' => 4800000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-06-28',
            'total' => 1800000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-06-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya perpanjangan sertifikat k3',
            'date' => '2021-06-28',
            'total' => 7100000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 7,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya perpanjangan sertifikat smk3',
            'date' => '2021-06-28',
            'total' => 5556000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 7,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya perpanjangan sertifikat badan usaha',
            'date' => '2021-06-28',
            'total' => 6400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 7,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-06-28',
            'total' => 1220000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-06-28',
            'total' => 555000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-06-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-06-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya atk',
            'date' => '2021-06-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-06-28',
            'total' => 900000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // jul
        // -------------

        // Material
        DB::table('transactions')->insert([ 
            'transaction_name' => 'Biaya total pembelian material project pembangunan SKTM, SUTM, gardu dan SUTR tahap 3 PT. BUKILLA MANDIRI',
            'date' => '2021-07-28',
            'total' => 40110054,
            'transaction_type_id' => 2,
            'transaction_source_id' => 2,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-07-28',
            'total' => 58000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-07-28',
            'total' => 6050000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-07-28',
            'total' => 1800000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-07-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service mobil kantor',
            'date' => '2021-02-28',
            'total' => 2100000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);        

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2021-07-28',
        //     'total' => 3056000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-07-28',
            'total' => 1644667,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-07-28',
            'total' => 555333,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-07-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-07-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-07-28',
            'total' => 850000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya overhead',
            'date' => '2021-07-28',
            'total' => 302643,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // aug
        // -------------

        // Material
        DB::table('transactions')->insert([ 
            'transaction_name' => 'Biaya total pembelian material project pemasangan gardu untuk potong beban G. KSA, SAHB, STMD dan ARGG',
            'date' => '2021-08-28',
            'total' => 48232000,  
            'transaction_type_id' => 2,
            'transaction_source_id' => 2,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-08-28',
            'total' => 60000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-08-28',
            'total' => 4750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-08-28',
            'total' => 2000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-08-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service motor kantor',
            'date' => '2021-08-28',
            'total' => 480000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2021-08-28',
        //     'total' => 3400000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-08-28',
            'total' => 1595000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-08-28',
            'total' => 555000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        
        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-08-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-08-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-08-28',
            'total' => 950000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // sep
        // -------------

        // Material
        // DB::table('transactions')->insert([ 
        //     'transaction_name' => 'Total pembelian material',
        //     'date' => '2021-09-28',
        //     'total' => 57001012,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 2,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-09-28',
            'total' => 60000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-09-28',
            'total' => 4250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-09-28',
            'total' => 2000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-09-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya pemeliharaan peralatan project',
            'date' => '2021-09-28',
            'total' => 9250000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);        

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2021-09-28',
        //     'total' => 3450000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-09-28',
            'total' => 1294667,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-09-28',
            'total' => 555333,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-09-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-09-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya atk',
            'date' => '2021-09-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-09-28',
            'total' => 350000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // oct
        // -------------

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-10-28',
            'total' => 60000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-10-28',
            'total' => 3100000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-10-28',
            'total' => 2000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-10-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pemeliharaan
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya pemeliharaan peralatan kantor',
            'date' => '2021-10-28',
            'total' => 7500000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya service mobil operasional',
            'date' => '2021-10-28',
            'total' => 3750000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 6,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2021-10-28',
        //     'total' => 1350000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-10-28',
            'total' => 1420000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-10-28',
            'total' => 555000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-10-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-10-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-10-28',
            'total' => 450000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        

        // -------------
        // nov
        // -------------

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-11-28',
            'total' => 60000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-11-28',
            'total' => 4000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-11-28',
            'total' => 2000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-11-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Dokumen
        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Biaya dokumen',
        //     'date' => '2021-11-28',
        //     'total' => 2775000,
        //     'transaction_type_id' => 2,
        //     'transaction_source_id' => 8,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-11-28',
            'total' => 749667,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-11-28',
            'total' => 555333,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-11-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-11-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-11-28',
            'total' => 1150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // -------------
        // des
        // -------------

        // gaji
        DB::table('transactions')->insert([
            'transaction_name' => 'Total gaji karyawan',
            'date' => '2021-12-28',
            'total' => 60000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Total bonus karyawan',
            'date' => '2021-12-28',
            'total' => 90000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 3,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Penyusutan
        DB::table('transactions')->insert([
            'transaction_name' => 'Penyusutan kendaraan opersional',
            'date' => '2021-12-27',
            'total' => 50000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 4,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Penyusutan kendaraan kantor',
            'date' => '2021-12-27',
            'total' => 31600000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 4,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Transportasi
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil operasional',
            'date' => '2021-12-28',
            'total' => 3850000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin mobil kantor',
            'date' => '2021-12-28',
            'total' => 2000000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya bensin motor kantor',
            'date' => '2021-12-28',
            'total' => 300000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 5,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        // Dokumen
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya akuntan publik',
            'date' => '2021-12-28',
            'total' => 10600000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 7,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // Listrik dan telepon
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya listrik',
            'date' => '2021-12-28',
            'total' => 1445000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya telepon',
            'date' => '2021-12-28',
            'total' => 555000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 8,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // Kantor
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya kebersihan kantor',
            'date' => '2021-12-28',
            'total' => 400000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya keamanan kantor',
            'date' => '2021-12-28',
            'total' => 150000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 9,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        // Pembayaran operasional lainnya
        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya entertain client',
            'date' => '2021-12-28',
            'total' => 1700000,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Biaya overhead',
            'date' => '2021-12-28',
            'total' => 1499104,
            'transaction_type_id' => 2,
            'transaction_source_id' => 10,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);



















        
    // ==============================================================================
    // Tahun 2022
    // ==============================================================================


    // -------------
    // Jan
    // -------------

    // Material
    DB::table('transactions')->insert([ 
        'transaction_name' => 'Biaya total pembelian material project Pemasangan SKTM, Gardu Tembok, Instalasi TM-TR, SKTR dan SUTR di Cluster Vranta - Tera Damai',
        'date' => '2022-01-28',
        'total' => 129478360,  
        'transaction_type_id' => 2,
        'transaction_source_id' => 2,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-01-28',
        'total' => 61000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-01-28',
        'total' => 4750000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-01-28',
        'total' => 1620000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-01-28',
        'total' => 280000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pemeliharaan
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya pemeliharaan peralatan project',
        'date' => '2022-01-28',
        'total' => 7100000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya service mobil kantor',
        'date' => '2022-01-28',
        'total' => 5115000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Dokumen
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya perpanjangan sertifikat kompetensi',
        'date' => '2022-01-28',
        'total' => 6756000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 7,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya perpanjangan sertifikat badan usaha',
        'date' => '2022-01-28',
        'total' => 5500000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 7,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-01-28',
        'total' => 1354000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-01-28',
        'total' => 590500,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-01-28',
        'total' => 420000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-01-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya atk',
        'date' => '2022-01-28',
        'total' => 490000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-01-28',
        'total' => 1800000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);



    // -------------
    // Feb
    // -------------

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-02-28',
        'total' => 61000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-02-28',
        'total' => 5645000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-02-28',
        'total' => 1450000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-02-28',
        'total' => 280000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pemeliharaan
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya pemeliharaan peralatan kantor',
        'date' => '2022-02-28',
        'total' => 7200000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya service motor kantor',
        'date' => '2022-02-28',
        'total' => 390000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

   
    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-02-28',
        'total' => 1405933,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-02-28',
        'total' => 590500,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-02-28',
        'total' => 420000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-02-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-02-28',
        'total' => 1330000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya overhead',
        'date' => '2022-02-28',
        'total' => 1402661,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);



    // -------------
    // Mar
    // -------------

    // Material
    DB::table('transactions')->insert([ 
        'transaction_name' => 'Biaya total pembelian material project PERLUASAN JTM, JTR DAN GARDU TAHAP 1 TAHUN 2022 PT. BUKILLA MANDIRI',
        'date' => '2022-03-28',
        'total' => 112091522,  
        'transaction_type_id' => 2,
        'transaction_source_id' => 2,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-03-28',
        'total' => 61000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-03-28',
        'total' => 3505000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-03-28',
        'total' => 1420000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-03-28',
        'total' => 280000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Dokumen
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya perpanjangan sertifikat k3',
        'date' => '2022-03-28',
        'total' => 20300000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 7,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-03-28',
        'total' => 1213598,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-03-28',
        'total' => 590500,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-03-28',
        'total' => 420000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-03-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-03-28',
        'total' => 1920000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);



    
    // -------------
    // Apr
    // -------------

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-04-28',
        'total' => 106000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-04-28',
        'total' => 4020000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-04-28',
        'total' => 1350000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-04-28',
        'total' => 285000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pemeliharaan
    DB::table('transactions')->insert([
        'transaction_name' => 'Service mobil operasional',
        'date' => '2022-04-28',
        'total' => 8500000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-04-28',
        'total' => 1409000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-04-28',
        'total' => 590500,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-04-28',
        'total' => 420000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-04-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-04-28',
        'total' => 1450000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);



    // -------------
    // Mei
    // -------------

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-05-28',
        'total' => 61000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-05-28',
        'total' => 865000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-05-28',
        'total' => 450000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-05-28',
        'total' => 230000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pemeliharaan
    DB::table('transactions')->insert([
        'transaction_name' => 'Pemeliharaan peralatan project',
        'date' => '2022-05-28',
        'total' => 8550000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-05-28',
        'total' => 1221000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-05-28',
        'total' => 590500,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-05-28',
        'total' => 420000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-05-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-05-28',
        'total' => 1350000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya overhead',
        'date' => '2022-05-28',
        'total' => 2010348,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);



    // -------------
    // Jun
    // -------------

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-06-28',
        'total' => 61000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-06-28',
        'total' => 775000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-06-28',
        'total' => 560000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-06-28',
        'total' => 230000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-06-28',
        'total' => 1250493,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-06-28',
        'total' => 590500,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-06-28',
        'total' => 420000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-06-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya atk',
        'date' => '2022-06-28',
        'total' => 545000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-06-28',
        'total' => 975000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);


    // -------------
    // Jul
    // -------------

    // Material
    DB::table('transactions')->insert([ 
        'transaction_name' => 'Biaya total pembelian material project PERLUASAN JTM, JTR DAN GARDU TAHAP 2 TAHUN 2022 PT. BUKILLA MANDIRI',
        'date' => '2022-07-28',
        'total' => 90741056,  
        'transaction_type_id' => 2,
        'transaction_source_id' => 2,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-07-28',
        'total' => 62000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-07-28',
        'total' => 5230000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-07-28',
        'total' => 1500000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-07-28',
        'total' => 270000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pemeliharaan
    DB::table('transactions')->insert([
        'transaction_name' => 'Service mobil kantor',
        'date' => '2022-07-28',
        'total' => 6600000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Dokumen
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya perpanjangan sertifikat smk3',
        'date' => '2022-07-28',
        'total' => 7850000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 7,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-07-28',
        'total' => 1365840,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-07-28',
        'total' => 590500,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-07-28',
        'total' => 420000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-07-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-07-28',
        'total' => 1250000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya overhead',
        'date' => '2022-07-28',
        'total' => 2873623,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);




    // -------------
    // Aug
    // -------------

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-08-28',
        'total' => 62000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-08-28',
        'total' => 6478000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-08-28',
        'total' => 1350000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-08-28',
        'total' => 290000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pemeliharaan
    DB::table('transactions')->insert([
        'transaction_name' => 'Service motor kantor',
        'date' => '2022-08-28',
        'total' => 550000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-08-28',
        'total' => 1367123,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-08-28',
        'total' => 590500,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-08-28',
        'total' => 450000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-08-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-08-28',
        'total' => 1040000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya overhead',
        'date' => '2022-08-28',
        'total' => 1477601,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);


    // -------------
    // Sep
    // -------------

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-09-28',
        'total' => 62000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-09-28',
        'total' => 3980000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-09-28',
        'total' => 1240000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-09-28',
        'total' => 275000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pemeliharaan
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya pemeliharaan peralatan project',
        'date' => '2022-09-28',
        'total' => 8950000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-09-28',
        'total' => 1286790,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-09-28',
        'total' => 610300,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-09-28',
        'total' => 450000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-09-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-09-28',
        'total' => 1000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);



    // -------------
    // Okt
    // -------------

    // Material
    DB::table('transactions')->insert([ 
        'transaction_name' => 'Biaya total pembelian material project pemasangan sktm, gardu tembok, instalasi TM-TR, SKTR, dan SUTR, di cluster curtina - Tera Damai',
        'date' => '2022-10-28',
        'total' => 156566809,  
        'transaction_type_id' => 2,
        'transaction_source_id' => 2,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-10-28',
        'total' => 62000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-10-28',
        'total' => 3430000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-10-28',
        'total' => 1350000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-10-28',
        'total' => 290000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pemeliharaan
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya pemeliharaan peralatan kantor',
        'date' => '2022-10-28',
        'total' => 6975000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya service mobil operasional',
        'date' => '2022-10-28',
        'total' => 9750000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 6,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-10-28',
        'total' => 1412466,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-10-28',
        'total' => 610300,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-10-28',
        'total' => 450000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-10-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya atk',
        'date' => '2022-10-28',
        'total' => 565000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-10-28',
        'total' => 875000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);



    // -------------
    // Nov
    // -------------

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-11-28',
        'total' => 62000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-11-28',
        'total' => 5320000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-11-28',
        'total' => 1687000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-11-28',
        'total' => 295000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-11-28',
        'total' => 1285201,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-11-28',
        'total' => 610300,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-11-28',
        'total' => 450000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-11-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-11-28',
        'total' => 1150000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya overhead',
        'date' => '2022-11-28',
        'total' => 594167,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);



    // -------------
    // Des
    // -------------

    // Salary (gaji)
    DB::table('transactions')->insert([
        'transaction_name' => 'Total gaji karyawan',
        'date' => '2022-12-28',
        'total' => 62000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Total biaya bonus karyawan',
        'date' => '2022-12-28',
        'total' => 92000000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 3,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Penyusutan
    DB::table('transactions')->insert([
        'transaction_name' => 'Penyusutan kendaraan opersional',
        'date' => '2022-12-28',
        'total' => 45450000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 4,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Penyusutan kendaraan kantor',
        'date' => '2022-12-28',
        'total' => 36150000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 4,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);


    // Transportasi
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil operasional',
        'date' => '2022-12-28',
        'total' => 3550000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin mobil kantor',
        'date' => '2022-12-28',
        'total' => 1370000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya bensin motor kantor',
        'date' => '2022-12-28',
        'total' => 280000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 5,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Listrik dan telepon
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya listrik',
        'date' => '2022-12-28',
        'total' => 1343356,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya telepon',
        'date' => '2022-12-28',
        'total' => 610300,
        'transaction_type_id' => 2,
        'transaction_source_id' => 8,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Kantor
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya kebersihan kantor',
        'date' => '2022-12-28',
        'total' => 450000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya keamanan kantor',
        'date' => '2022-12-28',
        'total' => 180000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 9,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    // Pembayaran operasional lainnya
    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya entertain client',
        'date' => '2022-12-28',
        'total' => 790000,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    DB::table('transactions')->insert([
        'transaction_name' => 'Biaya overhead',
        'date' => '2022-12-28',
        'total' => 1711600,
        'transaction_type_id' => 2,
        'transaction_source_id' => 10,
        'created_by' => 'admin1',
        'updated_by' => 'owner.create.approved',
        'created_at' => '2022-12-20',
        'updated_at' => '2022-12-20'
    ]);

    }
}










    