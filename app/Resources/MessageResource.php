<?php
namespace App\Resources;

use Auth;
use App\Models\Message;

class MessageResource extends BasicResource {

    /**
     * Create UnitRepository instance.
     *
     * @param App\Models\Theme $theme
     * @return void
     */
    public function __construct(Message $model) {
        $this->model = $model;
    }


    public function get_incoming_messages( $request, $per_page = 20)
    {
        return $this->model
            ->with('sender', 'recipents')
            ->wherein('status', ['sended'])
            ->whereHas(
                'recipents',
                function ($query)
                {
                    $query
                        ->where('user_id', Auth::user()->id)
                        ->wherein('status', ['new','readed'])
                        ->where('message_user.deleted_at', '=', null);
                }
            )
            ->orderBy('created_at', 'desc')
            ->paginate($per_page);
    }

    public function get_outgoing_messages()
    {
        return $this->model->with('sender', 'recipents')
        ->where('status', 'sended')
        ->where('sender_id', Auth::user()->id)
        ->orderBy('created_at', 'desc')
        ->paginate();
    }

    public function get_draft_messages()
    {
        return $this->model->with('sender', 'recipents')
        ->where('status', 'draft')
        ->where('sender_id', Auth::user()->id)
        ->orderBy('created_at', 'desc')
        ->paginate();
    }

    public function get_deleted_messages()
    {
        return $this->model
        ->with('sender', 'recipents')
        ->wherein('status', ['sended'])
        ->whereHas(
                'recipents',
                function ($query)
                {
                    $query
                    ->where('user_id', Auth::user()->id)
                    ->where('message_user.deleted_at', '<>', null);
        }
        )
        ->orderBy('created_at', 'desc')
        ->paginate();
    }

    public function get_message($messageid)
    {
        return $this->model
        ->with('sender', 'recipents')
        ->where('id', $messageid)
        ->where('sender_id', Auth::user()->id)
        ->orWhereHas(
                'recipents',
                function ($query)
                {
                    $query
                    ->where('user_id', Auth::user()->id);
        }
        )
        ->find($messageid)
        ;
    }
}