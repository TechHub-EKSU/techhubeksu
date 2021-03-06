<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Confirm Password Controller
  |--------------------------------------------------------------------------
  |
  | This controller is responsible for handling password confirmations and
  | uses a simple trait to include the behavior. You're free to explore
  | this trait and override any functions that require customization.
  |
  */
  use ConfirmsPasswords;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Where to redirect users when the intended url fails.
   *
   * @var string
   */
  public function redirectTo(){
    $user = User::where('username', auth()->user()->username)->first();

    if($user->isAdmin()) {
      return '/admin/dashboard';
    } else {
      return '/home';
    }
  }
}