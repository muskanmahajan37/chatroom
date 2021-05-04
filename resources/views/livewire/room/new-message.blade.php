<form wire:submit.prevent="newMessage" class="flex items-start space-x-3">
        <div class="flex flex-col w-full">
            <textarea wire:model="message" class=" group border-pink-200  hover:shadow-lg hover:border-transparent bg-white rounded-lg shadow-lg mb-7 p-2 shadow-lg border-pink400-300 w-full" placeholder="Your Message" name="message" rows="2" widht="100%"></textarea>

            @if($errors->has('message'))
                <span class="text-red-500 text-sm italic">{{ $errors->first('message') }}</span>
            @endif
            
        </div>

        {{--button send--}}
    <button type="submit" class="bg-red-300 text-gray-700 rounded p-2 px-4 italic focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50">send</button>
</form>