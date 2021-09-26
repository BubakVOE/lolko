<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Item;

class FetchItems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lolko:items';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all items';

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
        $response = Http::get('http://ddragon.leagueoflegends.com/cdn/11.15.1/data/en_US/item.json');
            $collection = $response->collect();
            $items = $collection['data'];


        foreach ($items as $item) {

            $exists = Item::where('name', '=', $item['name'])->exists(); 
        
            if($exists) {
                $this->info('item ' . $item['name'] . ' is exists in database');

            } else {
                $newItem = Item::create([
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'plaintext' => $item['plaintext'],
                ]);
                                
                $this->info('Item ' . $newItem->name . ' is created to database');
            }
        }   
    }
}
