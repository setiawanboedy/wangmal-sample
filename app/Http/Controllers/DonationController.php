<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(){
        $sumBoys = Donation::where('gender', 1)->count();
        $sumGirls = Donation::where('gender', 2)->count();
        return view('donate.index',[
            'sumBoys'=>$sumBoys,
            'sumGirls'=>$sumGirls
        ]);
    }
}
