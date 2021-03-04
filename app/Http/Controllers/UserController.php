<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Returns the user object that contains user from the database
   *
   * @param $id - User id to get from database
   * @return User object
   */
  public function show($id)
  {
      $user = DB::table('users')->where('id', '=', $id)->value('email');

      return view('hello', ['user' => $user]);
  }
}
