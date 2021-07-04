<?php
namespace App\services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Exception\HttpException;

class GithubServices {

    private $apiUrl;
    private $apiToken;
    private $githubUser;
    private $endpoint;


    public function __construct()
    {
        $this->apiUrl =  config('services.github.url');
        $this->apiToken = config('services.github.token');
        $this->githubUser = 'jeffersonsevero';
    }


    public function getUsers( int $page = 0)
    {
        $this->endpoint = '/users';
        try
        {
            $response = Http::withToken($this->apiToken)->get($this->apiUrl . $this->endpoint, [

                "since" => $page,
                "per_page" => 100

            ]);

            return $response->json();

        }
        catch(HttpException $e)
        {
            Log::info("Fail in api GetUsers: {$e->getMessage()} ");
        }

    }

    public function getUser($user)
    {
        $this->endpoint = "/users/{$user}";

        try
        {
            $response = Http::withToken($this->apiToken)->get($this->apiUrl . $this->endpoint);
            return $response->json();
        }
        catch(HttpException $e)
        {
            Log::info("Fail in api getUser: {$e->getMessage()}");
        }

    }

    public function getStars(string $user): int
    {

    }


    public function getPullRequests(string $user): int
    {

    }






}
