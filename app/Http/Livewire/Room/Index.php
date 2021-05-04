<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Index extends Component
{

    //refresh
    protected $listeners = [
        'room.added' => '$refresh',
        'echo-private:room.added,Room\\RoomAdded' => '$refresh'
    ];

    public function render()
    {
        $rooms = Room::latest()->paginate(50);
        return view('livewire.room.index' , compact('rooms'));
    }
}
