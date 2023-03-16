<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user = User::select('*');
        if($request->ajax()) {
            return datatables()->of($user)
                    ->addColumn('action', function($user){
                        
                        $actionBtn =
                        '<div class = "d-flex justify-content-between">
                            <a href="/user/'.$user->id .'/edit" id="'.$user->id.'" class="edit btn btn-outline-success btn-sm">Edit</a>
                            <a href="javascript:void(0)" id="'.$user->id.' '.$user->name.'" data-toggle="tooltip" data-original-title="Delete"  class="delete btn btn-outline-danger btn-sm">delete</a>
                        </div>';
                            
                        return $actionBtn;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['action'])
                    ->make(true);
          }
          
          return view('user.index');
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
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
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]); 

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);

        User::create($formFields);

        // toast('Success Toast','success');
        return redirect('/user')->with('message', 'Admin ' . $formFields['name'] . ' created successfully!');
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
    public function edit(User $user)
    {
        //
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, USer $user)
    {
        //
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]); 

        $user->update($formFields);

        return redirect('/user')->with('message', 'User ' . $formFields['name'] . ' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect('/user')->with('message', 'User ' . $user['name'] . ' deleted successfully!');
    }

}
