<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $widgets = [
            [
                'path' => 'payments',
                'data'=> [
                    'cost' => 123,
                ],
            ],
            [
                'path' => 'messages',
                'data'=> [
                ],
            ],
            [
                'path' => 'presences',
                'data' => [],
            ]
        ];

        $this->set_view('home');
        $this->set_data('widgets', $widgets);

        return $this->render_view();
    }
}
