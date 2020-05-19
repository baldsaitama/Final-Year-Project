<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
    }
    
    public function logout(Request $request)
  {
      \Auth::guard()->logout();

      $request->session()->flush();

      $request->session()->regenerate();

      return redirect()->route('login');
  }
}
