<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $admin = Admin::select('*');
        if($request->ajax()) {
            return datatables()->of($admin)
                    ->addColumn('action', function($admin){
                        
                        $actionBtn =
                        '<div class = "d-flex justify-content-between">
                            <a href="/admin/'.$admin->id.'/edit" id="'.$admin->id.'" class="edit btn btn-outline-success btn-action btn-sm mx-1">Edit</a>
                            <a href="javascript:void(0)" id="'.$admin->id.' '.$admin->name.'" data-toggle="tooltip" data-original-title="Delete"  class="delete btn btn-outline-danger btn-action btn-sm mx-1">delete</a>
                        </div>';
                            
                        return $actionBtn;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['action'])
                    ->make(true);
          }
          
          return view('admin.index', [
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
        return view('admin.create');
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
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:admins'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'max:12', 'min:10']
        ]); 

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'admin_type_id' => 2,
            'password' => $request->password,
            'phone' => $request->phone,
        ]);

        // Admin::create($formFields);

        return redirect('/admin')->with('message', 'Admin ' . $formFields['name'] . ' created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
        return view('admin.edit', ['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'max:12', 'min:10']
        ]); 

        $admin->update($formFields);

        return redirect('/admin')->with('message', 'Admin ' . $formFields['name'] . ' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
        $admin->delete();
        return redirect('/admin')->with('message', 'Admin ' . $admin['name'] . ' deleted successfully!');        
    }
}
