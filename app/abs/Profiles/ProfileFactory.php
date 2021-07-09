<?php
namespace App\abs\Profiles;

class ProfileFactory
{


    public static function create($profile): IProfile
    {
        if($profile == "ruim")
        {
            return new BadProfile();
        }
        else if($profile == "bom")
        {
            return new GoodProfile();
        }
        else if($profile == "muito-bom")
        {
            return new VeryGoodProfile();
        }
        else if($profile == null || $profile == 'todos')
        {
            return new AllProfile();
        }

    }



}
