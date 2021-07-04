<?php

namespace App\Http\Livewire;

use App\services\GithubServices;
use Illuminate\Support\Collection;
use Livewire\Component;

class ShowDevs extends Component
{

    /**@var GithubServices */
    private $github;

    /**@var Collection */
    public $users;

    public $showDevModal = false;
    public $devName;
    public $qtdRepo;
    public $followers;




    public function mount()
    {
        $this->github = new GithubServices();
        $this->users = collect($this->github->getUsers());
    }


    public function render()
    {
        return view('livewire.show-devs');
    }



    public function setDev(string $dev)
    {

        $github = new GithubServices();

        $dev = $github->getUser($dev);


        $this->devName = $dev['login'];
        $this->qtdRepo = $dev['public_repos'];
        $this->followers = $dev['followers'];

        $this->showDevModal = true;
    }



}
