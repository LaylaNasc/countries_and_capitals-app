<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    private $app_data;

    public function __construct() //acessando meus dados que estão em uma array
    {
        $this->app_data = require(app_path('app_data.php'));
    }

    public function showData()
    {
        return response()->json($this->app_data);
    }
}
