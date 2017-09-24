<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
            'subject', 'message', 'senderid',
    ];

    public function sender()
    {
        return $this->hasOne('App\Models\User', 'id', 'senderid');
    }

    public function recipents()
    {
        return $this->belongsToMany('App\Models\User')->withPivot('read');
    }
}
