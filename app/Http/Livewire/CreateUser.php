<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{
    public $name, $email, $password, $phone, $password_confirmation;

    protected $rules =[
      'name' => 'required' ,
      'email' => 'required|email',
      'phone' => 'required|max:10', 
      'password' => 'required|confirmed',
      'password_confirmation' =>'required',
      
    ];

    public function submit()
    {
       $this->validate();
    
        {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'password' => bcrypt($this->password),
            ]);

        }
        
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
