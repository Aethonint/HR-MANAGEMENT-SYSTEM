<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsManagerController extends Controller
{
    public function accountsManagerDashboard() {
        return view('Accounts.dashboard');
    }

}
