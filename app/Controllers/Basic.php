<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Basic extends BaseController
{
  public function index(): string
  {
    $data["title"] = "Basic Page";
    return view("home/index");
  }
}
