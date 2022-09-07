<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ChatBox extends Component
{
    public $user ;
    public function mount($id)
    {
       $this->user = User::find($id)->get(); 
    }
    public function render()
    {
        return view('livewire.chat-box')->layout('layouts.chatbox');
    }
}
