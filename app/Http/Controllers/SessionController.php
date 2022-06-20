<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $attributes = $request->validated();

        $user = User::create($attributes);

        auth()->login($user);

        return redirect()->route('index')->withSuccess('Logged');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('user.login');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attempt(LoginRequest $request)
    {
        $attributes = $request->validated();

        if(!auth()->attempt($attributes)){
            return back()->withInput(
                $request->except('password')
            )->withErrors([
                'credential' => 'As credenciais de login estão incorretas'
            ]);
        }
        
        session()->regenerate();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->logout();

        return redirect()->route('index')->withSuccess('Bye');
    }
}
