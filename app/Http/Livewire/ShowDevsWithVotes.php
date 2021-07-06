<?php

namespace App\Http\Livewire;

use App\Models\DevProfile;
use Livewire\Component;

class ShowDevsWithVotes extends Component
{

    public $profile;


    public function render()
    {


        if($this->profile == "ruim")
        {
            $devs = DevProfile::doomDev()->get();
        }
        else if($this->profile == "bom")
        {
            $devs = DevProfile::goodDev()->get();
        }
        else if($this->profile == "muito-bom")
        {
            $devs = DevProfile::veryGoodDev()->get();
        }

        else{
            $devs = DevProfile::all();
        }



        return view('livewire.show-devs-with-votes', ['devs' => $devs  ] );
    }








}
