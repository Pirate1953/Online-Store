<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Returns the view with user object from database
   *
   * @param $id - User id to get from database
   * @return Render of view
   */
  public function show($id)
  {
      $user = DB::table('users')->where('id', '=', $id)->value('email');

      return view('hello', ['user' => $user]);
  }
}
