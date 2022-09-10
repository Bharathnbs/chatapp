<div>
    <div class="list-group" style="max-width:30%; border-radius:0%;" >
        <div class="mb-3">
            <input wire:model.defer="user_id" placeholder="Type Userid" class="form-control" type="text" style="width:26%; border-radius:0%; padding:10px; position:absolute; background-color:#142F43;color:white;">
            <button class="btn btn-primary"wire:click="openChat" style="position:absolute; left: 408px; top:0px; rigth:20px; border-radius:0%; padding:10px;">search</button>
        </div>
        <div class="list-of-container">
            @foreach($chats as $chat)
                <button class="list-group-item " wire:click="$emitTo('chat-box', 'userselected','{{$chat->id}}')" style=" top:30px; border-radius:0%; width:474px; padding:20px;">{{$chat->name}}</button>
                <button class="btn btn-danger" wire:click="delete({{$chat->id}})" style="position:absolute; left:400px; margin-top:-20px; border-radius:50%;">X</button>
            @endforeach
        </div>
    </div>
</div>
