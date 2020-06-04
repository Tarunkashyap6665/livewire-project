<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Register extends Component
{
    public $form=[
        'name'=>'',
        'email'=>'',
        'password'=>'',
        'password_confirmation'=>'',
    ];

    public function updated($field){
        $this->validateOnly($field,[
            'form.name'=>'required|max:20',
            'form.email'=>'required|email|max:30',
            'form.password'=>'required|confirmed|min:4|max:10',
        ]);
    }
    public function submit(){
        $this->validate([
            'form.name'=>'required|max:20',
            'form.email'=>'required|email|max:30',
            'form.password'=>'required|confirmed|min:4|max:10',
        ]);

        User::create($this->form);
        return redirect()->to(route('login'));
    }
    public function render()
    {
        return view('livewire.register');
    }
}
