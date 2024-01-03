<?php

namespace App\Http\Controllers;

use App\Models\Asbab;
use Illuminate\Http\Request;

class AsbabController extends Controller
{
    public function index(){
        $sumBoys = Asbab::where('gender', 1)->count();
        $sumGirls = Asbab::where('gender', 2)->count();
        return view('masters.asbab.index',[
            'sumBoys'=>$sumBoys,
            'sumGirls'=>$sumGirls
        ]);
    }
}
