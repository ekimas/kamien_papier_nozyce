<?php

namespace App\Http\Controllers;

use App\kpn;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class KpnController extends Controller
{
   /*  public function game(Request $request)
    {
        $chose = request()->all();
        //dd($chose["kpn"]);
        $array = ["kamień", "papier", "nożyce"];
        $comp_chose = Arr::random($array);
        $ch = (string)$chose["kpn"];

        //dd($ch, $comp_chose);

        if (($ch=="kamień" && $comp_chose=="nożyce") || ($ch=="nożyce" && $comp_chose=="papier") || ($ch=="papier" && $comp_chose=="kamień"))
        {
            $w = "WYGRANA";
            kpn::create([
                'wyniki'=>$w
            ]);
        }
        elseif (($ch=="kamień" && $comp_chose=="kamień") || ($ch=="papier" && $comp_chose=="papier") || ($ch=="nożyce" && $comp_chose=="nożyce"))
        {

            $w = "REMIS";
            kpn::create([
                'wyniki'=>$w
            ]);
        }
        elseif(($ch=="nożyce" && $comp_chose=="kamień") || ($ch=="kamień" && $comp_chose=="papier") || ($ch=="papier" && $comp_chose=="nożyce"))
        {

            $w = "Przegrana";
            kpn::create([
                'wyniki'=>$w
            ]);
        }
        //dd($ch, $comp_chose);
        return view('result')->with('user_chose', $ch)->with('comp_chose', $comp_chose)->with('wynik', $w);
    } */

    public function sendResult(Request $request)
    {
        kpn::create(['wyniki' => $request['wynik']]);
        return (['message' => 'Task was successful']);
    }

    public function read()
    {
        $results = kpn::orderBy('updated_at','desc')->limit(5)->get();
        $time = kpn::orderBy('created_at','desc')->limit(5)->get();
        return view('history')->with('results', $results)->with('time', $time);
    }
}
