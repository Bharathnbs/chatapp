<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{
    public $name, $email, $password, $phone ;

    protected $rules =[
      'name' => 'required' ,
      'email' => 'required|email',
      'password' => 'required',
      'phone' => 'required|max:10', 
    ];

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'phone' => $this->phone,
        ]);
        
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
