<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use SplFixedArray;
use Mockery\Undefined;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionSource;
use Illuminate\Support\Facades\DB;
use App\Models\ProfitLossComponent;
use Illuminate\Support\Facades\Auth;
use Monolog\Handler\PushoverHandler;

class ReportController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
    return view('report.index', [
      'profitLossComponents' => ProfitLossComponent::all(),
      'transactionSources' => TransactionSource::all(),
      'filterMonth' => 0,
      'filterYear' => 0,
      'penghasilanNeto' => 0,
      'penghasilanNetoArr' => [],
      'totalPenghasilanNeto' => 0,
      'bebanPokokPenjualanArr' => [],
      'totalBebanPokokPenjualan' => 0,
      'bebanUsahaArr' => [],
      'totalBebanUsaha' => 0,
      'labaRugiBruto' => 0,
      'labaRugiUsaha' => 0,
      'labaRugiSebelumPajak' => 0,
      'pajakPenghasilan' => 0,
      'labaRugiNeto' => 0,

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

    // variable awal
    $user = Auth::user()->name;
    $filterMonth = $request->input('filterMonth');
    $filterYear = $request->input('filterYear');
    $transactionSource = TransactionSource::all();
    $profitLossComponent = ProfitLossComponent::all();

    foreach($profitLossComponent as $plc) {

      // Kalau componentnya penghasilan neto
      if($plc->profit_loss_component_name === 'Penghasilan Neto') {
        $penghasilanNetoArr = [];
        foreach($transactionSource as $ts) {

          // kalau transaction source -> component name nya penghasilan neto
          if($ts->profitLossComponent->profit_loss_component_name  === 'Penghasilan Neto') {

            $penghasilan = DB::table('transactions as t') 
              ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
              ->where('ts.transaction_source_name', '=', $ts->transaction_source_name)
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

              array_push($penghasilanNetoArr, $penghasilan);
          }
        }
        $totalPenghasilanNeto = array_sum($penghasilanNetoArr);
      }

      else if($plc->profit_loss_component_name === 'Beban Pokok Penjualan') {
        $bebanPokokPenjualanArr = [];
        foreach($transactionSource as $ts) {

          // kalau transaction source -> component name nya Beban Pokok Penjualan
          if($ts->profitLossComponent->profit_loss_component_name  === 'Beban Pokok Penjualan') {

            $beban = DB::table('transactions as t') 
            ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
            ->where('ts.transaction_source_name', '=', $ts->transaction_source_name)
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
            
            array_push($bebanPokokPenjualanArr, $beban);
          }
        }
        $totalBebanPokokPenjualan = array_sum($bebanPokokPenjualanArr);
      }

      else if($plc->profit_loss_component_name === 'Beban Usaha') {
        $bebanUsahaArr = [];
        foreach($transactionSource as $ts) {

          // kalau transaction source -> component name nya Beban Usaha
          if($ts->profitLossComponent->profit_loss_component_name  === 'Beban Usaha') {
            // var_dump($ts->transaction_source_name);

            $usaha = DB::table('transactions as t') 
            ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
            ->where('ts.transaction_source_name', '=', $ts->transaction_source_name)
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

            array_push($bebanUsahaArr, $usaha);
          }
        }
        $totalBebanUsaha = array_sum($bebanUsahaArr); 
      }

      else if($plc->profit_loss_component_name === 'Beban Lain - Lain') {
        $bebanLainArr = [];
        foreach($transactionSource as $ts) {

          // kalau transaction source -> component name nya Beban Lain Lain
          if($ts->profitLossComponent->profit_loss_component_name  === 'Beban Lain - Lain') {

            $bebanLain = DB::table('transactions as t') 
            ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
            ->where('ts.transaction_source_name', '=', $ts->transaction_source_name)
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

            array_push($bebanLainArr, $bebanLain);
          }
        }
        $totalBebanLain = array_sum($bebanLainArr); 
        
      }

    }

    // perhitungan laba rugi bruto
    $labaRugiBruto = $totalPenghasilanNeto - $totalBebanPokokPenjualan;

    // perhitungan laba rugi usaha
    $labaRugiUsaha = $labaRugiBruto - $totalBebanUsaha;

    // perhitungan laba rugi sebelum pajak
    $labaRugiSebelumPajak = $labaRugiUsaha - $totalBebanLain;

    // perhitungan pph
    $pajakPenghasilan = $labaRugiSebelumPajak >= 0 ? $labaRugiSebelumPajak * (50/100) * (22/100) : $labaRugiSebelumPajak * (1/100);
    
    // perhitungan laba rugi neto
    if($pajakPenghasilan >= 0) {
      $labaRugiNeto = $labaRugiSebelumPajak - $pajakPenghasilan;
    }else {
      $labaRugiNeto = $labaRugiSebelumPajak + $pajakPenghasilan;
    }
    


    // nama bulan bahasa indo
    $months = array (
      1 =>   'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
      );
      
      // buat nama bulan bahasa indonesia
      $separateMonths = explode('-', $filterMonth);
      if($filterMonth != null) {
        $monthAndYear = $months[ (int)$separateMonths[1] ] . ' ' . $separateMonths[0];
      }

    return view('report.index', [
      'profitLossComponents' => $profitLossComponent,
      'transactionSources' => $transactionSource,
      'filterMonth' => $filterMonth,
      'monthAndYear' => $filterMonth != null ? $monthAndYear : 0,
      'filterYear' => $filterYear,
      'penghasilanNetoArr' => $penghasilanNetoArr,
      'totalPenghasilanNeto' => $totalPenghasilanNeto,
      'bebanPokokPenjualanArr' => $bebanPokokPenjualanArr,
      'totalBebanPokokPenjualan' => $totalBebanPokokPenjualan,
      'bebanUsahaArr' => $bebanUsahaArr,
      'totalBebanUsaha' => $totalBebanUsaha,
      'bebanLainArr' => $bebanLainArr,
      'totalBebanLain' => $totalBebanLain,
      'labaRugiBruto' => $labaRugiBruto,
      'labaRugiUsaha' => $labaRugiUsaha,
      'labaRugiSebelumPajak' => $labaRugiSebelumPajak,
      'pajakPenghasilan' => $pajakPenghasilan,
      'labaRugiNeto' => $labaRugiNeto,
    ]);
  }


  public function chartIndex()
  {
      //
    return view('chart.index', 
      [
        'labaRugiTahunan' => [],
        'months' => [],
        'labaRugiPerTahun' => [],
        'years' => [], 
        'filterMonths' => '', 
        'filterOption' => ''
      ]
    );
  }

  public function chartFilter(Request $request)
  {
    $user = Auth::user()->name;

    $filterMonths = $request->input('filterMonths');
    $filterOption = $request->input('filterOption');

    // nama bulan
    $months = array (
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December'
      );

    // ------------------------ Chart Yearly ------------------------  //

    // -------------------------------- //
    // Penghasilan Neto
    $penghasilanNeto = DB::table('transactions as t')
      ->select(DB::raw("MONTH(t.date) as month"), DB::raw("CAST(SUM(total) as int) as penghasilanNeto"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->join('profit_loss_components as plc', 'ts.profit_loss_component_id', '=', 'plc.id')
      ->where('plc.profit_loss_component_name', '=', 'Penghasilan Neto')
      ->whereRaw("Year(date) = ".$filterMonths)
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
        ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
        ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
        ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("MONTH(date)"))
      ->pluck('penghasilanNeto', 'month');

    // buat array jadi 12, sama kaya bulan yg ada dalam 1 tahun
    $penghasilanNetoArr = [];
    $penghasilanNetoCollection = $penghasilanNeto->toArray();
    for ($i = 1; $i <= 12; $i++) {
      if(isset($penghasilanNetoCollection[$i]) === false) {
        array_push($penghasilanNetoArr, 0);
      }else {
        array_push($penghasilanNetoArr, $penghasilanNetoCollection[$i]);
      }
    }

    // -------------------------------- //
    // Beban Pokok Penjualan
    $bebanPokokPenjualan = DB::table('transactions as t')
      ->select(DB::raw("MONTH(t.date) as month"), DB::raw("CAST(SUM(total) as int) as bebanPokokPenjualan"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->join('profit_loss_components as plc', 'ts.profit_loss_component_id', '=', 'plc.id')
      ->where('plc.profit_loss_component_name', '=', 'Beban Pokok Penjualan')
      ->whereRaw("Year(date) = ".$filterMonths)
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("MONTH(t.date)"))
      ->pluck('bebanPokokPenjualan', 'month');

    // buat array jadi 12, sama kaya bulan yg ada dalam 1 tahun
    $bebanPokokPenjualanArr = [];
    $bebanPokokPenjualanCollection = $bebanPokokPenjualan->toArray();
    for ($i = 1; $i <= 12; $i++) {
      if(isset($bebanPokokPenjualanCollection[$i]) === false) {
        array_push($bebanPokokPenjualanArr, 0);
      }else {
        array_push($bebanPokokPenjualanArr, $bebanPokokPenjualanCollection[$i]);
      }
    }

    // -------------------------------- //
    // laba rugi bruto 
    // $penghasilanNetoMinusBebanPokokPenjualan = array_map(function ($x, $y) { return $y-$x; } , $bebanPokokPenjualanCollection, $penghasilanNetoCollection);
    $penghasilanNetoMinusBebanPokokPenjualan = array_map(function ($x, $y) { return $y-$x; } , $bebanPokokPenjualanArr, $penghasilanNetoArr);
    $labaRugiBruto = array_combine(array_keys($penghasilanNetoArr), $penghasilanNetoMinusBebanPokokPenjualan);
    
    // -------------------------------- //
    // Beban usaha 
    $bebanUsaha = DB::table('transactions as t')        
      ->select(DB::raw("MONTH(t.date) as month"), DB::raw("CAST(SUM(total) as int) as bebanUsaha"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->join('profit_loss_components as plc', 'ts.profit_loss_component_id', '=', 'plc.id')
      ->where('plc.profit_loss_component_name', '=', 'Beban Usaha')
      ->whereRaw("Year(date) = ".$filterMonths)
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("MONTH(t.date)"))
      ->pluck('bebanUsaha', 'month');

    // buat array jadi 12, sama kaya bulan yg ada dalam 1 tahun
    $bebanUsahaArr = [];
    $bebanUsahaCollection = $bebanUsaha->toArray();
    for ($i = 1; $i <= 12; $i++) {
      if(isset($bebanUsahaCollection[$i]) === false) {
        array_push($bebanUsahaArr, 0);
      }else {
        array_push($bebanUsahaArr, $bebanUsahaCollection[$i]);
      }
    }

    // -------------------------------- //
    // laba rugi usaha
    // $labaRugiBrutoMinusBebanUsaha = array_map(function ($x, $y) { return $y-$x; } , $bebanUsahaCollection, $labaRugiBruto);
    $labaRugiBrutoMinusBebanUsaha = array_map(function ($x, $y) { return $y-$x; } , $bebanUsahaArr, $labaRugiBruto);
    $labaRugiUsaha     = array_combine(array_keys($labaRugiBruto), $labaRugiBrutoMinusBebanUsaha);


    // -------------------------------- //
    // Beban lain lain
    
    $bebanLain = DB::table('transactions as t')        
      ->select(DB::raw("MONTH(t.date) as month"), DB::raw("CAST(SUM(total) as int) as bebanLain"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->join('profit_loss_components as plc', 'ts.profit_loss_component_id', '=', 'plc.id')
      ->where('plc.profit_loss_component_name', '=', 'Beban Lain - Lain')
      ->whereRaw("Year(date) = ".$filterMonths)
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
        ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
        ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
        ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("MONTH(t.date)"))
      ->pluck('bebanLain', 'month');

    // buat array jadi 12, sama kaya bulan yg ada dalam 1 tahun
    $bebanLainArr = [];
    $bebanLainCollection = $bebanLain->toArray();
    for ($i = 1; $i <= 12; $i++) {
      if(isset($bebanLainCollection[$i]) === false) {
        array_push($bebanLainArr, 0);
      }else {
        array_push($bebanLainArr, $bebanLainCollection[$i]);
      }
    }

    // -------------------------------- //    
    // Laba rugi sebelum pajak
    $labaRugiUsahaMinusBebanLain = array_map(function ($x, $y) { return $y-$x; } , $bebanLainArr, $labaRugiUsaha);
    $labaRugiSebelumPajak = array_combine(array_keys($labaRugiUsaha), $labaRugiUsahaMinusBebanLain);

    // -------------------------------- //
    // pph
    $pajakPenghasilan = array_map(function ($x) { 
      if($x < 0) {
        return $x * (-1/100);
      }else {
        return $x * (50/100) * (22/100); 
      }
    } , $labaRugiSebelumPajak);


    // -------------------------------- //
    // laba rugi tahunan
    $labaRugiSebelumPajakMinusPajakPenghasilan = array_map(function ($x, $y) { return $y-$x; } , $pajakPenghasilan, $labaRugiSebelumPajak);
    $labaRugiTahunan     = array_combine(array_keys($labaRugiSebelumPajak), $labaRugiSebelumPajakMinusPajakPenghasilan);
   




    // ------------------------ Chart Annually ------------------------ //

    // buat tau tahun berapa aja yg ada transaksi
    $years = Transaction::select(DB::raw("YEAR(date) as year"))
      ->GroupBy(DB::raw("YEAR(date)"))
      ->OrderBy(DB::raw("YEAR(date)"), 'ASC')
      ->pluck('year');

      $yearsCollection = $years->toArray();      

    // penghasilan neto per tahun
    $penghasilanNetoPerTahun = DB::table('transactions as t')
      ->select(DB::raw("YEAR(t.date) as year"), DB::raw("CAST(SUM(total) as int) as penghasilanNetoPerTahun"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->join('profit_loss_components as plc', 'ts.profit_loss_component_id', '=', 'plc.id')
      ->where('plc.profit_loss_component_name', '=', 'Penghasilan Neto')
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
          ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
          ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("YEAR(date)"))
      ->pluck('penghasilanNetoPerTahun', 'year');

    $penghasilanNetoPerTahunArr = [];
    $penghasilanNetoPerTahunCollection = $penghasilanNetoPerTahun->toArray();

    for($i = $yearsCollection[0]; $i <= $yearsCollection[sizeof($yearsCollection) - 1]; $i++) {
      if(isset($penghasilanNetoPerTahunCollection[$i]) === false) {
        array_push($penghasilanNetoPerTahunArr, 0);
      }else {
        array_push($penghasilanNetoPerTahunArr, $penghasilanNetoPerTahunCollection[$i]);
      }
    }

    
    // beban pokok penjualan per tahun
    $bebanPokokPenjualanPerTahun = DB::table('transactions as t')
      ->select(DB::raw("YEAR(t.date) as year"), DB::raw("CAST(SUM(total) as int) as bebanPokokPenjualanPerTahun"))
      ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
      ->join('profit_loss_components as plc', 'ts.profit_loss_component_id', '=', 'plc.id')
      ->where('plc.profit_loss_component_name', '=', 'Beban Pokok Penjualan')
      ->where(function($query) use ($user) {
        $query->where('updated_by', 'LIKE', 'owner.create.approved')
        ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
        ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
        ->orWhere('updated_by', 'LIKE', $user.'.delete');
      })
      ->GroupBy(DB::raw("YEAR(t.date)"))
      ->pluck('bebanPokokPenjualanPerTahun', 'year');  
      
    $bebanPokokPenjualanPerTahunArr = [];
    $bebanPokokPenjualanPerTahunCollection = $bebanPokokPenjualanPerTahun->toArray();
    
    for($i = $yearsCollection[0]; $i <= $yearsCollection[sizeof($yearsCollection) - 1]; $i++) {
      if(isset($bebanPokokPenjualanPerTahunCollection[$i]) === false) {
        array_push($bebanPokokPenjualanPerTahunArr, 0);
      }else {
        array_push($bebanPokokPenjualanPerTahunArr, $bebanPokokPenjualanPerTahunCollection[$i]);
      }
    }
      

    // laba rugi bruto per tahun
    $penghasilanNetoMinusBebanPokokPenjualanPerTahun = 
      array_map(function ($x, $y) { 
        return $y-$x; 
      }, 
      $bebanPokokPenjualanPerTahunArr, 
      $penghasilanNetoPerTahunArr
      );
    
    $labaRugiBrutoPerTahun = 
    array_combine(array_keys($penghasilanNetoPerTahunArr), $penghasilanNetoMinusBebanPokokPenjualanPerTahun);
        
    // beban usaha per tahun
    $bebanUsahaPerTahun = DB::table('transactions as t')        
    ->select(DB::raw("YEAR(t.date) as year"), DB::raw("CAST(SUM(total) as int) as bebanUsahaPerTahun"))
    ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
    ->join('profit_loss_components as plc', 'ts.profit_loss_component_id', '=', 'plc.id')
    ->where('plc.profit_loss_component_name', '=', 'Beban Usaha')
    ->where(function($query) use ($user) {
      $query->where('updated_by', 'LIKE', 'owner.create.approved')
      ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
      ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
      ->orWhere('updated_by', 'LIKE', $user.'.delete');
    })
    ->GroupBy(DB::raw("YEAR(t.date)"))
    ->pluck('bebanUsahaPerTahun', 'year');
    
    $bebanUsahaPerTahunArr = [];
    $bebanUsahaPerTahunCollection = $bebanUsahaPerTahun->toArray();
    
    for($i = $yearsCollection[0]; $i <= $yearsCollection[sizeof($yearsCollection) - 1]; $i++) {
      if(isset($bebanUsahaPerTahunCollection[$i]) === false) {
        array_push($bebanUsahaPerTahunArr, 0);
      }else {
        array_push($bebanUsahaPerTahunArr, $bebanUsahaPerTahunCollection[$i]);
      }
    }

    
    // laba rugi usaha
    $labaRugiBrutoMinusBebanUsahaPerTahun = 
    array_map(function ($x, $y) { 
        return $y-$x; 
      }, 
      $bebanUsahaPerTahunArr, 
      $labaRugiBrutoPerTahun
    );
    
    $labaRugiUsahaPerTahun = 
    array_combine(array_keys($labaRugiBrutoPerTahun), $labaRugiBrutoMinusBebanUsahaPerTahun);
    
    
    // Beban lain lain per tahun
    $bebanLainPerTahun = DB::table('transactions as t')
    ->select(DB::raw("YEAR(t.date) as year"), DB::raw("CAST(SUM(total) as int) as bebanLain"))
    ->join('transaction_sources as ts', 't.transaction_source_id', '=', 'ts.id')
    ->join('profit_loss_components as plc', 'ts.profit_loss_component_id', '=', 'plc.id')
    ->where('plc.profit_loss_component_name', '=', 'Beban Lain - Lain')
    ->where(function($query) use ($user) {
      $query->where('updated_by', 'LIKE', 'owner.create.approved')
      ->orWhere('updated_by', 'LIKE', 'owner.edit.approved')
      ->orWhere('updated_by', 'LIKE', 'owner.delete.rejected')
      ->orWhere('updated_by', 'LIKE', $user.'.delete');
    })
    ->GroupBy(DB::raw("YEAR(date)"))
    ->pluck('bebanLain', 'year');
    
    $bebanLainPerTahunArr = [];
    $bebanLainPerTahunCollection = $bebanLainPerTahun->toArray();
    
    for($i = $yearsCollection[0]; $i <= $yearsCollection[sizeof($yearsCollection) - 1]; $i++) {
      if(isset($bebanLainPerTahunCollection[$i]) === false) {
        array_push($bebanLainPerTahunArr, 0);
      }else {
        array_push($bebanLainPerTahunArr, $bebanLainPerTahunCollection[$i]);
      }
    }
    

    // -------------------------------- //    
    // Laba rugi sebelum pajak
    $labaRugiUsahaMinusBebanLainPerTahun = 
      array_map(function ($x, $y) { 
        return $y-$x; 
      }, 
        $bebanLainPerTahunArr, 
        $labaRugiUsahaPerTahun
      );
    $labaRugiSebelumPajakPerTahun = array_combine(array_keys($labaRugiUsahaPerTahun), $labaRugiUsahaMinusBebanLainPerTahun);


    // pph per tahun
    $pphPerTahun = array_map(function ($x) { 
      if($x < 0) {
        return $x * (-1/100);
      }else {
        return $x * (50/100) * (22/100); 
      }
    } , $labaRugiSebelumPajakPerTahun);


    // Laba rugi neto per tahun
    $labaRugiSebelumPajakMinusPphPerTahun = 
      array_map(function ($x, $y) { 
        return $y-$x; 
      }, 
        $pphPerTahun, 
        $labaRugiSebelumPajakPerTahun
      );

    $labaRugiPerTahun = array_combine(array_keys($labaRugiSebelumPajakPerTahun), $labaRugiSebelumPajakMinusPphPerTahun);

    return view('chart.index', 
      compact(
        'labaRugiTahunan',
        'months',
        'labaRugiPerTahun',
        'years', 
        'filterMonths', 
        'filterOption'
      ) 
    );
  }
}



