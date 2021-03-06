<?php

namespace App\Http\Controllers\Auth;

use App\Http\Helpers\IncludeHelper;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */
  use AuthenticatesUsers;

  /**
   * Create a new controller instance.
   *
   * @param \App\Http\Helpers\IncludeHelper $includeHelper
   * @return void
   */
  public function __construct(IncludeHelper $includeHelper)
  {
    $this->helper = $includeHelper;
    $this->middleware('guest')->except('logout');
  }

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  public function authenticated()
  {
    return $this->helper->dashboardView('toast_success', __('Welcome! ' . auth()->user()->name . '.'));
  }

  /**
   *Instance to login with Email or Username
   * 
   * @return $field
   */
  public function username()
  {
    $field = (filter_var(request()->email, FILTER_VALIDATE_EMAIL) || !request()->email) ? 'email' : 'username';
    request()->merge([$field => request()->email]);
    
    return $field;
  }
}