<?php

namespace App\Http\Helpers;

use App\Models\User;

class IncludeHelper
{
  protected $model;

  /**
   * Create a new message instance.
   *
   * @param \App\Http\Helpers\ModelHelper $modelHelper
   * @return void
   */
  public function __construct(ModelHelper $modelHelper)
  {
    $this->model = $modelHelper;
  }

  /**
   * Instance to return dashboard view
   *
   * @param string $type
   * @param mixed $message
   * @return \Illuminate\View\View
   */
  public function dashboardView($type, $message)
  {
    $user = User::where('username', auth()->user()->username)->first();

    if ($user->isAdmin()) {
      return redirect()->route('admin.dashboard')->with($type, $message);
    } else {
      return redirect()->route('user.home')->with($type, $message);
    }
  }
}