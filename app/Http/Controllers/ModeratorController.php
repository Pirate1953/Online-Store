<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;

class ModeratorController extends Controller
{
  /**
   * Displays moderator index view
   *
   * @param $request - request
   * @return Render of moderator index view
   */
  public function index(Request $request)
  {
    if (HomeController::isModerator()) {
      $role_name = DB::table('roles')->where('name', '=', 'moderator')->value('name');
      return view('moderator.index', ['role' => $role_name]);
    }
    else {
      abort(403);
    }
  }
}
