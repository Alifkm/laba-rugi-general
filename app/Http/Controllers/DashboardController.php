<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mockery\Undefined;

class DashboardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
    return view('dashboard/index', [
      'filterMonth' => 0,
      'filterYear' => 0,
      'penghasilanNeto' => 0,
      'gajiKaryawan' => 0,
      'material' => 0,
      'pembayaranLainClient' => 0,
      'bebanPokok' => 0,
      'labaBruto' => 0,
      'penyusutan' => 0,
      'transportasi' => 0,
      'pemeliharaan' => 0,
      'dokumen' => 0,
      'listrikTelepon' => 0,
      'kantor' => 0,
      'pembayaranLain' => 0,
      'bebanUsaha' =>  0,
      'labaUsaha' => 0,
      'pph' => 0
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }


  public function filter(Request $request)
  {
      
      // $request->validate([
      //     'filterMonth' => ['required']
      // ]); 

    $user = Auth::user()->name;

    $filterMonth = $request->input('filterMonth');
    $filterYear = $request->input('filterYear');
      
    $penghasilanNeto = Transaction::where('transaction_type_id', 'like', 1)
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
        ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->sum('total');

    $gajiKaryawan = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'gaji karyawan')
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->sum('t.total');
    
    $material = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'pembelian material')
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->sum('t.total');

    $pembayaranLainCLient = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'pembayaran lainnya untuk client')
      ->when($filterYear, function($query, $filterYear) {
              return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
              $year = explode('-', $filterMonth)[0];
              $month = explode('-', $filterMonth)[1];
              return $query->whereMonth('date', $month)
              ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
              $query->where('updated_by', 'LIKE', 'owner.create.approved')
                      ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
                      ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
                      ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->sum('t.total');

    $bebanPokok = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) {
        $query->where('ts.transaction_source_name', 'LIKE', 'pembelian material')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'gaji karyawan')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'pembayaran lainnya untuk client');
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->sum('t.total');

    $penyusutan = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'penyusutan')
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      }) 
      ->sum('t.total');

    $transportasi = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'transportasi')
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      }) 
      ->sum('t.total');

    $pemeliharaan = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'pemeliharaan')
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      }) 
      ->sum('t.total');

    $dokumen = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'dokumen')
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      }) 
      ->sum('t.total');

    $kantor = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'kantor')
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      }) 
      ->sum('t.total');

    $listrikTelepon = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'listrik dan telepon')
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
        ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      }) 
      ->sum('t.total');

    $pembayaranLain = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where('ts.transaction_source_name', 'LIKE', 'operasional lainnya')
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      }) 
      ->sum('t.total');

    $bebanUsaha = DB::table('transactions as t')
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->when($filterYear, function($query, $filterYear) {
        return $query->whereYear('date', $filterYear);
      })
      ->when($filterMonth, function($query, $filterMonth) {
        $year = explode('-', $filterMonth)[0];
        $month = explode('-', $filterMonth)[1];
        return $query->whereMonth('date', $month)
          ->whereYear('date', $year);
      })
      ->where(function($query) {
        $query->where('ts.transaction_source_name', 'LIKE', 'penyusutan')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'transportasi')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'pemeliharaan')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'dokumen')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'listrik dan telepon')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'kantor')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'operasional lainnya');
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->sum('t.total');

      $labaBruto = $penghasilanNeto - $bebanPokok;
      $labaUsaha = $labaBruto - $bebanUsaha;
      $pph = $labaUsaha > 0 ? $labaUsaha * (50/100) * (22/100) : $labaUsaha * (1/100);

      return view('dashboard/index', [
        'filterMonth' => $filterMonth,
        'filterYear' => $filterYear,
        'penghasilanNeto' => $penghasilanNeto,
        'gajiKaryawan' => $gajiKaryawan,
        'material' => $material,
        'pembayaranLainClient' => $pembayaranLainCLient,
        'bebanPokok' =>  $bebanPokok,
        'labaBruto' => $labaBruto,
        'penyusutan' => $penyusutan,
        'transportasi' => $transportasi,
        'pemeliharaan' => $pemeliharaan,
        'dokumen' => $dokumen,
        'listrikTelepon' => $listrikTelepon,
        'kantor' => $kantor,
        'pembayaranLain' => $pembayaranLain,
        'bebanUsaha' =>  $bebanUsaha,
        'labaUsaha' => $labaUsaha,
        'pph' => $pph
      ]);
  }


  public function chartIndex()
  {
      //
    return view('chart/index', 
      [
        'filterMonths' => '',
        'filterOption' => '',
        'totalLaba' => 0, 
        'totalLabaYear' => 0, 
        'month' => 0, 
        'year' => 0
      ]
    );
  }



  public function chartFilter(Request $request)
  {
    $user = Auth::user()->name;

    $filterMonths = $request->input('filterMonths');
    $filterOption = $request->input('filterOption');

    $monthCollection = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "Desember"
    ];

    $income = Transaction::select(DB::raw("CAST(SUM(total) as int) as totalMonth"))
      ->whereRaw("Year(date) = ".$filterMonths)
      ->where('transaction_type_id', 'like', 1)
      ->GroupBy(DB::raw("MONTH(date)"))
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->pluck('totalMonth');

    $bebanPokok = DB::table('transactions as t')
      ->select(DB::raw("CAST(SUM(total) as int) as bebanPokok"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->whereRaw("Year(date) = ".$filterMonths)
      ->where(function($query) {
        $query->where('ts.transaction_source_name', 'LIKE', 'pembelian material')
        ->orWhere('ts.transaction_source_name', 'LIKE', 'gaji karyawan')
        ->orWhere('ts.transaction_source_name', 'LIKE', 'pembayaran lainnya untuk client');
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("MONTH(t.date)"))
      ->pluck('bebanPokok');



    $incomeCollection = $income->toArray();
    $bebanPokokCollection = $bebanPokok->toArray();

    $incomeMinBebanPokok = array_map(function ($x, $y) { return $y-$x; } , $bebanPokokCollection, $incomeCollection);
    // dd( $bebanPokokCollection, $incomeCollection, $incomeMinBebanPokok );
    $labaBruto     = array_combine(array_keys($incomeCollection), $incomeMinBebanPokok);


    $bebanUsaha = DB::table('transactions as t')        
      ->select(DB::raw("CAST(SUM(total) as int) as bebanUsaha"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->whereRaw("Year(date) = ".$filterMonths)
      ->where(function($query) {
        $query->where('ts.transaction_source_name', 'LIKE', 'penyusutan')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'transportasi')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'pemeliharaan')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'dokumen')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'listrik dan telepon')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'kantor')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'operasional lainnya');
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("MONTH(t.date)"))
      ->pluck('bebanUsaha');

    $bebanUsahaCollection = $bebanUsaha->toArray();

    $labaBrutoMinBebanUsaha = array_map(function ($x, $y) { return $y-$x; } , $bebanUsahaCollection, $labaBruto);
    $labaUsaha     = array_combine(array_keys($labaBruto), $labaBrutoMinBebanUsaha);

    $pph = array_map(function ($x) { 
      if($x < 0) {
        return $x * (-1/100);
      }else {
        return $x * (50/100) * (22/100); 
      }
    } , $labaUsaha);



    // $pph = array_map(function ($x) { 
    //   return $x * (50/100) * (22/100); 
    // } , $labaUsaha);

    $labaUsahaMinPph = array_map(function ($x, $y) { return $y-$x; } , $pph, $labaUsaha);
    $totalLaba     = array_combine(array_keys($labaUsaha), $labaUsahaMinPph);

    $incomeYear = Transaction::select(DB::raw("CAST(SUM(total) as int) as totalYear"))
      ->where('transaction_type_id', 'like', 1)
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("YEAR(date)"))
      ->pluck('totalYear');

    $bebanPokokYear = DB::table('transactions as t')
      ->select(DB::raw("CAST(SUM(total) as int) as bebanPokokYear"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where(function($query) {
        $query->where('ts.transaction_source_name', 'LIKE', 'pembelian material')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'gaji karyawan')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'pembayaran lainnya untuk client');
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("YEAR(t.date)"))
      ->pluck('bebanPokokYear');

    $incomeYearCollection = $incomeYear->toArray();
    $bebanPokokYearCollection = $bebanPokokYear->toArray();

    $incomeYearMinBebanPokokYear = array_map(function ($x, $y) { return $y-$x; } , $bebanPokokYearCollection, $incomeYearCollection);
    $labaBrutoYear     = array_combine(array_keys($incomeYearCollection), $incomeYearMinBebanPokokYear);

    $bebanUsahaYear = DB::table('transactions as t')        
      ->select(DB::raw("CAST(SUM(total) as int) as bebanUsahaYear"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->where('transaction_type_id', 'like', 2)
      ->where(function($query) {
        $query->where('ts.transaction_source_name', 'LIKE', 'penyusutan')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'transportasi')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'pemeliharaan')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'dokumen')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'listrik dan telepon')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'kantor')
          ->orWhere('ts.transaction_source_name', 'LIKE', 'operasional lainnya');
      })
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
    ->GroupBy(DB::raw("YEAR(t.date)"))
      ->pluck('bebanUsahaYear');

    $bebanUsahaYearCollection = $bebanUsahaYear->toArray();

    $labaBrutoYearMinBebanUsahaYear = array_map(function ($x, $y) { return $y-$x; } , $bebanUsahaYearCollection, $labaBrutoYear);
    $labaUsahaYear     = array_combine(array_keys($labaBrutoYear), $labaBrutoYearMinBebanUsahaYear);

    $pphYear = array_map(function ($x) { 
      if($x < 0) {
        return $x * (-1/100);
      }else {
        return $x * (50/100) * (22/100); 
      }
    } , $labaUsahaYear);

    // $pphYear = array_map(function ($x) { 
    //   return $x * (50/100) * (22/100); 
    // } , $labaUsahaYear);

    $labaUsahaYearMinPphYear = array_map(function ($x, $y) { return $y-$x; } , $pphYear, $labaUsahaYear);
    $totalLabaYear     = array_combine(array_keys($labaUsahaYear), $labaUsahaYearMinPphYear);


    $totalMonth = Transaction::select(DB::raw("CAST(SUM(total) as int) as totalMonth"))
      ->where('transaction_type_id', 'like', 1)
      ->whereRaw("Year(date) = ".$filterMonths)
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("MONTH(date)"))
      ->pluck('totalMonth');

    // dd($totalMonth);

    $totalYear = Transaction::select(DB::raw("CAST(SUM(total) as int) as totalYear"))
      ->where('transaction_type_id', 'like', 1)
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("YEAR(date)"))
      ->pluck('totalYear');

    $month = Transaction::select(DB::raw("MONTHNAME(date) as month"))
      ->where('transaction_type_id', 'like', 1)
      ->whereRaw("Year(date) = ".$filterMonths)
      ->GroupBy(DB::raw("MONTHNAME(date)"))
      ->OrderBy(DB::raw("MONTH(date)"), 'ASC')
      ->pluck('month');

    $year = Transaction::select(DB::raw("YEAR(date) as year"))
      ->where('transaction_type_id', 'like', 1)
      ->GroupBy(DB::raw("YEAR(date)"))
      ->OrderBy(DB::raw("YEAR(date)"), 'ASC')
      ->pluck('year');

    return view('chart/index', compact('totalLaba', 'totalLabaYear', 'month', 'year', 'filterMonths', 'filterOption') );
  }
}



