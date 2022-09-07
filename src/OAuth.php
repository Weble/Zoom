<?php

namespace Weble\Zoom;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Retrieves a Server2Server OAuth token from Zoom.
 *
 * @see https://marketplace.zoom.us/docs/guides/build/server-to-server-oauth-app/
 */
class OAuth
{

    public const ZOOM_OATH_URL = 'https://zoom.us/oauth/token?grant_type=account_credentials';

    /**
     * Generates a Server2Server OAuth token from Zoom API.
     *
     * @param string $apiKey
     *   The API key.
     * @param string $apiSecret
     *  The API secret.
     * @param string $accountId
     *  The account ID.
     *
     * @return string
     *   The OAuth token.
     *
     * @throws GuzzleException
     * @throws Exception
     */
    public static function generateToken(string $apiKey, string $apiSecret, string $accountId, ?ClientInterface $client = null)
    {
        $client = $client ?: new Client();

        $response = $client->post(self::ZOOM_OATH_URL . '&account_id=' . $accountId, [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($apiKey . ':' . $apiSecret),
            ]
        ]);

        $response_raw = $response->getBody()->getContents();

        if (empty($response_raw)) {
            throw new Exception('Failed to generate token, probably invalid key and secret were provided.');
        }

        $response = json_decode($response_raw, true, 512, JSON_THROW_ON_ERROR);
        if (empty($response)) {
            throw new Exception('Failed to generate token: ' . $response_raw);
        }

        if (empty($response['access_token'])) {
            throw new Exception('Unable to generate OAuth token: ' . serialize($response));
        }

        return $response['access_token'];
    }

}
