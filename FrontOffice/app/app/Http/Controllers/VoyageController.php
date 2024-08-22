<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;
use App\Models\Client;
use Illuminate\Support\Facades\DB;


class VoyageController extends Controller
{
    public function afficheMessage(Request $request){
        $villeDepart=$request->input('depart');
        $villeArrivee=$request->input('arrivee');
        $voyages = DB::table('voyages')
                ->join('itineraires', 'voyages.idItineraire', '=', 'itineraires.idItineraire')
                ->select('voyages.*', 'itineraires.VilleDepart', 'itineraires.VilleArrivee')
                ->when($villeDepart, function ($query, $villeDepart) {
                        return $query->where('itineraires.VilleDepart', '=',$villeDepart);
                    })
                ->when($villeArrivee, function ($query, $villeArrivee) {
                         return $query->where('itineraires.VilleArrivee', '=',$villeArrivee);
                    })
                ->get();
        return view('destination', compact('voyages','villeDepart','villeArrivee'));
    }
}
