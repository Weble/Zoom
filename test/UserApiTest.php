<?php

namespace Weble\Zoom\Test;

use PHPUnit\Framework\TestCase;

class UserApiTest extends TestCase
{
    /** @test */
    public function generates_oauth_token()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        // @see https://marketplace.zoom.us/docs/guides/build/server-to-server-oauth-app/
        $account_id = $_ENV['ACCOUNT_ID'] ?? null;
        $apiKey = $_ENV['API_KEY'] ?? null;
        $apiSecret = $_ENV['API_SECRET'] ?? null;


        // Valid for 1 hour.
        $oauth_token = \Weble\Zoom\OAuth::generateToken($apiKey, $apiSecret, $account_id);

        $config = \Weble\Zoom\Configuration::getDefaultConfiguration()->setAccessToken($oauth_token);
        $apiInstance = new \Weble\Zoom\Api\UsersApi(
            new \GuzzleHttp\Client(),
            $config
        );

        $users = $apiInstance->users();
        $this->assertCount(1, $users->getUsers());
    }
}
