<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Displays user index view
   *
   * @param $request - request
   * @return Render of user index view
   */
  public function index(Request $request)
  {
    if (HomeController::isUser()) {
      $role_name = DB::table('roles')->where('name', '=', 'user')->value('name');
      return view('user.index', ['role' => $role_name]);
    }
    else {
      abort(403);
    }
  }
}
