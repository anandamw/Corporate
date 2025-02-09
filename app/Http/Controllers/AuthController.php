<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            // Check the user's role
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect('dashboard');
            } elseif ($user->role == 'sekretaris') {
                return redirect('dashboard');
            } elseif ($user->role == 'pemdes') {
                return redirect('dashboard');
            } elseif ($user->role == 'peukd') {
                return redirect('dashboard');
            } elseif ($user->role == 'pkkmd') {
                return redirect('dashboard');
            }
        } else {
            // If login attempt fails, handle it (e.g., show error)
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }



    public function logout()
    {


        Auth::logout();

        return redirect('/');
    }
}
