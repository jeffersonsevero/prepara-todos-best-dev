<?php
namespace App\abs\Profiles;

use App\abs\Profiles\IProfile;
use App\Models\DevProfile;
use Illuminate\Support\Collection;

class AllProfile implements IProfile
{

    public function getDevs(): Collection
    {

        $devs = DevProfile::all();

        return $devs;

    }


}
