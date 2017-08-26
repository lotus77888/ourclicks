<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\View\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class imageController extends Controller
{
    public function insertimage(Request $request)
    {
    	echo "<pre>";
    	print_r($request->all());
    	// exit;

     //  $name = $request->input('userimage');
     //  $size = $request->input('size');
     // DB::insert('insert into flights (file_name, file_size,created_at,updated_at) values (?, ?,?, ?)', [$name, $size,Carbon::now(),Carbon::now()]);

     //  echo "Record inserted successfully.<br/>";
     //  echo '<a href = "/test">Click Here</a> to go back.';

    	 

    	 if ($request->hasFile('userimage')) {
                $file = $request->file('userimage');

    			$file_name=time().'.'.$file->getClientOriginalExtension();
    			$file_size=$file->getSize();
    			$destinationPath = 'uploads';
    			$data=array(
						'file_name'=>$file_name,
						'file_size'=>$file_size,
						'created_at'=>Carbon::now(),
						'updated_at'=>Carbon::now()
    				);
    			$result = DB::table('flights')->insert($data);
    			if($result){
    			   $file->move($destinationPath,$file_name);
                       return back()->with('success','Image Upload successful');
    			  // $data= DB::table('flights')->get();
    			  //  return view('welcome',compact('data'));
    			}
           }

    }
}
