<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable = [
        'idVoyage',
        'DateDepart',
        'HeureDepart',
        'HeureDArrivee',
        'Prix',
        'idBus',
        'idChauffeur',
        'idIteneraire',
    ];

    
    public function itineraire()
    {
        return $this->hasOne(Itineraire::class,'idItineraire');
    }
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
