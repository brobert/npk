<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Log;

use Auth;
use App\Models\User;

class UsersController extends AdminController
{


    public function index( Request $request ) {
        $this->set_view('admin.users.list');

        $hiddenFlags = [0];
        if (Auth::user()->hidden) {
            // show also hidden users
            array_push( $hiddenFlags, 1 );
        }
        $users = User::whereIn('hidden', $hiddenFlags)
            ->orderBy('name', 'asc')
            ->orderBy('surname', 'asc')
            ->paginate(20);


        $users->appends(['filters' => ['hidden' => 1 ]]);
        $this->set_data('users', $users);

        $this->set_data('url_params', $request->all());

        return $this->render_view();
    }

}
