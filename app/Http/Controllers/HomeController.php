<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources\MessageResource;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        MessageResource $messageRes
    )
    {
        $this->middleware('auth');
        $this->resources = [
            'message' => $messageRes,
        ];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
                'data' => $this->resources['message']->get_incoming_messages($request, 5),
            ],
            [
                'path' => 'presences',
                'data' => [],
            ],
            [
                'path' => 'custom',
                'data' => [],
            ]
        ];

        $this->set_view('home');
        $this->set_data('widgets', $widgets);

        return $this->render_view();
    }
}
