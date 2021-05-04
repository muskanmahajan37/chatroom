<form wire:submit.prevent="create" class="flex items-start space-x-2 ">

    Create Your Chat Room :

    {{--   Create  Chat Room --}}
    <div class="flex flex-col">

        <input type="text" wire:model="name" placeholder="chat room name" class="rounded-md p-2 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

    </div>

    {{--   Create  Button --}}
    <button type="submit" class="inline-flex items-center p-3 bg-pink-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-400 active:bg-red-300 focus:outline-none focus:border-red-300 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Create</button>

</form>
