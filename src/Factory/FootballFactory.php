<?php
/*
 * This file is part of the TEST Project.
 *
 * (c) Hamza El Ghoul <elghoulhamzaa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\Factory;
use App\Entity\Football;

class FootballFactory
{
    public function create(array $response): Football
    {
        $football = new Football();

        if (array_key_exists('fixture', $response)) {
            if (array_key_exists('id', $response['fixture'])) {
                $football->setFixtureId($response['fixture']['id']);
            }
            if (array_key_exists('date', $response['fixture'])) {
                $football->setFixtureDate($response['fixture']['date']);
            }
            if (array_key_exists('timestamp', $response['fixture'])) {
                $football->setFixtureTimestamp($response['fixture']['timestamp']);
            }
            if (array_key_exists('venue', $response['fixture'])) {
                if (array_key_exists('name', $response['fixture']['venue'])){
                    $football->setFixtureVenueName($response['fixture']['venue']['name']);
                }
                if (array_key_exists('city', $response['fixture']['venue'])){
                    $football->setFixtureVenueCity($response['fixture']['venue']['city']);
                }

            }
        }
        if (array_key_exists('league', $response)) {
            if (array_key_exists('name', $response['league'])) {
                $football->setLeagueName($response['league']['name']);
            }
            if (array_key_exists('country', $response['league'])) {
                $football->setLeagueCountry($response['league']['country']);
            }
            if (array_key_exists('logo', $response['league'])) {
                $football->setLeagueLogo($response['league']['logo']);
            }
            if (array_key_exists('flag', $response['league'])) {
                $football->setLeagueFlag($response['league']['flag']);
            }
            if (array_key_exists('season', $response['league'])) {
                $football->setLeagueSeason($response['league']['season']);
            }
            if (array_key_exists('round', $response['league'])) {
                $football->setLeagueRound($response['league']['round']);
            }
        }

        if (array_key_exists('teams', $response)) {
            if (array_key_exists('home', $response['teams'])) {
                if (array_key_exists('id', $response['teams']['home'])) {
                    $football->setTeamsHomeId($response['teams']['home']['id']);
                }
                if (array_key_exists('name', $response['teams']['home'])) {
                    $football->setTeamsHomeName($response['teams']['home']['name']);
                }
                if (array_key_exists('logo', $response['teams']['home'])) {
                    $football->setTeamsHomeLogo($response['teams']['home']['logo']);
                }
                if (array_key_exists('winner', $response['teams']['home'])) {
                    $football->setTeamsHomeWinner($response['teams']['home']['winner']);
                }
                $football->setText($response['teams']['home']['name'] . 'vs'  . $response['teams']['away']['name']);
            }
            if (array_key_exists('away', $response['teams'])) {
                if (array_key_exists('id', $response['teams']['away'])) {
                    $football->setTeamsAwayId($response['teams']['away']['id']);
                }
                if (array_key_exists('name', $response['teams']['away'])) {
                    $football->setTeamsAwayName($response['teams']['away']['name']);
                }
                if (array_key_exists('logo', $response['teams']['away'])) {
                    $football->setTeamsAwayLogo($response['teams']['away']['logo']);
                }
                if (array_key_exists('winner', $response['teams']['away'])) {
                    $football->setTeamsAwayWinner($response['teams']['away']['winner']);
                }
            }
        }
        if (array_key_exists('goals', $response)) {
            if (array_key_exists('home', $response['goals'])) {
                $football->setGoalsHome($response['goals']['home']);
            }
            if (array_key_exists('away', $response['goals'])) {
                $football->setGoalsAway($response['goals']['away']);
            }
        }


        return $football;
    }

}