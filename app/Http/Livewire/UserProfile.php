<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfile extends Component
{


    public $name;
    public $email;
    public $password;


    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function mount()
    {
        $this->email = Auth::user()->email;
        $this->name = Auth::user()->name;

    }


    public function render()
    {

        return view('livewire.user-profile', [
            'user' => Auth::user()
        ]);
    }



    public function update()
    {
        $this->validate();

        $user = Auth::user();

        $user->name = $this->name;
        $user->email = $this->email;

        if($this->password)
        {
            $user->password = $this->password;
        }

        $user->save();

        session()->flash('message', 'Usuário atualizado com sucesso! :)');


    }
}
