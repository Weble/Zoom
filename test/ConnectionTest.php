<?php

namespace Weble\Zoom\Test;

use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    /** @test */
    public function generates_oauth_token()
    {
        // @see https://marketplace.zoom.us/docs/guides/build/server-to-server-oauth-app/
        $account_id = $_ENV['ACCOUNT_ID'] ?? null;
        $apiKey = $_ENV['API_KEY'] ?? null;
        $apiSecret = $_ENV['API_SECRET'] ?? null;

        // Valid for 1 hour.
        $oauth_token = \Weble\Zoom\OAuth::generateToken($apiKey, $apiSecret, $account_id);

        $this->assertNotEmpty($oauth_token);
    }
}
