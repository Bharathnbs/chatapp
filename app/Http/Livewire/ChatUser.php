<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\User;
use App\Models\Chat;

class ChatUser extends Component
{
    public  $name, $title = 'Chat App', $chats, $user_id;

    public function mount()
    {
        $chatIds = DB::table('chat_users')->where('user_id', auth()->id())->get()->pluck('chat_id');
        $this->chats = Chat::find($chatIds);
    }

    public function openChat()
    {
        $chat = Chat::create([
            'name' => 'New Chat with B2',
        ]);

        DB::table('chat_users')->insert([
            ['chat_id' => $chat->id, 'user_id' => auth()->id()],
            ['chat_id' => $chat->id, 'user_id' => $this->user_id],
        ]);

        $chatIds = DB::table('chat_users')->where('user_id', auth()->id())->get()->pluck('chat_id');
        $this->chats = Chat::find($chatIds);

        $this->emitTo('chat-box', 'userselected', $chat->id);
    }
 
    public function render()
    {
        return view('livewire.chat-user');
    }
}
