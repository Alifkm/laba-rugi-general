<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionSource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transaction = Transaction::get()->where('transaction_type_id', 'like', 2);
        if($request->ajax()) {
            return datatables()->of($transaction)
                    ->addColumn('action', function($transaction){
                        
                        return view('outcome.action', ['transaction' => $transaction]);
                    })
                    ->addColumn('source', function($transaction){
                        
                        return $transaction->transactionSources->transaction_source_name;
                    })
                    ->addColumn('total', function($transaction){
                        
                        return 'Rp' . number_format($transaction->total , 0, ',', '.');
                    })
                    ->addColumn('status', function($transaction){
                        
                        if($transaction -> updated_by == 'owner.create.approved' || $transaction -> updated_by == 'owner.edit.approved'){
                            $status = '<span class="text-success fw-bold">Approved</span>';
                        }else if($transaction -> updated_by == 'owner.create.rejected'){
                            $status = '<span class="text-danger fw-bold">Need revision</span>';
                        }else if($transaction -> updated_by == 'owner.edit.rejected'){
                            $status = '<span class="text-danger fw-bold">Need revision</span>';
                        }else if($transaction -> updated_by == 'owner.delete.rejected'){
                            $status = '<span class="text-danger fw-bold">Delete rejected</span>';
                        }
                        else {
                            $status = 'Waiting approval to '.explode( '.', $transaction -> updated_by)[1].'';    
                        }
                        
                        return $status;
                    })
                    ->addColumn('date', function ($transaction) {
                
                        $mydate = strtotime($transaction->date);
                        $newformat = date('d M Y',$mydate);
                        return '<td data-sort="'. $mydate .'">'.$newformat .'</td>';
                    })
                    ->addIndexColumn()
                    ->rawColumns(['action', 'status', 'date'])
                    ->make(true);
          }
          
          return view('outcome.index',[
            'user' => auth()->user()->adminType->admin_type_name
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
        $transactionSources = DB::table('transaction_sources as ts')
        ->join('profit_loss_components as plc', 'plc.id', '=', 'ts.profit_loss_component_id')
        ->where('plc.profit_loss_component_name', 'NOT LIKE', 'Penghasilan Neto')
        ->get();

        return view('outcome.create', [
            'sources' => $transactionSources
        ]);

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
        $request->validate([
            'transaction_name' => 'required',
            'transaction_source_id' => 'required',
            'date' => 'required',
            'total' => 'required'
        ]); 

        $user = Auth::user();
        if(auth()->user()->adminType->admin_type_name != 'superAdmin'){
            $up = $user -> name.'.create';
        }else{
            $up = $user -> name;
        }

        $res = str_replace( '.', '', $request -> total);

        Transaction::create([
            'transaction_name' => $request->transaction_name,
            'transaction_type_id' => 2,
            'transaction_source_id' => $request->transaction_source_id,
            'date' => $request->date,
            'total' => $res,
            'created_by' =>  $user->name,
            'updated_by' => $up
        ]);
        
        return redirect('/outcome')->with('message', 'Create request for Outcome ' . $request['transaction_name'] . ' sent successfully!');
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
        $transactionSources = DB::table('transaction_sources as ts')
        ->join('profit_loss_components as plc', 'plc.id', '=', 'ts.profit_loss_component_id')
        ->where('plc.profit_loss_component_name', 'NOT LIKE', 'Penghasilan Neto')
        ->get();

        return view('outcome.edit', [
            'outcome' => Transaction::where('id', 'like', $id)->first(),
            'sources' => $transactionSources
        ]);
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
        $request->validate([
            'transaction_name' => 'required',
            'transaction_source_id' => 'required',
            'date' => 'required',
            'total' => 'required'
        ]); 

        $outcome = Transaction::where('id', 'like', $id)->first();

        $user = Auth::user();
        if(auth()->user()->adminType->admin_type_name != 'superAdmin'){
            $up = $user -> name.'.edit';
        }else{
            $up = $user -> name;
        }

        $res = str_replace( '.', '', $request -> total);

        $outcome->update([
            'transaction_name' => $request->transaction_name,
            'transaction_type_id' => 2,
            'transaction_source_id' => $request->transaction_source_id,
            'date' => $request->date,
            'total' => $res,
            'updated_by' => $up
        ]);

        return redirect('/outcome')->with('message', 'Update request for Outcome ' . $request['transaction_name'] . ' sent successfully!');
    }

    public function requestDelete(Request $req)
    {
        $user = Auth::user();
        if(auth()->user()->adminType->admin_type_name != 'superAdmin'){
            $up = $user -> name.'.delete';
        }else{
            $up = $user -> name;
        }

        if($user -> name == 'owner'){
            $deleted = Transaction::where('id', 'like', $req ->id)->delete();
            return redirect('/outcome')->with('message', 'Outcome deleted successfully!'); 
        }else{
            $updated = Transaction::where('id', 'like', $req->id)->update([
                'updated_by' => $up
            ]);
            return redirect('/outcome')->with('message', 'Delete request sent successfully!');
        }

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
        $outcome = Transaction::where('id', 'like', $id)->first();
        $outcome->delete();
        return redirect('/outcome')->with('message', 'Outcome ' . $outcome['transaction_name'] . ' deleted successfully!'); 
    }
}
