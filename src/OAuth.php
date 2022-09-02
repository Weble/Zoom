<?php

namespace Weble\Zoom;

use \Exception;

/**
 * Retrieves a Server2Server OAuth token from Zoom.
 *
 * @see https://marketplace.zoom.us/docs/guides/build/server-to-server-oauth-app/
 */
class OAuth {

  const ZOOM_OATH_URL = 'https://zoom.us/oauth/token?grant_type=client_credentials';

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
   * @throws \Exception
   */
  public static function generateToken(string $apiKey, string $apiSecret, string $accountId) {
    $ch = curl_init(self::ZOOM_OATH_URL . '&account_id=' . $accountId);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'Authorization: Basic ' . base64_encode($apiKey . ':' . $apiSecret),

    ]);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    $response_raw = curl_exec($ch);
    curl_close($ch);
    if (empty($response_raw)) {
      throw new Exception('Failed to generate token, probably invalid key and secret were provided.');
    }
    $response = json_decode($response_raw, TRUE);
    if (empty($response)) {
      throw new Exception('Failed to generate token: ' . $response_raw);
    }
    if (empty($response['access_token'])) {
      throw new Exception('Unable to generate OAuth token: ' . serialize($response));
    }
    return $response['access_token'];
  }

}
