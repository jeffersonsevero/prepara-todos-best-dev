<?php
namespace Tests\Feature;

use App\services\GithubServices;
use Tests\TestCase;

class GithubApiTest extends TestCase
{



    public function test_if_api_github_is_working()
    {

        $github = new GithubServices();

        $dev = $github->getUsers()[0];

        $this->assertIsArray($dev);
        $this->assertArrayHasKey('login', $dev);

    }



}
