<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['name' ,'slug'];


    //Message
    public function messages()
    {
        return $this->hasMany(Message::class);
    }


    //User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function path()
    {
        return route('single.room' , $this->slug);
    }
}
