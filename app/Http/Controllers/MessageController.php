<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Message $messages) {
        $this->middleware('auth');
        $this->model = $messages;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->set_data('messages', $this->model->with('sender', 'recipents')->get());

        $this->set_view('messages.index');

        return $this->render_view();
    }
}
