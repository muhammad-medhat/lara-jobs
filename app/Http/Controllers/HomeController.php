<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Index";
        $jobs = [];
        return view('jobs.index', compact('title', 'jobs'));
    }
}