<div class="max-w-7xl mx-auto ">
    <div class=" shadow rounded-lg mt-10 p-4 space-y-4  flex flex-col bg-gradient-to-r from-purple-100 via-pink-200 to-red-100 italic" style="height: 700px;">
      
        <div class="border-b border-gray-200 pb-4">
            <h1 class="text-2xl font-bold ">CHATROOM : {{ $room->name }}</h1>
        </div>

        <div class="flex h-full">
           
            <div class="w-9/12 flex flex-col justify-between">
                <livewire:room.messages :room="$room" :messages="$messages" />

                <livewire:room.new-message :room="$room"/>
            </div>

        </div>
        
    </div>
</div>
