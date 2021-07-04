<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowUsers extends Component
{


    public $name;
    public $email;
    public $password;
    public $user;

    public $showEditModal = false;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];



    public function render()
    {

        $users = User::orderBy('created_at', 'desc')->where('id', '<>', Auth::user()->id)->paginate(8);


        return view('livewire.show-users', [
            'users' => $users
        ]);
    }



    public function edit(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->showEditModal = true;

    }


    public function update()
    {
        $this->validate();

        $this->user->name = $this->name;
        $this->user->email = $this->email;

        if($this->password)
        {
            $this->user->password = bcrypt($this->password);
        }

        $this->user->save();

        session()->flash('message', 'Usuário atualizado com sucesso :)');

        $this->clearFields();

    }



    public function delete(User $user)
    {

        $this->user = $user;

        $this->user->delete();


    }










    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }



}
