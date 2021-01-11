<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function test_page()
    {
        return view('pages.test');
    }

    public function user_ui()
    {
        return view('pages.ui');
    }
}
