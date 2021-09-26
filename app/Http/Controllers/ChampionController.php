<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Support\Facades\Http;
use Blood72\Riot\Facades\DataDragonAPI;


class ChampionController extends Controller
{
    public function index()
    {
    //patch
        $response = Http::get('https://ddragon.leagueoflegends.com/api/versions.json');

            $collection = $response->collect();

            $new = $collection[0];

    //počet champů v aktuálním patchu
        $amount = Champion::count();
        
    // seřadit podle jména
        $champions = Champion::orderBy('name', 'asc')->get();

        $rotations =app('league-api')->getChampionRotations();
            $newbieLVL = $rotations->maxNewPlayerLevel;
            
            $freeChamp   = $rotations->freeChampionIds;
            $freeChampions = Champion::whereIn('key', $freeChamp)->get();


            $newbieChamp = $rotations->freeChampionIdsForNewPlayers;
            $newbieChampions = Champion::whereIn('key', $newbieChamp)->get();

            // $asd=$champions[0]['tags'];
        // $test = Champion::find('key', '=', $freeChamp);

        return view('champion.index', [
            'new' => $new,
            'amount' => $amount,
            'champions'=> $champions,

            'newbieLVL'=> $newbieLVL,
            'freeChampions' => $freeChampions,  
            'newbieChampions' => $newbieChampions,
            
        ]);
    }



    public function show(Champion $champion)
    {

        // https://ddragon.leagueoflegends.com/cdn/11.15.1/img/passive/Aatrox_Passive.png
        $champUrl = Http::get('https://ddragon.leagueoflegends.com/cdn/11.15.1/data/cs_CZ/champion/'.$champion->name.'.json');
            $champInfs = $champUrl->collect()['data'][$champion->name];

                $passive= $champInfs['passive'];

                $spells= $champInfs['spells'];

            $champDesc  = $champUrl->collect()['data'][$champion->name]['lore'];

            $champStats = $champUrl->collect()['data'][$champion->name]['stats'];

            $champSkins = $champUrl->collect()['data'][$champion->name]['skins'];

            foreach ($champSkins as $overallSkins) {
                $overallSkins['num'];
            }

            $partype = $champUrl->collect()['data'][$champion->name]['partype'];


        



        $icon = DataDragonAPI::getChampionLoading($champion->name, 0)->attrs['src'];

        $tags = $champion->tags;

        // $test = DataDragonAPI::getChampionLoading($name, 2)->attrs['src'];
        // $test = DataDragonAPI::getChampionLoading($name, $champSkin['num'])->attrs['src'];
        return view('champion.show', [
            'champion' => $champion, 
        
            'champInfs' => $champInfs,
                'passive'=>$passive,
                'spells' => $spells,
            'champDesc' => $champDesc,
            'champStats'=>$champStats,
            'champSkins'=>$champSkins,
            'partype'=>$partype,
            'tags' => json_decode($tags),
            'icon'=>$icon,

            'overallSkins'=>$overallSkins,
        ]);
    }
}
