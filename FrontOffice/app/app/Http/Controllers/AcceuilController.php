<?php
namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Voyage;
use App\Models\Bus;
use App\Models\Ticket;
use App\Models\Itineraire;
//include Route
use Illuminate\Support\Facades\Route;
class AcceuilController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function destination()
    {
        return view('destination');
    }
    public function reservation()
    {
        return view('FormulaireTicket');
    }
    
    public function AjoutReservation()
    {
        $nom = request('nom');
        $prenom = request('prenom');
        $pieceIdentite = request('cin');
        $email = request('email');
        $telephone = request('tel');
        $client = new Client();
        $client->nom = $nom;
        $client->prenom = $prenom;
        $client->pieceIdentite = $pieceIdentite;
        $client->email = $email;
        $client->telephone = $telephone;
        $client->save();
        $id = $client->id;
        $idVoyage=Route::current()->parameter('idVoyage'); 
       $hD = Voyage::select('HeureDepart')->where('idVoyage', $idVoyage)->first();
        $heureDepart = $hD['HeureDepart'];
         $hA = Voyage::select('HeureDArrivee')->where('idVoyage', $idVoyage)->first();
        $heureArrivee = $hA['HeureDArrivee'];
        $prx = Voyage::select('prix')->where('idVoyage', $idVoyage)->first();
        $prix = $prx['prix'];
        $idItineraire = Voyage::select('idItineraire')->where('idVoyage', $idVoyage)->first();
        $vD = Itineraire::select('VilleDepart')->where('idItineraire', $idItineraire['idItineraire'])->first();
        $villeDepart = $vD['VilleDepart'];
        $vA = Itineraire::select('VilleArrivee')->where('idItineraire', $idItineraire['idItineraire'])->first();
        $villeArrivee = $vA['VilleArrivee'];
        $idbus = Voyage::select('idBus')->where('idVoyage', $idVoyage)->first();
        $nbrplace = Bus::select('nbrPlaces')->where('idBus',  $idbus['idBus'])->first();
        $nbrTicket = Ticket::where('idVoyage', $idVoyage)->count();
        $nbrplace = (int)$nbrplace['nbrPlaces'];
        $nbrTicket = (int)$nbrTicket;
        if($nbrTicket < $nbrplace){
            $ticket = new Ticket();
            $ticket->idClient = $id;
            $ticket->idVoyage = $idVoyage;
            $ticket->numeroPlace = ($nbrTicket+1);
            $numeroPlace = (string) $ticket->numeroPlace;
            echo $ticket->numeroPlace;
            $ticket->save();
            $pdf = PDF::loadView('Recu', compact('nom', 'prenom', 'pieceIdentite', 'email', 'telephone', 'numeroPlace', 'villeDepart', 'villeArrivee', 'heureDepart', 'heureArrivee', 'prix'));
            return $pdf->stream('recu.pdf');
        }
        else{
            return redirect()->route('reservation', ['idVoyage' => $idVoyage])->with('alert', 'Bus Remplis');
        }       
    }
    public function messagerie()
    {
        return view('messagerie');
    }
    public function propos()
    {
        return view('propos');
    }
    public function afficheDestination(Request $request){
        $itineraires = Itineraire::select('VilleDepart', 'VilleArrivee')->distinct()->get();
        return view('ListeDestination', compact('itineraires'));
    }
}