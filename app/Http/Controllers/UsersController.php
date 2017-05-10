<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request) {
        return view('users.index');
    }

    public function edit( Request $request ) {
        return view('users.form');
    }
}
