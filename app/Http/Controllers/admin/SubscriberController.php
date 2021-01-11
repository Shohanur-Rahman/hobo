<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    public function index()
    {
        $newsLetters = NewsLetter::all();
        return view('admin.modules.subscribers.index',compact('newsLetters'));
    }

    public function edit(NewsLetter $newsLetter)
    {
        return view('admin.modules.subscribers.edit',compact('newsLetter'));
    }

    public function update(Request $request, NewsLetter $newsLetter)
    {
        $newsLetter->update(['is_active'=>$request->has('is_active')]);

        return redirect(route('subscribers.index'))->with('success','Subscribers has been updated successfully');
    }

    public function destroy(NewsLetter $newsLetter)
    {
        $newsLetter->delete();

        return redirect(route('subscribers.index'))->with('success','Subscribers has been deleted successfully');
    }
}
