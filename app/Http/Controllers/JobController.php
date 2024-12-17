<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $fJobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');
        // return view('jobs.index', [
        //     'normalJobs' => $fJobs[0],
        //     'featuredJobs' => $fJobs[1],
        //     'tags' => Tag::all(),
        // ]);

        $jobs = Job::latest()->with(['employer', 'tags'])->paginate(6);
        return view('jobs.index', [
            'jobs' => $jobs,
            'tags' => Tag::all(),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /*TESTING FUNCTIONS FOR SPECIFIC CREATES*/ 
    public function create_t()
    {
        return view('jobs.create-t');
    }

    public function create_c()
    {
        return view('jobs.create-c');
    }

    public function create_p()
    {
        return view('jobs.create-p');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $attributes = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'type' => ['required', Rule::in(['Crew', 'Job', 'Talent', 'Project'])],
            'url' => ['required', 'active_url'],
            'img' => ['required'],
            'tags' => ['nullable'],
            'insta' => ['nullable', 'active_url'],
            'fb' => ['nullable', 'active_url'],
            'status' => ['required'],

        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/')->with('success', 'Post published successfully!');
    }

    /* TESTING STORE F FOR T */
    public function store_t(Request $request)
    {
       $attributes = $request->validate([
            'title' => ['required'],  
            'description' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'type' => ['required', Rule::in(['Crew', 'Job', 'Talent', 'Project'])],
            'url' => ['required', 'active_url'],
            'img' => ['required'],
            'tags' => ['nullable'],
            'gender' => ['required'],
            't_eye_color' => ['required'],
            't_hair_color' => ['required'],
            't_hair_length' => ['required'],
            't_weight' => ['required'],
            't_height' => ['required'],
            't_age_range' => ['required'],
            't_appearance' => ['required'],
            'nationality' => ['required'],
            'contact' => ['required'],
            't_type' => ['nullable'],
            'insta' => ['nullable', 'active_url'],
            'fb' => ['nullable', 'active_url'],
            'status' => ['required'],

        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/')->with('success', 'Post published successfully!');

    }



    public function store_c(Request $request)
    {
       $attributes = $request->validate([
            'title' => ['required'],  
            'description' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'type' => ['required', Rule::in(['Crew', 'Job', 'Talent', 'Project'])],
            'url' => ['required', 'active_url'],
            'img' => ['required'],
            'tags' => ['nullable'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'contact' => ['required'],
            'c_type' => ['required'],
            'insta' => ['nullable', 'active_url'],
            'fb' => ['nullable', 'active_url'],
            'status' => ['required'],

        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/')->with('success', 'Post published successfully!');

    }


    public function store_p(Request $request)
    {
       $attributes = $request->validate([
            'title' => ['required'],  
            'description' => ['required'],
            'location' => ['required'],
            'type' => ['required', Rule::in(['Crew', 'Job', 'Talent', 'Project'])],
            'url' => ['required', 'active_url'],
            'img' => ['required'],
            'tags' => ['nullable'],
            'contact' => ['required'],
            'c_type' => ['required'],
            't_type' => ['required'],
            'insta' => ['nullable', 'active_url'],
            'fb' => ['nullable', 'active_url'],
            'status' => ['required'],

        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

         return redirect('/')->with('success', 'Post published successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view ('jobs.show', ['job' => $job] );
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
