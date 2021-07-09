<?php
namespace App\abs\Profiles;

use App\Models\DevProfile;
use Illuminate\Support\Collection;

class BadProfile implements IProfile
{

    public function getDevs(): Collection
    {

        $devs = DevProfile::badDevProfile()->get();

        return $devs;

    }


}
