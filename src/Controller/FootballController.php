<?php

namespace App\Controller;

use App\Repository\FootballRepository;
use App\Factory\FootballFactory;
use App\Factory\HeadToHeadFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FootballController extends AbstractController
{
    private  $repository;

    private  $factory;

    private  $hthFactory;

    /**
     *
     * @param FootballRepository $footballRepository
     */
    public function __construct(FootballRepository $footballRepository)
    {
        $this->repository = $footballRepository;
        $this->factory = new FootballFactory();
        $this->hthFactory = new HeadToHeadFactory();
    }
    /**
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dashboard(): Response
    {
        $response = $this->repository->getLiveMatches();


        $matches = false;
        if ($response['response'] != null) {
            foreach ($response['response'] as $match) {
                $matches[] = $this->factory->create($match);
            }
        }
        //todo: comment

        // I added this to continue working on search autoComplete because i have reached the 100 Free API call permitted from the site;
        // i tried to work with vpn to overpass this but it didn't work out neither
        // so its possible that the autoComplete do not work because i didnt check it on a real working api
//        if ( $matches ==  false)
//            $matches = [
//                [
//                    "fixtureId" => 15455,
//                    "fixtureDate" => date("Y-m-d"),
//                    "fixtureTimestamp" => date("Y-m-d H:i:s"),
//                    "fixtureVenueName" => "fixtureVenueName",
//                    "fixtureVenueCity" => "fixtureVenueCity",
//                    "leagueName" => "leagueName",
//                    "leagueCountry" => "leagueCountry",
//                    "leagueLogo" => "https://assets.codepen.io/285131/pl-logo.svg",
//                    "leagueFlag" => "https://assets.codepen.io/285131/pl-logo.svg",
//                    "teamsHomeId" => "teamsHomeId",
//                    "teamsHomeName" => "teamsHomeName",
//                    "teamsHomeLogo" => "teamsHomeLogo",
//                    "teamsAwayId" => "teamsAwayId",
//                    "teamsAwayName" => "teamsAwayName",
//                    "teamsAwayLogo" => "teamsAwayLogo",
//                    "goalsHome" => "goalsHome",
//                    "goalsAway" => "goalsAway",
//                    "text" => "Team1 vs team2",
//                ],[
//                    "fixtureId" => 445554,
//                    "fixtureDate" => date("Y-m-d"),
//                    "fixtureTimestamp" => date("Y-m-d H:i:s"),
//                    "fixtureVenueName" => "fixtureVenueName",
//                    "fixtureVenueCity" => "fixtureVenueCity",
//                    "leagueName" => "leagueName",
//                    "leagueCountry" => "leagueCountry",
//                    "leagueLogo" => "https://assets.codepen.io/285131/pl-logo.svg",
//                    "leagueFlag" => "https://assets.codepen.io/285131/pl-logo.svg",
//                    "teamsHomeId" => "teamsHomeId",
//                    "teamsHomeName" => "teamsHomeName",
//                    "teamsHomeLogo" => "teamsHomeLogo",
//                    "teamsAwayId" => "teamsAwayId",
//                    "teamsAwayName" => "teamsAwayName",
//                    "teamsAwayLogo" => "teamsAwayLogo",
//                    "goalsHome" => "goalsHome",
//                    "goalsAway" => "goalsAway",
//                    "text" => "Team3 vs team4",
//                ]
//            ];
        return $this->render('dashboard.html.twig', [
            'matches' => $matches,
        ]);
    }

    /**
     *
     * @param int $id
     * @param Request $params
     * @return Response
     */
    public function show(int $id, Request $params): Response
    {


        $idHome = $params->query->get('homeid');
        $idAway = $params->query->get('awayid');

        $response = $this->repository->getHeadToHead($idHome, $idAway);

        $matches = false;
        if ($response['response'] != null) {
            foreach ($response['response'] as $match) {
                $matches[] = $this->hthFactory->create($match);
            }
        }

            return $this->render('football.html.twig', [
                'headToHeads' => $matches
            ]);

    }


}