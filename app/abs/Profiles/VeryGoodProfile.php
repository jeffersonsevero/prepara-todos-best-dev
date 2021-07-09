<?php
namespace App\abs\Profiles;

use App\Models\DevProfile;
use Illuminate\Support\Collection;

class VeryGoodProfile implements IProfile
{

    public function getDevs(): Collection
    {

        $devs = DevProfile::veryGoodDevProfile()->get();

        return $devs;

    }


}
