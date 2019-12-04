<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\reporter;
use Session;
use DB;

class reporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function reg(Request $request)
    {
         if($request->has('image'))
{
    if ($request->pass1==$request->pass)
    {
        $password = $request->pass;
    }
    else
    {
        return redirect()->back();
    }
      $reporter = new reporter;
      $reporter->remail = $request->remail;
      $c = reporter::orderBy('created_at','DESC')->first();
      
      $reporter->code = str_pad($c->code + 1, 8, "10000", STR_PAD_LEFT);
      

      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $filepath = public_path('/images/');
      $file->move($filepath,$filename);
      $reporter->name ='/images/' . $filename;

      $reporter->phonenumb = $request->phonenumb;
      $reporter->password = $password;
      $reporter->status = $request->status;

      $reporter->save();

      return redirect('reporter/login');
      
}
else
{
return redirect()->back();
}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function rlogin(Request $request)
    {
          $this->validate($request,[
           //'id' => 'required|unique:libraries,id',
           
           'remail' => 'required',
          
           
           'password' => 'required'
        ]);
        
 
        $remail = $request->remail;
        $password = $request->password;
        $status = $request->status;

        $obj = reporter::where('remail','=',$remail)
        ->where('password','=',$password)
        ->where('status','=',$status)
        ->first();

        if ($obj) {
            $request->session()->put('remail',$obj->remail);
            $request->session()->put('password',$obj->password);
            $request->session()->put('code',$obj->code);
            return redirect('/reporter/add');
        }

        if (!$obj){
 return redirect('reporter/login');
}
    }

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

     public function logout(Request $request)
    {
      $request->session()->flush();
      return redirect('reporter/login');
    }

     public function rlist()
    {
        $reporters = DB::table('reporters')->get();
        return view('admin/rlist',['reporters'=>$reporters]);
      
    }

     public function rview($id)
    {
        $show = reporter::find($id);
        return view('admin/rview',['reporters'=>$show]);
    }

    public function updates(Request $request, $id)
    {
        $s = reporter::find($id);
        $s->status = $request->status;
        $s->save();
        return redirect('admin/rlist');
    }
}
