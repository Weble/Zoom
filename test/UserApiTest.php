<?php

namespace Weble\Zoom\Test;

use PHPUnit\Framework\TestCase;

class UserApiTest extends TestCase
{
    /** @test */
    public function generates_oauth_token()
    {
        // @see https://marketplace.zoom.us/docs/guides/build/server-to-server-oauth-app/
        $account_id = 'vCGX5uzaQKSwVnDApR2TzQ';
        $apiKey = "BWbLI2YpQFqPXEULUPxbCg";
        $apiSecret = "swsJ337bokb5uQmdgVidTOxvX0wTlf3N";


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
