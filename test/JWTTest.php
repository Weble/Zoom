<?php


namespace Weble\Zoom\Test;


use DateInterval;
use DateTime;
use Firebase\JWT\JWT;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Weble\Zoom\Api\UsersApi;
use Weble\Zoom\Configuration;

class JWTTest extends TestCase
{
    private $config;

    protected function setUp(): void
    {
        parent::setUp();

        $apiKey = "";
        $apiSecret = "";

        $payload = array(
            "iss" => $apiKey,
            "exp" => (int) (new DateTime())->add(new DateInterval('PT60M'))->format('U'),
        );

        $jwt = JWT::encode($payload, $apiSecret);
        $this->config = Configuration::getDefaultConfiguration()->setAccessToken($jwt);
    }

    /** @test */
    public function can_create_client()
    {
        $apiInstance = new UsersApi(
            new Client(),
            $this->config
        );

        $users = $apiInstance->users();
        $this->assertGreaterThan(0, $users->getTotalRecords());
    }
}
