<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class Authenticate extends Component
{

    public $email, $password, $validate;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function authenticate()
    {
         $this->validate();
       if(Auth::attempt($this->validate()))
       {
            session()->regenerate();
            return redirect()->route('user.create');
       }

       return back()->withErrors([ 'please check email and password' ]);

    }

    public function render()
    {
        return view('livewire.authenticate');
    }
}
