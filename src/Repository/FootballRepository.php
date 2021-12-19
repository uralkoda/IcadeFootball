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

class FootballRepository extends AbstractRepository
{
    public function getFootballSearch($params = []): array
    {

        return $this->getResponse();
    }

    public function getLiveMatches(): array
    {
        return $this->getResponse('live', 'all');
    }


    public function getHeadToHead($idHome, $idAway): array
    {
        return $this->getHOHResponse($idHome, $idAway);
    }


}