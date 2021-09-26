<?php

namespace App\Console\Commands;

use App\Models\Champion;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Blood72\Riot\Facades\DataDragonAPI;

class FetchChampions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lolko:champions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all Champions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $response = Http::get('https://ddragon.leagueoflegends.com/cdn/6.24.1/data/cs_CZ/champion.json');
        $response = Http::get('https://ddragon.leagueoflegends.com/cdn/11.15.1/data/cs_CZ/champion.json');
            $collection = $response->collect();
            $champions = $collection['data'];
            
        foreach ($champions as $champion) {

            $exists = Champion::where('key', '=', $champion['key'])->exists(); 
        
            if($exists) {
                $this->info('Champion ' . $champion['name'] . ' is exists in database');

            } else {
                $newChampion = Champion::create([
                    'key' => $champion['key'],
                    'name' => $champion['name'],
                    'title' => $champion['title'],
                    'tags' => json_encode($champion['tags']),
                    'img' => $champion['image']['full'],
                    'difficulty' => $champion['info']['difficulty'],

                ]);

                $pathImage = 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/' . $champion['image']['full'];
                
                $newChampion->addMediaFromUrl($pathImage)->toMediaCollection('avatar');
                
                $this->info('Champion ' . $newChampion->name . ' is created to database');
            }
        }        
    }
}
