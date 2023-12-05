<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    //action
    public function index(){
       $liste= Apprenant::all();
       return view('liste',['liste'=>$liste]);
    }
}
