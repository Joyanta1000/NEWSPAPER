<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\paper;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use DateTime;
use Carbon\Carbon;
class paperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $date = date('Y-m-d');
$startDate = new \DateTime('NOW');
//$endDate = new \DateTime($date);
$startDate->modify("+6 hour");

$dt = $startDate->format('Y-m-d');
//return dd($startDate);


        $n = DB::table('papers')->where('subtypes','=','International')->where('status','=','Accepted')->where('date',$dt)->get();
        $m = DB::table('papers')->where('subtypes','=','Breaking News')->where('status','=','Accepted')->where('date',$dt)->get();
      $o = DB::table('papers')->where('subtypes','=','Breaking News')->where('status','=','Accepted')->where('date',$dt)->first();
      if ($n&&$m&&$o)
      {
      return view('/index',['papers'=>$n,'paper'=>$m,'pape'=>$o]);
    }
    else
    {
      return view('/error');
    }


    }

     public function indexx()
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


if($request->has('image')&&$request->has('image1'))
{
      $paper = new paper;
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
         
      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $filepath = public_path('/images/');
      $file->move($filepath,$filename);

      $paper->name ='/images/' . $filename;
        
      $file1 = $request->file('image1');
      $filename1 = time() . '.' . $file1->getClientOriginalExtension();
      $filepath1 = public_path('/images/');
      $file1->move($filepath1,$filename1);

      $paper->name1 ='/images/' . $filename1;

      $paper->details1=$request->details1;
      
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

      return redirect('admin/table');
      
}

else if($request->has('image'))
{
      $paper = new paper;
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
         
      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $filepath = public_path('/images/');
      $file->move($filepath,$filename);

      $paper->name ='/images/' . $filename;
        
      
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

      return redirect('admin/table');
      
}

else if($request->has('image1'))
{
      $paper = new paper;
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
         
        
      $file1 = $request->file('image1');
      $filename1 = time() . '.' . $file1->getClientOriginalExtension();
      $filepath1 = public_path('/images/');
      $file1->move($filepath1,$filename1);

      $paper->name1 ='/images/' . $filename1;

      $paper->details1=$request->details1;
      
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

      return redirect('admin/table');
      
}

else{
      $paper = new paper;
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

      return redirect('admin/table');
      
  }
    }


     public function rstore(Request $request)
    {


if($request->has('image')&&$request->has('image1'))
{
      $paper = new paper;
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
         
      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $filepath = public_path('/images/');
      $file->move($filepath,$filename);

      $paper->name ='/images/' . $filename;
        
      $file1 = $request->file('image1');
      $filename1 = time() . '.' . $file1->getClientOriginalExtension();
      $filepath1 = public_path('/images/');
      $file1->move($filepath1,$filename1);

      $paper->name1 ='/images/' . $filename1;

      $paper->details1=$request->details1;
      
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;


      $paper->save();

     
      return redirect('reporter/table');
}

else if($request->has('image'))
{
    $paper = new paper;
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
         
      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $filepath = public_path('/images/');
      $file->move($filepath,$filename);

      $paper->name ='/images/' . $filename;
        
      
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

    
      return redirect('reporter/table');
}

else if($request->has('image1'))
{
      $paper = new paper;
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
         
        
      $file1 = $request->file('image1');
      $filename1 = time() . '.' . $file1->getClientOriginalExtension();
      $filepath1 = public_path('/images/');
      $file1->move($filepath1,$filename1);

      $paper->name1 ='/images/' . $filename1;

      $paper->details1=$request->details1;
      
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

     
      return redirect('reporter/table');
}

else{
      $paper = new paper;
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
      $paper->details1=$request->details1;
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

     
      return redirect('reporter/table');
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
        $show = paper::find($id);
        return view('admin/editn',['papers'=>$show]);
    }

     public function news(Request $request)
    {
     $types = $request->types;
        $show = paper::where('types',$types)->get();
        return view('news',['news'=>$show]);
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
      
if($request->has('image')&&$request->has('image1'))
{
      $paper = paper::find($id);
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
         
      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $filepath = public_path('/images/');
      $file->move($filepath,$filename);

      $paper->name ='/images/' . $filename;

      $file1 = $request->file('image1');
      $filename1 = time() . '.' . $file1->getClientOriginalExtension();
      $filepath1 = public_path('/images/');
      $file1->move($filepath1,$filename1);

      $paper->name1 ='/images/' . $filename1;

      $paper->details1=$request->details1;
        
      
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

      return redirect('admin/table');
      
}


else if($request->has('image'))
{
      $paper = paper::find($id);
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
         
      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $filepath = public_path('/images/');
      $file->move($filepath,$filename);

      $paper->name ='/images/' . $filename;
        
      
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

      return redirect('admin/table');
      
}

else if($request->has('image1'))
{
      $paper = paper::find($id);
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
         
        
      $file1 = $request->file('image1');
      $filename1 = time() . '.' . $file1->getClientOriginalExtension();
      $filepath1 = public_path('/images/');
      $file1->move($filepath1,$filename1);

      $paper->name1 ='/images/' . $filename1;

      $paper->details1=$request->details1;
      
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

      return redirect('admin/table');
      
}


else{
      $paper = paper::find($id);
      $paper->title=$request->title;
      $paper->details=$request->details;
      $paper->date=$request->date;
      $paper->types=$request->types;
      $paper->subtypes=$request->subtypes;
      $paper->reporter=$request->reporter;
      $paper->rcode=$request->rcode;
      $paper->repemail=$request->repemail;
      $paper->status=$request->status;

      $paper->save();

      return redirect('admin/table');
     
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
    }

    public function table()
    {
        $news = DB::table('papers')->get();
        return view('admin/table',['papers'=>$news]);
      
    }

     public function rtable()
    {
        $news = DB::table('papers')->get();
        
        return view('reporter/table',['papers'=>$news]);
    }

    public function delete($id)
    {
        paper::find($id)->delete();
        return redirect('admin/table');
    }

    public function minnews()
    {
     
    }

    
}
