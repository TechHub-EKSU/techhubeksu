<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
  /**
   * Show the index page
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    return view('web.index');
  }

  /**
   * Show the contact page
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function contact()
  {
    return view('web.pages.contact');
  }
}