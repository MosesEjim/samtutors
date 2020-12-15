<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RequestTutor;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function index(){
        return view('request');
    }
    public function create(){
        return view('requestform');
    }
    public function requestMail(Request $request){
        try{
            Mail::to('info@globalsamtutors.com.ng')->send(new RequestTutor($request));  
         }catch(Exception $e){
            return back()->with('error');
         }
    }
}
