<?php

namespace App\Http\Livewire\Room;

use App\Events\Room\MessageAdded;
use App\Models\Room;
use Livewire\Component;

class NewMessage extends Component
{
    public $message;

    public $room;


    //rules
    protected $rules = [
        'message' => 'required|min:3'
    ];

    public function room(Room $room)
    {
        $this->room = $room;
    }


    //validate
    public function newMessage()
    {
        $this->validate();

        $message = $this->room->messages()->create([
            'body' => $this->message,
            'user_id' => auth()->user()->id
        ]);


        //put the event with emit method
        $this->emit('message.added' , $message->id);
        broadcast(new MessageAdded($this->room->id , $message->id))->toOthers();

        $this->message = '';
    }

    public function render()
    {
        return view('livewire.room.new-message');
    }
}
