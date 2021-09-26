<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;
use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;
use Illuminate\Support\Facades\Http;
use Blood72\Riot\Facades\DataDragonAPI;

class SummonerController extends Controller
{


    public function index()
    {
        return view('summoner.index');
    }


    public function show($username)
    {

        $key = 'RGAPI-8217fa49-2a99-4262-aba1-68e44ab31eb3';

        $summoner = app('league-api')->getSummonerByName($username);

            $champMasteries = app('league-api')->getChampionMasteries($summoner->id);

            $rankInf =  Http::get('https://eun1.api.riotgames.com/lol/league/v4/entries/by-summoner/'.$summoner->id.'?api_key=RGAPI-2f022c18-2cc9-473d-94c9-4be5391fc08d')
                        ->collect();


            $matchHistory = app('league-api')->getMatchlistByAccount($summoner->accountId)->matches;
                

                    foreach ($matchHistory as $matchId ) {
                        $saveMatchIds [] = $matchId->gameId;
                    }

                    $matchDetails = Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/EUN1_'.$saveMatchIds[3].'?api_key='.$key)->collect()['info'];
                    // foreach ($saveMatchIds as $saveMatchId) {
                    //     $matchDetails = Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/EUN1_'.$saveMatchId.'?api_key=RGAPI-461ed6f6-5b87-4bcd-af44-fedfc2188d12')->collect()['info'];
                    // }

                    $teamsPlayers = $matchDetails['participants'];
                    
                // bans/objectives/win
                    $teamsDetails = $matchDetails['teams'];

                    //bans
                        // alliesBans
                            $bansAllies = $teamsDetails[0]['bans'];

                                $alliesBanned = [];

                                    foreach ($bansAllies as $alliesBan) {
                                        $alliesBanned [] = $alliesBan['championId'];
                                    }

                                $alliesBanData = Champion::whereIn('key', $alliesBanned)->get();

                        // enemiesBans
                            $bansEnemies = $teamsDetails[1]['bans'];

                                $enemiesBanned = [];

                                    foreach ($bansEnemies as $enemiesBan) {
                                        $enemiesBanned [] = $enemiesBan['championId'];
                                    }

                                $enemiesBanData = Champion::whereIn('key', $enemiesBanned)->get();

                    // objectives

        return view('summoner.show', [
            'summoner'=>$summoner,

            'matchDetails'=>$matchDetails,

            'rankInf' => $rankInf,
            'champMasteries' => $champMasteries,

            'teamsPlayers' => $teamsPlayers,
            'teamsDetails' => $teamsDetails,

            'alliesBanned' => $alliesBanned,
            'alliesBanData' => $alliesBanData,
            
            'enemiesBanned' => $enemiesBanned,
            'enemiesBanData' => $enemiesBanData,


            'saveMatchIds' => $saveMatchIds,
        ]);

    }




    public function match()
    {
        return view('summoner.match');
    }
}








		// $match_id = 1730730260;
		// //  Get library processed results
		// /** @var Objects\MatchDto $result */
		// $result = $api->getMatch($match_id);

        // $result = $api->getMatchlistByAccount("BubakVOE");
        // dd($result);

        



        
    

        // $pokus = [];
        //     foreach ($matchHistory as $test) {
        //         $pokus [1] =Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/EUN1_'.$test->gameId .'?api_key=RGAPI-59e2ab5f-feb0-4574-8816-c3e23b1fc9e2')->collect();
        //     }
        // dd($pokus);

        //         dd($matchHistory[0]->gameId);


        // Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/EUN1_2913773871?api_key=RGAPI-59e2ab5f-feb0-4574-8816-c3e23b1fc9e2');

        // $test = Http::get('https://eun1.api.riotgames.com/lol/match/v4/matchlists/by-account/a-VBmB6n_eXApwoOksnKoDgZqBT_Mz2Cwk0b-40dldT_Kg?api_key=RGAPI-2f022c18-2cc9-473d-94c9-4be5391fc08d');
        // dd($test);

        // $api = new LeagueAPI([
		// 	LeagueAPI::SET_KEY             => env('RIOT_API_KEY'),
		// 	LeagueAPI::SET_REGION        => Region::EUROPE_EAST,
		// 	LeagueAPI::SET_USE_DUMMY_DATA  => true,
		// 	LeagueAPI::SET_CACHE_RATELIMIT => true,
		// ]);

        // $match_id =2913773871;
        // // $match_id =2897409392;
        // $test = $api->getMatch($match_id);
        // dd($test);





//             $ch = app('league-api')->getChampionMasteries($summoner->id);
// $test = app('league-api')->getChampionMastery($summoner->id, 245 );



