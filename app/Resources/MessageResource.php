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


    public function get_incoming_messages()
    {
        return $this->model->with('sender', 'recipents')->whereHas('recipents', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })
        ->orderBy('created_at', 'desc')
        ->paginate();
    }

    public function get_outgoing_messages()
    {
        return $this->model->with('sender', 'recipents')
        ->where('sender_id', Auth::user()->id)
        ->orderBy('created_at', 'desc')
        ->paginate();
    }
}