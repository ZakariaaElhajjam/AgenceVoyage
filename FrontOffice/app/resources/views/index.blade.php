@extends('CodeCommun')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
    <div class="center">
        <div class="form">
            <form method="post" action="{{route('destination')}}">
                @csrf
                <div class="mb-3">
                    <input list="villes" type="text" name="depart"  class="form-control" id="" aria-describedby="emailHelp" placeholder="Selectionner ville de depart" required>
                    <datalist id="villes">
                        <option value="Casablanca">
                        <option value="Agadir">
                        <option value="Tanger">
                        <option value="Marrakech">
                        <option value="Khouribga">
                    </datalist>
                </div>
                <div class="mb-3">
                    <input list="villes"  type="text" name="arrivee" class="form-control " id="" aria-describedby="emailHelp" placeholder="Selectionner ville d'arrivee" required>
                </div>
                <div class="mb-3 row container justify-content-between w-100 ">
                    <input type="date" style="font-size:1rem;" class="form-control w-100" id="" placeholder="Date">                    </div>
                <div class="mb-3 ">
                    <input type="number" name="quantity" id="quantity" class="form-control col-12 ">
                </div>
                <button type="submit" class="btn btn-warning" style="margin-left: 23%;">Rechercher</button>
            </form>
        </div>

    </div>
    </div>
    <div class="container mt-5 mb-5">
        <h2 class="text text-center">NOS SERVICES À BORD</h2>
        <br>
        <p class="text-center">Profitez de nos services exclusifs pour un voyage agréable et plus confortable</p>
    </div>
    <div class="d-flex" style="width: 100%;justify-content: space-between;margin-top: 8rem;margin-bottom: 8rem;">

        <i class="fas fa-wifi"></i>
        <i class="fas fa-brands fa-youtube"></i>
        <i class="fas fa-tv"></i>
        <i class="fas fa-brands fa-usb"></i>

    </div>
    <div class=" " style="margin-top: 8%;margin-bottom: 5%; ">
        <h2 class="text text-center mt-3 ">NOS BONS PLANS</h2>
        <p class="text-center mt-2 ">Découvrez nos meilleures offres pour voyager au meilleur prix</p>
    </div>
    <div class="plans d-flex justify-content-center ">
        <div class="col-lg-3 p-1 col-md-6 col-12 mr-5 mr-2 ">
            <div class="card" style="height: 95vh;background-color:rgb(209, 206, 197); ">
                <img src="{{ asset('images/casa.jpg') }}" class="card-img-top " style="height:31vh ;" alt="... ">
                <div class="card-body ">
                    <h5 class="card-titre ">TETOUAN - CASA
                    </h5>
                    <p class="card-text pt-5 pb-5 ">Bénéficiez d’un tarif exceptionnel et profitez du paysage et de la culture des montagnes de l'Atlas! </p>
                </div>
                <h4>150 DH</h4>
                <button class="btn btn-primary mb-4 ">Vister</button>
            </div>
        </div>
        <div class="col-lg-3 p-1 col-md-6 col-12 mr-2 ">
            <div class="card " style="height: 95vh;background-color:rgb(215, 220, 164); ">
                <img src="{{ asset('images/R (1).jpeg') }}" class="card-img-top " alt="... ">
                <div class="card-body ">
                    <h5 class="card-titre ">AGADIR - TANGER</h5>
                    <p class="card-text pt-4 pb-5 ">Outre ses plages magnifiques, Agadir offre une multitude d'activités aux visiteurs, tels que des sports nautiques, des excursions dans le désert, des visites de souks traditionnels et des dégustations de la délicieuse cuisine marocaine.
                    </p>
                </div>
                <h4>150 DH</h4>
                <button class="btn btn-primary mb-4 ">Vister</button>
            </div>
        </div>

        <div class="col-lg-3 p-1 col-md-6 col-12 ml-5 mr-2 ">
            <div class="card " style="height: 95vh;background-color:rgb(237, 239, 141); ">
                <img src="{{ asset('images/R (2).jpeg') }}" class="card-img-top " alt="... ">
                <div class="card-body ">
                    <h5 class="card-titre ">DAKHLA - RABAT</h5>
                    <p class="card-text pt-5 pb-5 ">Partez à la découverte des charmes de la perle du Sud Marocain à petit prix ! </p>
                </div>
                <h4>150 DH</h4>
                <button class="btn btn-primary mb-4 ">Vister</button>
            </div>
        </div>
    </div>

    <div class="footer d-flex row ">
        <div class="adresse container ">
            <a href=" ">Sahara Voyage Bd El Fida, Casablanca 20100, Morocco</a>
            <i class="fa-solid fa-phone">  0534566713</i>
        </div>
    </div>
    @endsection
   