<?php

namespace App\Http\Livewire;

use App\Models\DevProfile;
use App\services\GithubServices;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
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
    public $profile;




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





    public function vote($devName)
    {


        if($this->hasProfile($devName))
        {
            session()->flash('message-error', 'Esse dev já foi avaliado!');
            return;
        }

        $profile = new DevProfile();
        $profile->dev = $devName;
        $profile->profile = $this->profile;
        $profile->avatar = $this->avatar;
        $profile->github_url = $this->githubLink;
        $profile->user_id = Auth::user()->id;

        $profile->save();
        session()->flash('message', 'Avaliação enviada com sucesso! :)');


    }



    private function hasProfile($dev): bool
    {
        $profile = DevProfile::where('dev', $dev)->get();

        if(count($profile) > 0)
        {
            return true;
        }

        return false;
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
