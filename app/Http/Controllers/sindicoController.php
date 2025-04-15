<?php

namespace App\Http\Controllers;

use App\Models\Sindico;
use Illuminate\Http\Request;

class sindicoController extends Controller{


public function index(){
    $sindicos= Sindico::all();
    return view('sindico.index',compact('sindicos'));
  }

public function create(){
    return view('sindico.create');
  }
}
