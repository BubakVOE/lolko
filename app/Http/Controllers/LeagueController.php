<?php

namespace App\Http\Controllers;

use App\Models\Tester;
use Illuminate\Http\Request;
use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;

class LeagueController extends Controller
{
    public function index(Request $request)
    {

        return view('home');

        // $username = $request->input('username');

        // return view('home', [
        //     'username' => $username,
        // ]);

    }





}