<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
class TrainsController extends Controller
{
    public function list(){
        $trains = Train::all();
        return view('trains',['trains' => $trains]);
    }
}
