<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class LookController extends Controller
{
    public function __invoke() {
        $jobs= Job::with(['employer', 'tags'])->where('type', 'LIKE', request('q'))->get();

        return view('look', ['jobs' => $jobs]);
    }

    public function crew() {
        $jobs= Job::latest()->with(['employer', 'tags'])->where('type', 'LIKE', 'Crew')->get();

        return view('crew', ['jobs' => $jobs]);
    }

    public function talent() {
        $jobs= Job::latest()->with(['employer', 'tags'])->where('type', 'LIKE', 'Talent')->get();

        return view('talent', ['jobs' => $jobs]);
    }

    public function projects() {
        $jobs= Job::latest()->with(['employer', 'tags'])->where('type', 'LIKE', 'Project')->get();

        return view('projects', ['jobs' => $jobs]);
    }

    public function jobs() {
        $jobs= Job::latest()->with(['employer', 'tags'])->where('type', 'LIKE', 'Job')->get();

        return view('jobs', ['jobs' => $jobs]);
    }

    public function about() {

        return view('about');
    }

    public function help() {
        return view('help');
    }
}
