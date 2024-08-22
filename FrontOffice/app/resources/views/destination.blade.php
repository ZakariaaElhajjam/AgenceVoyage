@extends('CodeCommun')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
@endsection
@section('content')

<div class="container">
    <div class="formulaire">
        <form action="ajout" method="POST">
            <input list="villes" type="text" name="depart" id="" placeholder="Depart">
            <datalist id="villes">
                <option value="Casablanca">
                <option value="Agadir">
                <option value="Tanger">
                <option value="Marrakech">
                <option value="Khouribga">
            </datalist>
            <input list="villes" type="text" name="arrivee" id="" placeholder="Arrive">
            <input type="date" name="" id="" placeholder="Date">
            <input type="number" min="0" name="" id="" placeholder="Nombre">
            <input type="submit" value="Mettre a jour">
        </form>
    </div>
    <div class="buses">
        @foreach ($voyages as $voyage)
        <div class="one">
            <div class="ONE"><img src="{{ asset('images/H.jpg') }}" style="width: 200px; height: 150px;border-radius:10px 0px 0px 10px" alt=""></div>
            <div class="TWO">
                <div class="up">
                    <div class="Time">
                        <h5 class="heure">{{$voyage->HeureDepart}}</h5><h6 class="duree">-  <i class="fa-solid fa-hourglass-end"></i>  08:30  -</h6><h5 class="heure">{{$voyage->HeureDArrivee}}</h5>
                    </div>
                    <h3 class="prix">{{$voyage->Prix}} DH</h3>
                </div>
                <div class="down">
                    <h3>{{ $villeDepart }} <i class="fa-solid fa-arrow-right"></i> {{ $villeArrivee }} </h3>
                    <a href="{{route('reservation',$voyage->idVoyage)}}" class="reserver">Réserver</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
   
    <div class="footer">

    </div>
    @endsection