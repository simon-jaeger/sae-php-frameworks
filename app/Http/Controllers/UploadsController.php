<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class UploadsController extends Controller {
  function read() {
    return Storage::get('file.txt');
  }

  function create() {
    Storage::put('file.txt', \Str::random());
  }

  function delete() {
    Storage::delete('file.txt');
  }
}
