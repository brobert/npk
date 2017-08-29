<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Renderer;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Renderer;

//     public function __construct() {
//         parent::__construct();
//     }
}
