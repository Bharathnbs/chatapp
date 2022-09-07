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

   
    <label>Name</label><br>
    <input type="text" wire:model="name" ><br>
    <label>Email</label><br>
    <input type="text" wire:model="email" ><br>
    <label>Phone</label><br>
    <input type="text" wire:model="phone" ><br>
    <label>Password</label><br>
    <input type="password" wire:model="password" ><br>
    <label>Conform Password</label><br>
    <input type="password" wire:model="password_confirmation" ><br>
    <button wire:click="submit">submit</button>
</div>
