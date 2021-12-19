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
use App\Entity\HeadToHead;

class HeadToHeadFactory
{

    public function create(array $response): HeadToHead
    {
        $headToHead = new HeadToHead();
        if (array_key_exists('teams', $response)) {
            if (array_key_exists('home', $response['teams'])) {
                 if (array_key_exists('name', $response['teams']['home'])) {
                     $headToHead->setTeamsHomeName($response['teams']['home']['name']);
                 }
                 if (array_key_exists('name', $response['teams']['away'])) {
                     $headToHead->setTeamsAwayName($response['teams']['away']['name']);
                 }
                 if (array_key_exists('logo', $response['teams']['home'])) {
                     $headToHead->setTeamsHomeLogo($response['teams']['home']['logo']);
                 }
                 if (array_key_exists('logo', $response['teams']['away'])) {
                     $headToHead->setTeamsAwayLogo($response['teams']['away']['logo']);
                 }
            }
        }
        if (array_key_exists('goals', $response)) {
            if (array_key_exists('home', $response['goals'])) {
                $headToHead->setGoalsHome($response['goals']['home']);
            }
            if (array_key_exists('away', $response['goals'])) {
                $headToHead->setGoalsAway($response['goals']['away']);
            }
        }
        return $headToHead;
    }

}