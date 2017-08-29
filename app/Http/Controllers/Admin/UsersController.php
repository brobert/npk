<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Log;

use App\Models\User;

class UsersController extends AdminController
{


    public function index( Request $request ) {
        $this->set_view('admin.users.list');

        $hiddenFlags = [0,1];
        $users = User::whereIn('hidden', $hiddenFlags)->get();

        $this->set_data('users', $users);

        return $this->render_view();
    }

}
