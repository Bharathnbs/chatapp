<div> 
    <div class="card"  style="max-width:70%;" >
        <div class="card-header">
            {{ optional($chat)->name }}
        </div>
        <div class="card-body">
            @forelse($messages as $message)
                <p style="text-align: {{ $message->user_id == auth()->id() ? 'right' : 'left' }}">{{ $message->messages }}</p>
            @empty
                <p>Empty Chat</p>
            @endforelse
        </div>
        @if ($chat)
            <div class="card-footer" wire:poll.1000ms="updateMessages({{ $chat->id }})">
                <input class="form-control" style="width:80%"type="text" wire:model.defer="input">
                <button class="btn btn-primary" wire:click="send">send</button>
            </div>
        @endif
    </div>
   
</div>
