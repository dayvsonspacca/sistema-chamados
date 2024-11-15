<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
  public function create()
  {
    return view('pages.auth.login');
  }

  public function store(LoginRequest $request)
  {
    $fields = $request->validated();

    if (!$fields)
    {
      return redirect()->route('login')->withErrors($request->errors());
    }

    if (
      Auth::attempt([
        'email' => $fields['email'],
        'password' => $fields['password']
      ])
    )
    {
      $request->session()->regenerate();
      return redirect()->route('chamados');
    }

    return redirect()->route('login');
  }

  public function destroy(Request $request): RedirectResponse
  {
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
  }
}