<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Message;
use App\Models\Chat;

class ChatBox extends Component
{
    public $chat, $messages = [], $input, $title='chat Box';

    protected $listeners = ['userselected' => 'addChatUser'];

    public function addChatUser($id)
    {  
        $this->chat = Chat::find($id);
        $this->updateMessages($id);
    }

    public function updateMessages($id)
    {
        $this->messages = Message::where('chat_id', $id)->get();        
    }

    public function send()
    {
        $msg = Message::create([
            'chat_id' => $this->chat->id,
            'user_id' => auth()->id(),
            'messages' => $this->input,
        ]);

        $this->messages->push($msg);

        $this->input = null;
        // $this->messages = Message::where('chat_id', $this->chat->id)->get();
    }

    public function render()
    {
        return view('livewire.chat-box');
    }
}