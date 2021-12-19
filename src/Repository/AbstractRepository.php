<?php
/*
 * This file is part of the TEST Project.
 *
 * (c) Hamza El Ghoul <elghoulhamzaa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\Repository;

use http\Client\Request;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Contracts\HttpClient\HttpClientInterface;

abstract class AbstractRepository
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    protected function getUri()
    {
        return 'https://v3.football.api-sports.io/';
    }

    protected function apiKey()
    {
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__ . "/../../.env");

        return 'api_key=' . $_ENV['api_key'];
    }


    protected function getResponse(string $endpoint = 'live', string $option = 'all')
    {

        $response = $this->client->request('GET', $this->getUri() . 'fixtures', [
            // these values are automatically encoded before including them in the URL
            'query' => array(
                $endpoint => $option,
            ),
            'headers' => array(
                'x-rapidapi-host' => 'v3.football.api-sports.io',
                'x-rapidapi-key' => $this->apiKey()
            ),
        ]);
//        dd( json_decode($response->getContent(), true));
        return json_decode($response->getContent(), true);

    }
    protected function getHOHResponse( $idHome, $idAway)
    {
    $hoh = $idHome . '-' . $idAway;

//    dd($hoh, $idAway, $idHome);
        $response = $this->client->request('GET', $this->getUri() . 'fixtures/headtohead', [
            // these values are automatically encoded before including them in the URL
            'query' => array(
                'h2h' => $hoh,
            ),
            'headers' => array(
                'x-rapidapi-host' => 'v3.football.api-sports.io',
                'x-rapidapi-key' => $this->apiKey()
            ),
        ]);
//        dd( json_decode($response->getContent(), true));
        return json_decode($response->getContent(), true);

    }

}

