<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Session;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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


    }
    public function login(Request $request)
    {
          $this->validate($request,[
           //'id' => 'required|unique:libraries,id',
           
           'email' => 'required',
          
           
           'password' => 'required'
        ]);
          
        $email = $request->email;
        $password = $request->password;

        $obj = admin::where('email','=',$email)
        ->where('password','=',$password)
        ->first();

        if ($obj) {
            $request->session()->put('email',$obj->email);
            $request->session()->put('password',$obj->password);
            return redirect('/admin/add');
        }

        if (!$obj){
 return redirect('admin/login');
}
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

    public function logout(Request $request)
    {
      $request->session()->flush();
      return redirect('admin/login');
    }
}
