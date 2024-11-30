<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    function index()
    {
        $title = "Available Jobs";
        $jobs = [
            "Web developer",
            "data analyst",
            "software engineer",
            "graphic designer",
        ];
        return view('jobs.index', compact('title', 'jobs'));
    }
    function create()
    {
        return view('jobs.create');
    }
}