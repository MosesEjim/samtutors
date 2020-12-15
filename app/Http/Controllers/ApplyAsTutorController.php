<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ApplyTutor;
use Illuminate\Support\Facades\Mail;

class ApplyAsTutorController extends Controller
{
    public function index(){
        return view('apply');
    }
    public function create(){
        return view('applyform');
    }

    public function apply(Request $request){
        try{
            Mail::to('info@globalsamtutors.com.ng')->send(new ApplyTutor($request));  
         }catch(Exception $e){
            return back()->with('error');
         }
    }
}
