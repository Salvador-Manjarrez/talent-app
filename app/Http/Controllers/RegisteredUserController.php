<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\File;
use App\Models\User;

class RegisteredUserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Validate the user attributes
    $userAttributes = $request->validate([
        'name' => ['required'],
        'email' => ['required', 'email:rfc,dns', 'unique:users,email'],
        'password' => ['required', 'confirmed', Password::min(6)],
    ]);

    // Validate the employer attributes
    $employerAttributes = $request->validate([
        'employer' => ['required'],
        'logo' => ['required', File::types(['png', 'jpg', 'webp'])],
        'imdb'=> ['nullable', 'active_url'],
        'card' =>  ['required', File::types(['png', 'jpg', 'webp'])],
    ]);

    // Create the user
    $user = User::create($userAttributes);

    // Store the logo in the public/logos directory
    $logoName = time() . '-' . $request->logo->getClientOriginalName(); // Unique file name
    $logoPath = $request->logo->move(public_path('logos'), $logoName); // Save in public/logos

    // Create the employer and save the logo path
    $user->employer()->create([
        'name' => $employerAttributes['employer'],
        'logo' => 'logos/' . $logoName, // Save relative path for accessibility
        'imdb' => $employerAttributes['imdb'],
        'card' => $request->file('card')->store('test-img-upload', 'public'),

    ]);

$employerAttributes['card'] = $request->file('card')->store('test-img-upload', 'public');


    // Log in the user
    Auth::login($user);

    // Redirect with success message
    return redirect('/posting')->with('success', 'Form submitted successfully!');
} 
}
