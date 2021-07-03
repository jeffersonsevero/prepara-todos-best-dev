<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;




class ShowUsers extends Component
{




    public function render()
    {

        $users = User::orderBy('created_at')->paginate(10);


        return view('livewire.show-users', [
            'users' => $users
        ]);
    }
}
