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
    public $avatar;
    public $githubLink;
    public $page = 0;





    public function mount()
    {
    }


    public function render()
    {
        $this->github = new GithubServices();

        $this->users = collect($this->github->getUsers($this->page));



        return view('livewire.show-devs');
    }



    public function setDev(string $dev)
    {

        $github = new GithubServices();

        $dev = (object) $github->getUser($dev);


        $this->devName = $dev->login;
        $this->qtdRepo = $dev->public_repos;
        $this->followers = $dev->followers;
        $this->avatar = $dev->avatar_url;
        $this->githubLink = $dev->html_url;

        $this->showDevModal = true;
    }



    public function increment()
    {
        if($this->page < 5)
        {
            $this->page++;
        }
    }

    public function decrement()
    {

        if($this->page >= 0){

            $this->page--;
        }

    }




}
