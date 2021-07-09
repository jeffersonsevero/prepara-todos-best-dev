<?php
namespace App\abs\Profiles;

use Illuminate\Support\Collection;

interface IProfile
{

    public function getDevs(): Collection;

}
