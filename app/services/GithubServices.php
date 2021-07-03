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
        $this->apiUrl = 'https://api.github.com';
        $this->apiToken = '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';
        $this->githubUser = 'jeffersonsevero';
    }


    public function getUsers( int $page = 2)
    {
        $this->endpoint = '/users';

        try
        {
            $response = Http::withToken($this->apiToken)->get($this->apiUrl . $this->endpoint, [

            ]);
            return $response->json();

        }
        catch(HttpException $e)
        {
            Log::info("Fail in api GetUsers: {$e->getMessage()} ");
        }

    }

    public function getUser(string $user): object
    {
        $this->endpoint = "/users/{$user}";

        try
        {
            $response = Http::withToken($this->apiToken)->get($this->apiUrl . $this->endpoint);
            return $response->object();
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
