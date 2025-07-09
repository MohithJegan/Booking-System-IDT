<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        // get items
        $items = Auth::user()->item;

        return view('user.dashboard', compact('items'));
    }
}
