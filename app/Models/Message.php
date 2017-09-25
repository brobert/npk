<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
            'subject', 'message', 'sender_id',
    ];

    public function sender()
    {
        return $this->hasOne('App\Models\User', 'id', 'sender_id');
    }

    public function recipents()
    {
        return $this->belongsToMany('App\Models\User')->withPivot('is_readed');
    }
}
