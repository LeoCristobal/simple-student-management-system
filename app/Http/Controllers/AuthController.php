<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Auth.login');
    }

    public function store(LoginRequest $request)
    {
        $validated = $request->validated();

        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry. Credentials do not match'
            ]);
        }

        session()->regenerate();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
