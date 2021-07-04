<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{


    public $name;
    public $email;
    public $password;



    public function render()
    {

        $users = User::orderBy('created_at', 'desc')->paginate(8);


        return view('livewire.show-users', [
            'users' => $users
        ]);
    }



}
