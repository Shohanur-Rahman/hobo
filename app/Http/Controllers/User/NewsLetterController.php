<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255', 'unique:news_letters'],
        ]);

        NewsLetter::create(['email'=>$request['email']]);

        return 'success';
    }
}
