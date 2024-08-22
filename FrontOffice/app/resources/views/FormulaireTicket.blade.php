@extends('CodeCommun')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
        <div class="center">
            <div class="form">
                <form method="post" action="{{route('AjoutReservation',Route::current()->parameter('idVoyage'))}}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="nom" class="form-control" class="text" placeholder="Nom">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="prenom" class="form-control" class="text" placeholder="Prenom">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="cin" class="form-control" class="text" placeholder="CIN">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" class="text" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tel" class="form-control" class="text" placeholder="Telephone">
                    </div>
                    <?php 
                    ?>
                    <button type="submit" class="btn btn-warning" style="margin-left: 23%;">valider</button>
                </form>
            </div>
        </div>
    </div>
    @endsection