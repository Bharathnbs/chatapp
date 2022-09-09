<div>
    <div class="list-group" style="max-width:30%;">
        <div class="mb-3">
            <input wire:model.defer="user_id" placeholder="Type Userid" class="form-control" type="text">
            <button wire:click="openChat">Start</button>
        </div>
        @foreach($chats as $chat)
            <button class="list-group-item " wire:click="$emitTo('chat-box', 'userselected','{{$chat->id}}')">{{$chat->name}}</button>
        @endforeach
    </div>
</div>
