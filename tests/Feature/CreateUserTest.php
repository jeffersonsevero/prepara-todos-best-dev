<?php

use App\Models\User;
use Livewire\Livewire;
use Tests\TestCase;

class CreateUserTest extends TestCase
{



    public function test_create_user()
    {

        $user = User::factory()->create();

        $this->actingAs($user);

        Livewire::test()




    }




    public function test_if_input_name_is_required()
    {



    }


    public function test_if_unput_name_has_6_caracteres()
    {

    }


    public function test_if_input_mail_is_a_valid_email()
    {

    }


    public function test_if_input_password_is_required()
    {

    }





}
