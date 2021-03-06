<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class LegalController extends Controller
{
  /**
   * Show the terms & conditions page.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function terms()
  {
    return view('web.pages.legal.terms');
  }

  /**
   * Show the privacy policy page.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function privacy()
  {
    return view('web.pages.legal.privacy');
  }

  /**
   * Show the cookies policy page.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function cookie()
  {
    return view('web.pages.legal.cookie');
  }
}