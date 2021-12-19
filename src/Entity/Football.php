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

class Football
{
    private $text;

    private $fixtureId;

    private $fixtureDate;

    private $fixtureTimestamp;

    private $fixtureVenueName;

    private $fixtureVenueCity;

    private $leagueName;

    private $leagueCountry;

    private $leagueLogo;

    private $leagueFlag;

    private $leagueSeason;

    private $leagueRound;

    private $teamsHomeId;

    private $teamsHomeName;

    private $teamsHomeLogo;

    private $teamsHomeWinner;

    private $teamsAwayId;

    private $teamsAwayName;

    private $teamsAwayLogo;

    private $teamsAwayWinner;

    private $goalsHome;

    private $goalsAway;

    /**
     * @return mixed
     */
    public function getFixtureId()
    {
        return $this->fixtureId;
    }

    /**
     * @param mixed $fixtureId
     */
    public function setFixtureId($fixtureId): void
    {
        $this->fixtureId = $fixtureId;
    }

    /**
     * @return mixed
     */
    public function getFixtureDate()
    {
        return $this->fixtureDate;
    }

    /**
     * @param mixed $fixtureDate
     */
    public function setFixtureDate($fixtureDate): void
    {
        $this->fixtureDate = $fixtureDate;
    }

    /**
     * @return mixed
     */
    public function getFixtureTimestamp()
    {
//        $date = new \DateTime("@$this->fixtureTimestamp");
//        var_dump($date->format('H:i:s e'));
        return $this->fixtureTimestamp;
    }

    /**
     * @param mixed $fixtureTimestamp
     */
    public function setFixtureTimestamp($fixtureTimestamp): void
    {
        $this->fixtureTimestamp = $fixtureTimestamp;
    }

    /**
     * @return mixed
     */
    public function getFixtureVenueName()
    {
        return $this->fixtureVenueName;
    }

    /**
     * @param mixed $fixtureVenueName
     */
    public function setFixtureVenueName($fixtureVenueName): void
    {
        $this->fixtureVenueName = $fixtureVenueName;
    }

    /**
     * @return mixed
     */
    public function getFixtureVenueCity()
    {
        return $this->fixtureVenueCity;
    }

    /**
     * @param mixed $fixtureVenueCity
     */
    public function setFixtureVenueCity($fixtureVenueCity): void
    {
        $this->fixtureVenueCity = $fixtureVenueCity;
    }

    /**
     * @return mixed
     */
    public function getLeagueName()
    {
        return $this->leagueName;
    }

    /**
     * @param mixed $leagueName
     */
    public function setLeagueName($leagueName): void
    {
        $this->leagueName = $leagueName;
    }

    /**
     * @return mixed
     */
    public function getLeagueCountry()
    {
        return $this->leagueCountry;
    }

    /**
     * @param mixed $leagueCountry
     */
    public function setLeagueCountry($leagueCountry): void
    {
        $this->leagueCountry = $leagueCountry;
    }

    /**
     * @return mixed
     */
    public function getLeagueLogo()
    {
        return $this->leagueLogo;
    }

    /**
     * @param mixed $leagueLogo
     */
    public function setLeagueLogo($leagueLogo): void
    {
        $this->leagueLogo = $leagueLogo;
    }

    /**
     * @return mixed
     */
    public function getLeagueFlag()
    {
        return $this->leagueFlag;
    }

    /**
     * @param mixed $leagueFlag
     */
    public function setLeagueFlag($leagueFlag): void
    {
        $this->leagueFlag = $leagueFlag;
    }

    /**
     * @return mixed
     */
    public function getLeagueSeason()
    {
        return $this->leagueSeason;
    }

    /**
     * @param mixed $leagueSeason
     */
    public function setLeagueSeason($leagueSeason): void
    {
        $this->leagueSeason = $leagueSeason;
    }

    /**
     * @return mixed
     */
    public function getLeagueRound()
    {
        return $this->leagueRound;
    }

    /**
     * @param mixed $leagueRound
     */
    public function setLeagueRound($leagueRound): void
    {
        $this->leagueRound = $leagueRound;
    }

    /**
     * @return mixed
     */
    public function getTeamsHomeId()
    {
        return $this->teamsHomeId;
    }

    /**
     * @param mixed $teamsHomeId
     */
    public function setTeamsHomeId($teamsHomeId): void
    {
        $this->teamsHomeId = $teamsHomeId;
    }

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
    public function getTeamsHomeWinner()
    {
        return $this->teamsHomeWinner;
    }

    /**
     * @param mixed $teamsHomeWinner
     */
    public function setTeamsHomeWinner($teamsHomeWinner): void
    {
        $this->teamsHomeWinner = $teamsHomeWinner;
    }

    /**
     * @return mixed
     */
    public function getTeamsAwayId()
    {
        return $this->teamsAwayId;
    }

    /**
     * @param mixed $teamsAwayId
     */
    public function setTeamsAwayId($teamsAwayId): void
    {
        $this->teamsAwayId = $teamsAwayId;
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
    public function getTeamsAwayWinner()
    {
        return $this->teamsAwayWinner;
    }

    /**
     * @param mixed $teamsAwayWinner
     */
    public function setTeamsAwayWinner($teamsAwayWinner): void
    {
        $this->teamsAwayWinner = $teamsAwayWinner;
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

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

}