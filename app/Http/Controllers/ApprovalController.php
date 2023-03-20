<?php

namespace App\Http\Controllers;


use App\Models\Transaction;
use App\Models\TransactionSource;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $transaction = Transaction::where('updated_by', 'NOT LIKE', 'owner.create.approved')
            ->where('updated_by', 'NOT LIKE', 'owner.edit.approved')
            ->where('updated_by', 'NOT LIKE', 'owner.create.rejected')
            ->where('updated_by', 'NOT LIKE', 'owner.edit.rejected')
            ->where('updated_by', 'NOT LIKE', 'owner.delete.rejected')
            ->get();

        if($request->ajax()) {
            return datatables()->of($transaction)
                    ->addColumn('action', function($transaction){
                        
                        return view('approval.action', ['transaction' => $transaction]);
                    })
                    ->addColumn('source', function($transaction){
                        
                        $source =
                        '<td>'.$transaction->transactionSources->transaction_source_name.'</td>';
                            
                        return $source;
                    })
                    ->addColumn('total', function($transaction){
                        
                        $total =
                        '<td>'.number_format($transaction->total , 0, ',', '.').'</td>';
                            
                        return $total;
                    })
                    ->addColumn('transaction_type', function($transaction){
                        
                        if($transaction->transaction_type_id == 1) {
                            $transaction_type = 'Income';    
                        }else {
                            $transaction_type = 'Outcome';
                        }

                        return $transaction_type;
                    })
                    ->addColumn('approval_type', function($transaction){
                        
                        return explode( '.', $transaction -> updated_by)[1];
                    })
                    ->addColumn('date', function ($transaction) {
                
                        $mydate = strtotime($transaction->date);
                        $newformat = date('d M Y',$mydate);
                        return '<td data-sort="'. $mydate .'">'.$newformat .'</td>';
                    })
                    ->addIndexColumn()
                    ->rawColumns(['action', 'source', 'total', 'date'])
                    ->make(true);
          }
          
          return view('approval.index');
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

    public function approveTransaction(Request $req)
    {
        $type = explode( '.', $req -> type)[1];
        $transaction = Transaction::where('id', 'like', $req->id)->first();

        if( $type == 'delete' ){
            $transaction->delete();
        }else if($type == 'create'){
            $transaction->update([
                'updated_by' => 'owner.create.approved'
            ]);
        }else if($type == 'edit'){
            $transaction->update([
                'updated_by' => 'owner.edit.approved'
            ]);
        }
        
        return redirect(url('/approval'))->with('message', ucfirst($type). ' Approved successfully!'); 
    }

    public function declineTransaction(Request $req)
    {
        $type = explode( '.', $req -> type)[1];
        $transaction = Transaction::where('id', 'like', $req->id)->first();

        if($type == 'create'){
            $transaction->update([
                'updated_by' => 'owner.create.rejected'
            ]);
        }else if($type == 'edit'){
            $transaction->update([
                'updated_by' => 'owner.edit.rejected'
            ]);
        }else if($type == 'delete'){
            $transaction->update([
                'updated_by' => 'owner.delete.rejected'
            ]);
        }

        return redirect(url('/approval'))->with('message', ucfirst($type). ' rejected successfully!');
    }
}
