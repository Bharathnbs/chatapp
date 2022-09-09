<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class Authenticate extends Component
{

    public $email, $password, $validate, $title='Login Page';

    protected $rules = [
        'email' => 'required|email|exists:users,email',
        'password' => 'required',
    ];

    public function authenticate()
    {
        $validated = $this->validate();
        
        if(Auth::attempt($validated)) {
            session()->regenerate();
            return redirect()->route('app');
        } else {
            $this->addError('password', 'Password mismatch');
        }

       return back()->withErrors([ 'please check email and password' ]);

    }

    public function render()
    {
        return view('livewire.authenticate');
    }
}
