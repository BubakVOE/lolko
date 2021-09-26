<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemsController extends Controller
{
    public function index()
    {
    
        $items = Item::orderBy('name', 'asc')->get();


        return view('items.index',[
            'items' => $items,
        ]);
    }
}
