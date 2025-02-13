<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Auth;

class DonasiController extends Controller
{
        public function showCampaignsOnDonasi() {
        $campaigns = Campaign::paginate(50);
        return view('donasi', compact('campaigns'));
    }

    public function index() {
        //get campaigns based on the user login
        $campaigns = Auth::user()->Campaign()->get();
       // $campaigns = Campaign::paginate(10);
        return view('dashboard', compact('campaigns'));
    }

}