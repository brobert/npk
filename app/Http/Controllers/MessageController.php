<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources\MessageResource;

class MessageController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MessageResource $message_resource) {
        $this->middleware('auth');
        $this->resource = $message_resource;
        $this->set_view('messages.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        $messages = $this->resource->get_incoming_messages($request);

        $this->set_data('messages', $messages);

        return $this->render_view();
    }

    public function outbox(Request $request)
    {
        $messages = $this->resource->get_outgoing_messages();

        $this->set_data('messages', $messages);

        return $this->render_view();
    }

    public function draft(Request $request)
    {
        $messages = $this->resource->get_draft_messages();

        $this->set_data('messages', $messages);

        return $this->render_view();
    }

    public function view(Request $request, $messageid)
    {
        return [$messageid];
    }
}
