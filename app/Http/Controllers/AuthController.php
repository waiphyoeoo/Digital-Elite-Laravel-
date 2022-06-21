<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        $formData = request()->validate([
            'name' => ['required', 'max:255', 'min:5'],
            'username' => ['required', 'max:255', 'min:5'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'min:8'],
        ]);
        $users = User::create($formData);
        auth()->login($users);

        return redirect('/')->with('success', 'Welcome ' . $users->name);
    }
    public function login()
    {
        return view('auth.login');
    }
    public function post_login()
    {
        $formData = request()->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required', 'min:8']
        ], [
            'email.required' => "We need your Email",
            'password.min' => 'Password must be greater than 8 character'
        ]);
        if (auth()->attempt($formData)) {
            if (auth()->user()->is_admin) {
                return redirect('/admin/blogs/create');
            } else {
                return redirect('/')->with('success', 'Welcome Back');
            }
        } else {
            return redirect()->back()->withErrors([
                'password' => 'Your Password is Wrong'
            ]);
        }
    }



    public function logout()
    {


        auth()->logout();

        return redirect('/')->with('success', 'Good Bye');
    }
}
