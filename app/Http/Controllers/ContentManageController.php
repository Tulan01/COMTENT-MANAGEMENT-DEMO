<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
session_start();

class ContentManageController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
     public function home (){
         Session::put('active',1);
    	$data=DB::table('content_manages')->get();
    	return view('admin.adminhome',compact('data'));
    }

    public function addinfo(){
         Session::put('active',2);
    	return view('admin.addinfo');
    }

    public function save (Request $request){

    	if($request->type==1){

    	$validatedData = $request->validate([
     	'title' => 'required|unique:content_manages',
        'details' => 'required',
        'image' => 'required',
        'type' => 'required',
            ]); 
    	$data=array();
    	$data['type']=$request->type;
    	$data['section']=$request->section;
    	$data['title']=$request->title;
    	$data['details']=$request->details;
    	$data['status']=$request->status;
    	$image=$request->file('image');

    	if($image){
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext; 
        $upload_path='images/post/';
        $image_url=$upload_path.$image_full_name; 
        $success=$image->move($upload_path,$image_full_name);
        $data['image']=$image_url;
        }
        $data1=DB::table('content_manages')->insert($data);
        $notification = array(
                'message' => 'Successfully Inserted !',
                'alert-type' => 'success'
            );

        //return response()->json($notification);
         return Redirect()->back()->with($notification);
       }
        else{
        $validatedData = $request->validate([
     	'title' => 'required|unique:content_manages',
        'details' => 'required',
        'url' => 'required',
            ]); 
        $data=array();
    	$data['type']=$request->type;
    	$data['section']=$request->section;
    	$data['title']=$request->title;
    	$data['details']=$request->details;
    	$data['status']=$request->status;
    	$url=$request->url;
    	$value=explode("v=", $url);
    	$videoId=$value[1];
    	$data['url']=$videoId;
    	$data['fullurl']='https://www.youtube.com/embed/'.$videoId;
    	$data1=DB::table('content_manages')->insert($data);
    	 $notification = array(
                'message' => 'Successfully Inserted !',
                'alert-type' => 'success'
            );

    	//return response()->json($notification);
    	return Redirect()->back()->with($notification);
        }
    }

   
}
