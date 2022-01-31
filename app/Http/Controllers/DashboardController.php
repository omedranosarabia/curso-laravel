<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(Request $request) {
        return view('test', [
            'title' => $request->query('title', 'Valor default')
        ]);
    }
}
