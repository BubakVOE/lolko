<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{

    
    
    public function index()
    {
        return view('news.index');
    }


    public function lolko()
    {
        $response = Http::get('https://ddragon.leagueoflegends.com/api/versions.json');
        $collection = $response->collect();
        $new = $collection[0];

        return view('news.lolko', [
            'newest' => $new,
        ]);
    }

    public function web()
    {
        return view('news.web');
    }
}
