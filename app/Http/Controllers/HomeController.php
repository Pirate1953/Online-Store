<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  /**
   * Determines if the authenticated user is admin
   *
   * @return True if admin, false otherwise
   */
  public static function isAdmin()
  {
    if (auth()->check()) {
      $admin_role = DB::table('roles')->where('name', '=', 'admin')->value('id');
      return auth()->user()->role_id === $admin_role ? true : false;
    }
  }

  /**
   * Determines if the authenticated user is moderator
   *
   * @return True if moderator, false otherwise
   */
  public static function isModerator()
  {
    if (auth()->check()) {
      $mod_role = DB::table('roles')->where('name', '=', 'moderator')->value('id');
      return auth()->user()->role_id === $mod_role ? true : false;
    }
  }

  /**
   * Determines if the authenticated user is user
   *
   * @return True if user, false otherwise
   */
  public static function isUser()
  {
    if (auth()->check()) {
      $user_role = DB::table('roles')->where('name', '=', 'user')->value('id');
      return auth()->user()->role_id === $user_role ? true : false;
    }
  }

  /**
   * Redirects admin to admin main page, moderator to moderator main page and user to user main page
   *
   * @param $request - request
   * @return Redirect to main pages
   */
  public function determineHomePage(Request $request)
  {
    if ($this->isAdmin()) {
      return redirect()->route('admin.index');
    }
    if ($this->isModerator()) {
      return redirect()->route('moderator.index');
    }
    else {
      return redirect()->route('user.index');
    }
  }
}
