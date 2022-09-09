<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Chatapp extends Component
{
    public $title = 'Chat App';
   
    public function logout()
    {
        auth()->logout();
    }

    public function render()
    {
        return view('livewire.chatapp');
    }
}
