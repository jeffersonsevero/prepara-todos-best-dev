<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{

    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];




    public function render()
    {
        return view('livewire.user-create');
    }


    public function create()
    {
        $this->validate();

        if($this->hasEmail($this->email))
        {
            session()->flash('message-error', 'Ooops, esse email já está em uso! :/');
            return;
        }

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->role = 2;

        $user->save();

        session()->flash('message', 'Usuário criado com sucesso :)');

    }


    private function hasEmail(string $email): bool
    {
        $user = User::where('email', $email)->first();

        if($user)
        {
            return true;
        }

        return false;
    }
}
