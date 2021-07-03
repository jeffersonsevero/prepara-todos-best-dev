<?php

namespace App\Http\Livewire;

use App\services\GithubServices;
use Illuminate\Support\Collection;
use Livewire\Component;

class ShowDevs extends Component
{

    private $github;

    /**@var Collection */
    public $users;

    public function mount()
    {
        $this->github = new GithubServices();
        $this->users = collect($this->github->getUsers());
    }


    public function render()
    {
        return view('livewire.show-devs');
    }
}
