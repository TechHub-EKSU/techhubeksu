<?php

namespace App\Http\Helpers;

use App\Models\User;

class ModelHelper
{
  /**
   * Instance to return user
   *
   * @param string $email
   * @return \App\Models\User $user
   */
  public function getUser($email)
  {
    $user = User::where('email', $email)->first();

    return $user;
  }
}