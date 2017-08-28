<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{


    public function index() {
        $this->set_view('admin.users.list');
        return $this->render_view();
    }

}
