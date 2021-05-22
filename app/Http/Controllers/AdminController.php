<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;

class AdminController extends Controller
{
  /**
   * Displays admin index view
   *
   * @param $request - request
   * @return Render of admin index view
   */
  public function index(Request $request)
  {
      if (HomeController::isAdmin()) {
        $role_name = DB::table('roles')->where('name', '=', 'admin')->value('name');
        return view('admin.index', ['role' => $role_name]);
      }
  }
}
