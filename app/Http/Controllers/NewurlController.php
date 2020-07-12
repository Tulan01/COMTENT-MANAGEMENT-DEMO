<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class NewurlController extends Controller
{
    public function home (){
    	$data=DB::table('newurls')->get();
    	return view('admin.adminhome');
    }
      public function homeview () {
        $data1=DB::table('content_manages')->where('section',1)->get();
        $data2=DB::table('content_manages')->where('section',2)->get();
        $data=DB::table('content_manages')->first();
        return view('frontpages.home',compact('data','data1','data2'));
    }
    public function viewsingle($id){
        $data= $data=DB::table('content_manages')->where('id',$id)->first();
            return view('frontpages.singlefile',compact('data'));
    }
}
