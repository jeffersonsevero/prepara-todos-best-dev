<?php
namespace App\abs\Profiles;

use App\Models\DevProfile;
use Illuminate\Support\Collection;

class GoodProfile implements IProfile
{

    public function getDevs(): Collection
    {

        $devs = DevProfile::goodDevProfile()->get();

        return $devs;

    }


}
