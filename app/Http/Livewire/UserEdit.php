<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{

    public $user_id;
    protected $queryString = ['user_id'];



    public function render()
    {

        $user = User::find($this->user_id);

        return view('livewire.user-edit', ['user' => $user]);
    }
}
