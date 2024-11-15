<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Preferences;
use App\Models\User;

use Illuminate\Support\Facades\{
  Hash,
  Auth
};

class RegisterController
{
  public function create()
  {
    return view('pages.auth.register');
  }

  public function store(RegisterRequest $request)
  {
    $fields = $request->validated();

    if (!$fields)
    {
      return redirect()->route('register')
        ->withErrors($request->errors())
        ->withInput();
    }

    $user = User::create([
      'username' => $fields['username'],
      'first_name' => $fields['first_name'],
      'last_name' => $fields['last_name'],
      'email' => $fields['email'],
      'password' => Hash::make($fields['password']),
    ]);

    if ($user)
    {

      if (Auth::attempt([
        'email' => $fields['email'],
        'password' => $fields['password']
      ]))
      {
        $request->session()->regenerate();
        return redirect()->route('chamados');
      }

      return redirect()->route('login');
    }

    return redirect()->route('register');
  }
}