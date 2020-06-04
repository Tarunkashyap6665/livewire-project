<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form=[
        'email'=>'',
        'password'=>'',
    ];

    public function updated($field){
        $this->validateOnly($field,[
            'form.email'=>'required|email|max:30',
            'form.password'=>'required|min:4|max:10',
        ]);
    }
    public function submit(){
        $this->validate([
            'form.email'=>'required|email|max:30',
            'form.password'=>'required|min:4|max:10',
        ]);

        Auth::attempt($this->form);
        return redirect()->to(route('home'));
    }
    public function render()
    {
        return view('livewire.login');
    }
}
