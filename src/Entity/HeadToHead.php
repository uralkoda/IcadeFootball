<?php
/*
 * This file is part of the TEST Project.
 *
 * (c) Hamza El Ghoul <elghoulhamzaa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\Entity;

class HeadToHead
{
    private $teamsHomeName;

    private $teamsAwayName;

    private $teamsHomeLogo;

    private $teamsAwayLogo;

    private $goalsHome;

    private $goalsAway;

    /**
     * @return mixed
     */
    public function getTeamsHomeName()
    {
        return $this->teamsHomeName;
    }

    /**
     * @param mixed $teamsHomeName
     */
    public function setTeamsHomeName($teamsHomeName): void
    {
        $this->teamsHomeName = $teamsHomeName;
    }

    /**
     * @return mixed
     */
    public function getTeamsAwayName()
    {
        return $this->teamsAwayName;
    }

    /**
     * @param mixed $teamsAwayName
     */
    public function setTeamsAwayName($teamsAwayName): void
    {
        $this->teamsAwayName = $teamsAwayName;
    }

    /**
     * @return mixed
     */
    public function getTeamsHomeLogo()
    {
        return $this->teamsHomeLogo;
    }

    /**
     * @param mixed $teamsHomeLogo
     */
    public function setTeamsHomeLogo($teamsHomeLogo): void
    {
        $this->teamsHomeLogo = $teamsHomeLogo;
    }

    /**
     * @return mixed
     */
    public function getTeamsAwayLogo()
    {
        return $this->teamsAwayLogo;
    }

    /**
     * @param mixed $teamsAwayLogo
     */
    public function setTeamsAwayLogo($teamsAwayLogo): void
    {
        $this->teamsAwayLogo = $teamsAwayLogo;
    }

    /**
     * @return mixed
     */
    public function getGoalsHome()
    {
        return $this->goalsHome;
    }

    /**
     * @param mixed $goalsHome
     */
    public function setGoalsHome($goalsHome): void
    {
        $this->goalsHome = $goalsHome;
    }

    /**
     * @return mixed
     */
    public function getGoalsAway()
    {
        return $this->goalsAway;
    }

    /**
     * @param mixed $goalsAway
     */
    public function setGoalsAway($goalsAway): void
    {
        $this->goalsAway = $goalsAway;
    }

}