<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrManagerController extends Controller
{
   public function hrManagerDashboard() {
        return view('HrManager.dashboard');
    }

}
