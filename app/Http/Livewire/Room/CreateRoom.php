<?php

namespace App\Http\Livewire\Room;

use App\Events\RoomAdded;
use Livewire\Component;

class CreateRoom extends Component
{
    public $name;


    //rules
    protected $rules = [
        'name' => 'required|min:2|unique:rooms,name'
    ];


    //validate
    public function create()
    {
        $this->validate();


        //create
        auth()->user()->rooms()->create([
            'name' => $this->name,
            'slug' => str_replace(' ' , '-' , $this->name)
        ]);

        //add
        $this->emit('room.added');
        broadcast(new NewMessage())->toOthers();

        $this->name = '';
    }

    public function render()
    {
        return view('livewire.room.create-room');
    }
}
