<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    /**
     * Display Home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.index');
    }

    public function portal()
    {
        return view('site.portal');
    }
}

