<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    //
    protected $fillable = [
            'subject', 'body', 'sender_id', 'status'
    ];

    /**
     *
     * @method sender
     * Message
     * @return unknown
     */
    public function sender()
    {
        return $this->hasOne('App\Models\User', 'id', 'sender_id');
    }

    /**
     *
     * @method recipents
     * Message
     * @return unknown
     */
    public function recipents()
    {
        return $this->belongsToMany('App\Models\User')->withPivot('status', 'deleted_at');
    }
}
