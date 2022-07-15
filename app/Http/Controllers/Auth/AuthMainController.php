<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthMainController extends Controller
{
  public function index()
  {
    return view('auth.index');
  }

  public function login(Request $req)
  {
    $req->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if (Auth::attempt([
      'email' => $req->email,
      'password' => $req->password,
    ])) {
      session()->flash('success', 'Добро пожаловать');

      if (Auth::user()->is_admin) {
        return redirect()->route('admin.index');
      } else {
        return redirect()->home();
      }
    }

    session()->flash('error', 'Email или пароль не верные');
    return redirect()->route('auth.index');
  }

  public function regForm()
  {
    return view('auth.regForm');
  }

  public function reg(Request $req)
  {
    $req->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed',
    ]);

    $user = User::query()->create([
      'name' => $req->name,
      'email' => $req->email,
      'password' => bcrypt($req->password),
    ]);

    session()->flash('success', 'Пользователь успешно зарегистрирован');
    Auth::login($user);
    return redirect()->home();
  }

  public function logout()
  {
    Auth::logout();
    session()->flash('success', 'До скорых встреч');
    return redirect()->route('auth.index');
  }
}
