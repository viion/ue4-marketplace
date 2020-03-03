<?php

namespace MarketPlace\API;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class UE4Client
{
    /** @var Client */
    private $client;

    function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://www.unrealengine.com',
            'timeout'  => 8.0,
            'verify'   => false,
        ]);
    }

    /**
     * Perform a generic request against the API
     */
    protected function request(string $url, array $options = [])
    {
        $req = $this->client->get($url, [
            RequestOptions::QUERY => $options
        ]);

        $response = \GuzzleHttp\json_decode(
            $req->getBody()->getContents()
        );

        if ($response->status != "OK") {
            throw new \Exception("Response was not OK from the UE Marketplace API");
        }

        return $response->data;
    }
}
