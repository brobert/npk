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
        $this->page_title = 'Messages';
        $this->set_data('page_title', $this->page_title);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        $messages = $this->resource->get_incoming_messages($request, 20);

        $this->set_data('messages', $messages);
        $this->set_data(
            'aggregates',
            [
                'inbox' => $messages->total(),
            ]
        );
        return $this->render_view();
    }

    /**
     *
     * @method outbox
     * MessageController
     * @param Request $request
     * @return unknown
     */
    public function outbox(Request $request)
    {
        $messages = $this->resource->get_outgoing_messages();

        $this->set_data('messages', $messages);
        $this->set_data(
            'aggregates',
            [
                'outbox' => $messages->total(),
            ]
        );

        return $this->render_view();
    }

    /**
     *
     * @method draft
     * MessageController
     * @param Request $request
     * @return unknown
     */
    public function draft(Request $request)
    {
        $messages = $this->resource->get_draft_messages();

        $this->set_data('messages', $messages);
        $this->set_data(
            'aggregates',
            [
                'draft' => $messages->total(),
            ]
        );
        return $this->render_view();
    }

    /**
     *
     * @method deleted
     * MessageController
     * @param Request $request
     * @return unknown
     */
    public function deleted(Request $request)
    {
        $messages = $this->resource->get_deleted_messages();

        $this->set_data('messages', $messages);
        $this->set_data(
            'aggregates',
            [
                'trash' => $messages->total(),
            ]
        );
        return $this->render_view();
    }

    /**
     *
     * @method view
     * MessageController
     * @param Request $request
     * @param Integer $messageid
     * @return \App\Http\Controllers\Integer[]
     */
    public function show_message(Request $request, $id)
    {
        $this->set_data('message', $this->resource->get_message($id));

        $this->set_view('messages.show_message');

        return $this->render_view();
    }
}
