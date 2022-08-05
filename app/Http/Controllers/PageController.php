<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Sponsor;

class PageController extends Controller
{
    public function home(){
        return inertia('Home');
    }
    public function players(){
        $players = Player::get();

        return inertia('Players',[
            'players' => $players
        ]);
    }
    public function sponsors(){
        $sponsors = Sponsor::get();

        return inertia('Sponsors',[
            'sponsors' => $sponsors
        ]);
    }
    // public function beers(){
    //     $beers = Beer::get();
    //     return inertia('Beers',[
    //         'beers' => $beers
    //     ]); 
    // }
   
}
