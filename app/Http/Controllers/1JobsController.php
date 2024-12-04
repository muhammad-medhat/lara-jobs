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
    function show($id)
    {
        return "Job id: $id";
        return view('jobs.show');
    }
    function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        return "Job title: $title, Job description: $description";
    }
}