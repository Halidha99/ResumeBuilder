<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View; 

class ContactController extends Controller
{
    /**
     * Display the contact view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        return view('pages.contact');
    }
}