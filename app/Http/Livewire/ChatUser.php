<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ChatUser extends Component
{
    public $users, $user_id;

    public function mount()
    {
        $this->users = User::get();
    }
    public function render()
    {
        return view('livewire.chat-user')->layout('layouts.chatuser');
    }
}
