<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller {
  function index() {
    return User::all();
  }

  function self() {
    return Auth::user();
  }
}
