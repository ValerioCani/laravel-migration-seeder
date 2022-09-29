<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainsModel;

class TrainsController extends Controller
{
    public function list(){
        
        $trains = TrainsModel::all();

        foreach($trains as $train){
            echo $train->Azienda . '</br>';
        }

        die();

        return view('trains');
    }
}
