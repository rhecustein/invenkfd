<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {   
        $items = DB::table('inventaris')->count();
        $users = DB::table('users')->count();
        return view('dashboard', compact('items', 'users'));
    }
}
