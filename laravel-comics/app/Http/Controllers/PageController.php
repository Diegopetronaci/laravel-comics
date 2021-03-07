<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        return view('pages.home');
    }

    public function comics()
    {
        return view('pages.comics');
    }

    public function show(Comic $fumetto)
    {
        return view('fumetti.show', compact('fumetto'));
    }
}
