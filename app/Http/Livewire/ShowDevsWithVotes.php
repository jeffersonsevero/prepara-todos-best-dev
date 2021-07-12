<?php

namespace App\Http\Livewire;

use App\abs\Profiles\ProfileFactory;
use App\Models\DevProfile;
use Livewire\Component;

class ShowDevsWithVotes extends Component
{

    public $profile;




    public function render()
    {

        $devs = ProfileFactory::create($this->profile)->getDevs();


        return view('livewire.show-devs-with-votes', ['devs' => $devs  ] );
    }








}
