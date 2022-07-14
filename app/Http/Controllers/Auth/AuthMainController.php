<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthMainController extends Controller
{
  public function index()
  {
    return view('auth.index');
  }

  public function login(Request $req)
  {
    dd($req);
  }

  public function regForm()
  {
    return view('auth.regForm');
  }

  public function reg(Request $req)
  {
    dd($req);
  }
}
