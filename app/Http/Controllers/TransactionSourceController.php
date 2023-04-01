<?php

namespace App\Http\Controllers;

use App\Models\ProfitLossComponent;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionType;
use App\Models\TransactionSource;

class TransactionSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $transactionSource = TransactionSource::all();
        if($request->ajax()) {
            return datatables()->of($transactionSource)
            ->addColumn('action', function($transactionSource){
                
                return view('transactionSource.action', ['transactionSource' => $transactionSource]);
                        
            })
            // ->addColumn('type', function($transactionSource){
                
            //     return $transactionSource->transactionTypes->transaction_type_name;
            // })
            ->addColumn('profit_loss_component', function($transactionSource){
                return $transactionSource->profitLossComponent->profit_loss_component_name;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
          }
          
          return view('transactionSource.index', [
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
        return view('transactionSource.create', [
            // 'types' => TransactionType::get(),
            'profitLossComponents' => ProfitLossComponent::get()
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
            'transaction_source_name' => 'required',
            // 'transaction_type_id' => 'required',
            'profit_loss_component_id' => 'required'
        ]); 
            
        
        TransactionSource::create([
            'transaction_source_name' => $request->transaction_source_name,
            // 'transaction_type_id' => $request->transaction_type_id,
            'profit_loss_component_id' => $request->profit_loss_component_id
        ]);


        return redirect('/transaction-source')->with('message', 'Transaction source ' . $request['transaction_source_name'] . ' created successfully!');
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
    public function edit(TransactionSource $transactionSource)
    {
        //
        // dd($transactionSource);  
        return view('transactionSource.edit', [
            'transactionSource' => $transactionSource,
            'profitLossComponents' => ProfitLossComponent::get(),
            'user' => auth()->user()->adminType->admin_type_name
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransactionSource $transactionSource)
    {
        //
        $request->validate([
            'transaction_source_name' => 'required',
            // 'transaction_type_id' => 'required',
            'profit_loss_component_id' => 'required'
        ]); 
            
        $transactionSource->update([
            'transaction_source_name' => $request->transaction_source_name,
            // 'transaction_type_id' => $request->transaction_type_id,
            'profit_loss_component_id' => $request->profit_loss_component_id
        ]);

        return redirect('/transaction-source')->with('message', 'Transaction source ' . $request['transaction_source_name'] . ' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionSource $transactionSource)
    {
        //
        $transaction = Transaction::where('transaction_source_id', '=', $transactionSource->id)->get();
        Transaction::destroy($transaction->pluck('id'));
        $transactionSource->delete();
        return redirect('/transaction-source')->with('message', 'Transaction source ' . $transactionSource['transaction_source_name'] . ' deleted successfully!');
    }
}
