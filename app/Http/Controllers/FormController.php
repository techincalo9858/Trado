<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\contacts;

class FormController extends Controller
{

    public function index()
    {
        return view('ajax-form');
    }       

    public function store(Request $request)
    {  
        
        $dp=new contacts();
        $dp->name= $request['name'];
        $dp->email= $request['email'];
        $dp->phone= $request['phone'];
        $dp->save();
        return response()->json(['success'=>'Form Submitted successfuly']);
    }

    public function selectindex()
    {
        return view('ajaxselect');
    }   
    
    public function update(Request $request)
    
    { 
        $dp=new contacts();
        $dp->market= $request['market'];
        $dp->save();
        return response()->json(['success'=>'Market Changed']);
    }
}