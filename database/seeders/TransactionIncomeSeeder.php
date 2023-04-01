<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionIncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        // Tahun 2020
        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SKTM, SUTM, Gardu Portal & SUTR PB PT. Alamindo Trulynusa',
            'date' => '2020-01-20',
            'total' => 32026629,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, & Gardu Portal PB PT. Adhi Persada Gedung',
            'date' => '2020-01-20',
            'total' => 29628548,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTR, PB Sari Budi Asih',
            'date' => '2020-01-24',
            'total' => 20133131,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTR, PB Suradi',
            'date' => '2020-01-24',
            'total' => 19517883,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu Cantol & SUTR PB PT. Souber Wijaya sakti',
            'date' => '2020-01-24',
            'total' => 39529188,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan  SUTM, Gardu Cantol dan SUTR PB Perum Srimukti Residence',
            'date' => '2020-01-24',
            'total' => 40330939,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan  SUTM, Gardu Cantol dan SUTR PB PT. Permata Indah Cipta Graha',
            'date' => '2020-02-07',
            'total' => 51920393,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan  SUTM, Gardu Cantol dan SUTR PB. Muslim Cahaya Purnama',
            'date' => '2020-02-11',
            'total' => 44409401,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM & Gardu Portal PB Universitas Bhayangkara',
            'date' => '2020-02-18',
            'total' => 37302766,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTR, PB Adang',
            'date' => '2020-03-03',
            'total' => 33349680,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu Portal dan SUTR PB Nurhasan',
            'date' => '2020-03-13',
            'total' => 36199170,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, & Gardu Cantol PB Apipudin',
            'date' => '2020-03-17',
            'total' => 40565481,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM & Gardu Portal PB Universitas Gunadarma',
            'date' => '2020-04-21',
            'total' => 61276990,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTH, & Gardu Cantol Persada',
            'date' => '2020-05-10',
            'total' => 78230860,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTH Perumahan Harapan Baru Bekasi',
            'date' => '2020-06-19',
            'total' => 42820182,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SKTM Daerah Tebet',
            'date' => '2020-07-13',
            'total' => 88201000,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SKTM, Gardi Kios Split 3C & SUTR PB Kejaksaan Negri Bekasi',
            'date' => '2020-08-04',
            'total' => 109609133,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu Portal & SUTR Tahap 1',
            'date' => '2020-09-12',
            'total' => 87522726,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu Cantol & SUTR PB ISOL',
            'date' => '2020-10-23',
            'total' => 107191365,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SKTM DAN Gardu Kios Split 3C PB Yayasan At-Taqwa',
            'date' => '2020-11-27',
            'total' => 95986096,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu Portal & SUTR Tahap 2',
            'date' => '2020-12-07',
            'total' => 94595268 ,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        
        DB::table('transactions')->insert([
            'transaction_name' => 'Pekerjaan Peninggian PHBTR yang terkena dampak banjir Wilayah ULP Babelan',
            'date' => '2020-12-30',
            'total' => 153821788,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pekerjaan Peninggian Kubikel Spit 3C UNIS, GKJB, PL 102, PL 112 terdampak banjir Wilayah ULP Bekasi Kota',
            'date' => '2020-12-30',
            'total' => 71975020,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);






        // ===============================================================================
        // Tahun 2021
        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu Portal & SUTR Tahap 1',
            'date' => '2021-01-25',
            'total' => 94377438,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan Gardu Portal Perumahan Bekasi Timur Regency',
            'date' => '2021-02-15',
            'total' => 81381722,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM Kelurahan Jakasampurna',
            'date' => '2021-02-15',
            'total' => 56472600,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan LBS Wilayah Jati Asih',
            'date' => '2021-03-31',
            'total' => 77291029,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu Portal & SUTR Tahap 2 Tahun 2021',
            'date' => '2021-04-23',
            'total' => 133005057,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan LBS Wilayah ULP Babelan',
            'date' => '2021-05-17',
            'total' => 85238358,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan Cut Out ULP Babelan',
            'date' => '2021-05-17',
            'total' => 89144583,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan Gardu Portal',
            'date' => '2021-05-17',
            'total' => 60381652,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTR untuk Potong Beban',
            'date' => '2021-05-17',
            'total' => 98889093,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SKTM DAN Gardu Kios Split 3C',
            'date' => '2021-06-20',
            'total' => 120085120,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Tidak ada project',
        //     'date' => '2021-06-30',
        //     'total' => 0,
        //     'transaction_type_id' => 1,
        //     'transaction_source_id' => 1,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pembangunan SKTM, SUTM, Gardu dan SUTR Tahap 3',
            'date' => '2021-07-01',
            'total' => 136309073,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan Gardu untuk potong beban G. KSA, SAHB, STMD DAN ARGG',
            'date' => '2021-08-09',
            'total' => 84275799,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu dan SUTR TAHAP 4',
            'date' => '2021-08-16',
            'total' => 111303284,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM dan Gardu Portal Pengadilan Negeri Bekasi',
            'date' => '2021-09-10',
            'total' => 88929253,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Tidak ada project',
        //     'date' => '2021-09-30',
        //     'total' => 0,
        //     'transaction_type_id' => 1,
        //     'transaction_source_id' => 1,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu dan SUTR TAHAP 5',
            'date' => '2021-10-26',
            'total' => 149138372,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        // DB::table('transactions')->insert([
        //     'transaction_name' => 'Tidak ada project',
        //     'date' => '2021-11-30',
        //     'total' => 0,
        //     'transaction_type_id' => 1,
        //     'transaction_source_id' => 1,
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner.create.approved',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan Gardu Listrik Keluharan Kota Baru Bekasi',
            'date' => '2021-11-12',
            'total' => 81109200,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, Gardu dan SUTR TAHAP 6',
            'date' => '2021-12-10',
            'total' => 205672015,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM Daerah Pasar Palmerah',
            'date' => '2021-12-10',
            'total' => 73349008,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        // ----------------------------------------------------------------------
        // no projects
        // ----------------------------------------------------------------------

        
       











        // ===============================================================================
        // Tahun 2022
        
        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SKTM, Gardu Tembok, Instalasi TM-TR, SKTR, DAN SUTR di Cluster Vranta - Tera Damai',
            'date' => '2022-01-28',
            'total' => 284600000,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM untuk peremajaan Jaringna P. Kencana',
            'date' => '2022-02-17',
            'total' => 16210333,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Penyambungan baru dan Jaringan VGR, Bongkar Pasang Tiang TR 1 Gawang, Tambahan 1 Tiang',
            'date' => '2022-02-21',
            'total' => 80750000,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Uprafting Trafo ULP Bekasi Kota',
            'date' => '2022-02-27',
            'total' => 5837507,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Perluasan JTM, JTR DAN Gardu Tahap 1',
            'date' => '2022-03-25',
            'total' => 221003356,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTM, SKTM, dan Gardu Portal Daerah Slipi',
            'date' => '2022-04-05',
            'total' => 166382900,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Perluasan JTM, JTR DAN Gardu Tahap 2',
            'date' => '2022-05-10',
            'total' => 96003356,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTR Pecah Beban ULP Bebelan Tahap 1',
            'date' => '2022-06-12',
            'total' => 122889001,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan Instalasi Stadion untuk keandalan AFF U19 2022',
            'date' => '2022-07-11',
            'total' => 14123327,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Perluasan JTM, JTR DAN Gardu Tahap 3',
            'date' => '2022-07-12',
            'total' => 178284966,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan Garsip Cantol 100 KVA ULP Bekasi Kota',
            'date' => '2022-07-27',
            'total' => 24487332,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTR Pemberatan ULP Bekasi Kota',
            'date' => '2022-08-02',
            'total' => 33812155,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTR Pemberatan ULP Medan Satria',
            'date' => '2022-08-02',
            'total' => 73724502,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Perluasan JTM, JTR, DAN Gardu Tahap 3 Tahun 2022',
            'date' => '2022-09-12',
            'total' => 129076908,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Uprafting Travo 250 kVA ULP Babelan Tahap 1',
            'date' => '2022-09-20',
            'total' => 12264112,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SKTM, Gardu Tembok, Instalasi TM-TR, SKTR, dan SUTR di Cluster Curtina - Tera Damai',
            'date' => '2022-10-12',
            'total' => 270625071,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SKTM Kabupaten Bekasi',
            'date' => '2022-11-07',
            'total' => 105115987,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Pemasangan SUTR Pecah Beban ULP Bebelan Tahap 2',
            'date' => '2022-12-03',
            'total' => 114115987,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Uprafting Travo 250 kVA ULP Babelan Tahap 2',
            'date' => '2022-12-25',
            'total' => 139271809,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);



        // ----------------------------------------------------------------------
        // no projects
        // ----------------------------------------------------------------------


        
    }
}
