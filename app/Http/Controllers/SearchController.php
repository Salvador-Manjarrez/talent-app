<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke() {
        $request = request('q');
        $jobs= Job::with(['employer', 'tags'])
             ->where('title', 'LIKE', '%'.request('q').'%')
            ->orWhere('description', 'LIKE', '%'.request('q').'%')
            ->orWhere('location', 'LIKE', '%'.request('q').'%')
            ->orWhere('type', 'LIKE', '%'.request('q').'%')
            ->get();

        return view('results', ['jobs' => $jobs], ['request' => $request]);
    }
}
