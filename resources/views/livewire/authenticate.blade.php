<div>
    
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
    </div>
    @endif

    <label>Email</label><br>
    <input type="text" wire:model.defer="email" ><br>
    <label>Password</label><br>
    <input type="password" wire:model.defer="password" ><br>
    <button wire:click="authenticate">submit</button>
</div>
