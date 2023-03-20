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
            'transaction_name' => 'PEMASANGAN SKTM, SUTM, GARDU PORTAL & SUTR PB PT. ALAMINDO TRULYNUSA',
            'date' => '2020-01-20',
            'total' => 41026629,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, & GARDU PORTAL PB PT. ADHI PERSADA GEDUNG',
            'date' => '2020-01-20',
            'total' => 40628548,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTR, PB SARI BUDI ASIH',
            'date' => '2020-01-24',
            'total' => 29133131,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTR, PB SURADI',
            'date' => '2020-01-24',
            'total' => 30517883,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU CANTOL & SUTR PB PT. SOUBER WIJAYA SAKTI',
            'date' => '2020-01-24',
            'total' => 48529188,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB PERUM SRIMUKTI RESIDENCE',
            'date' => '2020-01-24',
            'total' => 51330939,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB PT. PERMATA INDAH CIPTA GRAHA',
            'date' => '2020-02-07',
            'total' => 52920393,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB. MUSLIM CAHAYA PURNAMA',
            'date' => '2020-02-11',
            'total' => 45409401,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM & GARDU PORTAL PB UNIVERSITAS BHAYANGKARA',
            'date' => '2020-02-18',
            'total' => 36302766,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTR, PB ADANG',
            'date' => '2020-03-03',
            'total' => 34349680,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU PORTAL DAN SUTR PB NURHASAN',
            'date' => '2020-03-13',
            'total' => 35199170,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, & GARDU CANTOL PB APIPUDIN',
            'date' => '2020-03-17',
            'total' => 41565481,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
        
        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2020-04-30',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTH, & GARDU CANTOL PERSADA',
            'date' => '2020-05-31',
            'total' => 19230860,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2020-06-30',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2020-07-31',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C & SUTR PB KEJAKSAAN NEGERI BEKASI',
            'date' => '2020-08-04',
            'total' => 58609133,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR TAHAP 1 PT. BUKILLA',
            'date' => '2020-09-12',
            'total' => 58522726,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU CANTOL & SUTR PB ISOL',
            'date' => '2020-10-23',
            'total' => 66191365,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SKTM DAN GARDU KIOS SPLIT 3C PB YAYASAN ATTAQWA',
            'date' => '2020-11-27',
            'total' => 96986096,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR TAHAP 3 PT. BUKILLA',
            'date' => '2020-12-07',
            'total' => 93595268 ,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        
        DB::table('transactions')->insert([
            'transaction_name' => 'PEKERJAAN PENINGGIAN PHBTR YANG TERKENA DAMPAK BANJIR WILAYAH ULP BABELAN',
            'date' => '2020-12-30',
            'total' => 254821788,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEKERJAAN PENINGGIAN KUBIKEL SPLIT 3C UNIS, GKJB, PL 102, PL 112 TERDAMPAK BANJIR WILAYAH ULP BEKASI KOTA',
            'date' => '2020-12-30',
            'total' => 70975020,
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
            'transaction_name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR TAHAP 1 PT. BUKILLA',
            'date' => '2021-01-25',
            'total' => 93377438,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2021-02-28',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2021-03-31',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR TAHAP 2 Tahun 2021 PT. BUKILLA',
            'date' => '2021-04-23',
            'total' => 132005057,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN LBS WILAYAH ULP BABELAN',
            'date' => '2021-05-17',
            'total' => 86238358,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN CUT OUT WILAYAH ULP BABELAN',
            'date' => '2021-05-17',
            'total' => 88144583,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN GARDU PORTAL',
            'date' => '2021-05-17',
            'total' => 94381652,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTR UNTUK POTONG BEBAN',
            'date' => '2021-05-17',
            'total' => 97889093,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SKTM DAN GARDU KIOS SPLIT 3C',
            'date' => '2021-05-17',
            'total' => 121085120,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2021-06-30',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM DAN GARDU PORTAL PENGADILAN NEGERI BEKASI',
            'date' => '2021-07-01',
            'total' => 89929253,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMBANGUNAN SKTM, SUTM, GARDU DAN SUTR TAHAP 3 PT. BUKILLA MANDIRI',
            'date' => '2021-07-01',
            'total' => 135309073,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN GARDU UNTUK POTONG BEBAN G. KSA, SAHB, STMD DAN ARGG',
            'date' => '2021-08-09',
            'total' => 105275799,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU DAN SUTR TAHAP 4 PT. BUKILLA MANDIRI',
            'date' => '2021-08-16',
            'total' => 170303284,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2021-09-30',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU DAN SUTR TAHAP 5 PT. BUKILLA MANDIRI',
            'date' => '2021-10-26',
            'total' => 180138372,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2021-11-30',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM, GARDU DAN SUTR TAHAP 6 PT. BUKILLA MANDIRI',
            'date' => '2021-12-10',
            'total' => 204672015,
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
            'transaction_name' => 'PEMASANGAN SKTM, GARDU TEMBOK, INSTALASI TM-TR, SKTR, DAN SUTR DI CLUSTER VRANTA - TERA DAMAI',
            'date' => '2022-01-28',
            'total' => 383600000,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTM UNTUK PEREMAJAAN JARINGAN P. KENCANA',
            'date' => '2022-02-17',
            'total' => 17310333,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PENYAMBUNGAN BARU DAN JARINGAN VGR, BONGKAR PASANG TIANG TR 1 GAWANG, TAMBAHAN 1 TIANG',
            'date' => '2022-02-21',
            'total' => 79750000,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'UPRATING TRAFO ULP BEKASI KOTA',
            'date' => '2022-02-27',
            'total' => 6837507,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PERLUASAN JTM, JTR DAN GARDU TAHAP 1 TAHUN 2022 PT. BUKILLA MANDIRI',
            'date' => '2022-03-25',
            'total' => 350003356,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2022-04-30',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2022-05-31',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2022-06-30',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);


        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN INSTALASI STADION UNTUK KEANDALAN AFF U19 2022',
            'date' => '2022-07-11',
            'total' => 23123327,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PERLUASAN JTM, JTR DAN GARDU TAHAP 2 TAHUN 2022 PT. BUKILLA MANDIRI',
            'date' => '2022-07-12',
            'total' => 329284966,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN GARSIP CANTOL 100 KVA ULP BEKASI KOTA',
            'date' => '2022-07-27',
            'total' => 23487332,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTR PEMBERATAN ULP BEKASI KOTA',
            'date' => '2022-08-02',
            'total' => 25812155,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTR PEMBERATAN ULP MEDAN SATRIA',
            'date' => '2022-08-02',
            'total' => 25524502,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PERLUASAN JTM, JTR, DAN GARDU TAHAP 3 TAHUN 2022 PT. BUKILLA MANDIRI',
            'date' => '2022-09-12',
            'total' => 130076908,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'UPRATING TRAFO 250 kVA ULP BABELAN',
            'date' => '2022-09-20',
            'total' => 11264112,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SKTM, GARDU TEMBOK, INSTALASI TM-TR, SKTR, DAN SUTR DI CLUSTER CURTINA - TERA DAMAI',
            'date' => '2022-10-12',
            'total' => 441625071,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2023-01-20',
            'updated_at' => '2023-01-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'Tidak ada project',
            'date' => '2022-11-30',
            'total' => 0,
            'transaction_type_id' => 1,
            'transaction_source_id' => 1,
            'created_by' => 'admin1',
            'updated_by' => 'owner.create.approved',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('transactions')->insert([
            'transaction_name' => 'PEMASANGAN SUTR PECAH BEBAN ULP BABELAN TAHAP 2',
            'date' => '2022-12-26',
            'total' => 78115987,
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
