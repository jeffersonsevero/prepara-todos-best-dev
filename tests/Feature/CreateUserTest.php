<?php

use App\Http\Livewire\UserCreate;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CreateUserTest extends TestCase
{



    public function test_create_user()
    {

        $this->actingAs(User::factory()->admin()->create());

        Livewire::test(UserCreate::class)
            ->set('name', 'Jefferson Severo')
            ->set('email', 'jeffersonsevero@gmail.com')
            ->set('password', '123456')
            ->call('create');


        $this->assertTrue(User::where('email', 'jeffersonsevero@gmail.com')->exists());

    }




    public function test_if_input_name_is_required()
    {


        $user = User::where('role', 1)->first();
        $user->delete();

        $this->actingAs(User::factory()->admin()->create());

        Livewire::test(UserCreate::class)
            ->set('name', '')
            ->set('email', 'jeffersonsevero@gmail.com')
            ->set('password', '123456')
            ->call('create')
            ->assertHasErrors(['name' => 'required']);

    }



    public function test_if_input_mail_is_invalid()
    {

        $user = User::where('role', 1)->first();
        $user->delete();

        $this->actingAs(User::factory()->admin()->create());

        Livewire::test(UserCreate::class)
            ->set('name', 'jeff')
            ->set('email', 'jeff')
            ->set('password', '123456')
            ->call('create')
            ->assertHasErrors(['email' =>  'email']);

    }


    public function test_if_input_password_is_required()
    {

        $user = User::where('role', 1)->first();
        $user->delete();

        $this->actingAs(User::factory()->admin()->create());

        Livewire::test(UserCreate::class)
            ->set('name', 'jefferson severo')
            ->set('email', 'jeff@gmail.com')
            ->set('password', '')
            ->call('create')
            ->assertHasErrors(['password' =>  'required']);

    }





}
