<div> 
    <div class="card card-boder-primary"  style="width:69%; position:absolute; left:480px; top:0; border-radius:0%; " >
        <div class="card-header" style="background-color:#142F43; border-radius:0%; font-size:30px; color:white">
            {{ optional($chat)->name }}
        </div>
        <div class="card-body" style="background-image:url('images/whatappbackground.png');">
            @forelse($messages as $message)
                <p style="text-align: {{ $message->user_id == auth()->id() ? 'right' : 'left' }}; font-size:20px; ">{{ $message->messages }}</p>
            @empty
                <p>Empty Chat</p>
            @endforelse
        </div>
        @if ($chat)
            <div class="card-footer" wire:poll.1000ms="updateMessages({{ $chat->id }})" style="background-color:#142F43; border-radius=0%;" >
                <input class="form-control" style="width:85%; left:20px; position:absolute; border-radius:24px;"type="text" wire:model.defer="input">
                <button class="btn btn-info" wire:click="send" style="position:relative; left:90%; top:0px; padding-left:30px;padding-right:30px;"><img src="images/send1.png" style="width:20px;"></button>
            </div>
        @endif
    </div>
   
</div>
