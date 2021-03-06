<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  /**
   * Show the about page
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function about()
  {
    return view('web.pages.about.about');
  }

  /**
   * Show the team page
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function team()
  {
    return view('web.pages.about.team');
  }
}