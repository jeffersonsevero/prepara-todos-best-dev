<?php

namespace App\Http\Livewire;

use App\Models\DevProfile;
use Livewire\Component;

class ShowDevsWithVotes extends Component
{

    public $profile;


    public function __construct()
    {

    }




    public function render()
    {

        $devs = $this->getDevsByProfile();


        return view('livewire.show-devs-with-votes', ['devs' => $devs  ] );
    }


    private function getDevsByProfile()
    {

        if($this->profile == "ruim")
        {
            return $devs = DevProfile::badDevProfile()->get();
        }
        else if($this->profile == "bom")
        {
            return $devs = DevProfile::goodDevProfile()->get();
        }
        else if($this->profile == "muito-bom")
        {
            return $devs = DevProfile::veryGoodDevProfile()->get();
        }

        else{
            return $devs = DevProfile::all();
        }

    }








}
