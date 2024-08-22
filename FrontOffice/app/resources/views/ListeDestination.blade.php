@extends('CodeCommun')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
@endsection
@section('content')
        <div class="buses">
            @foreach ($itineraires as $itineraire)
                <div class="one">
                    <div class="ONE"><img src="{{ asset('images/H.jpg') }}"
                            style="width: 200px; height: 150px;border-radius:10px 0px 0px 10px" alt=""></div>
                    <div class="TWO">
                        <div class="down2">
                            <h3>{{ $itineraire->VilleDepart }} <i class="fa-solid fa-arrow-right"></i>
                                {{ $itineraire->VilleArrivee }} </h3>
                        </div>
                        <div class="high">
                            <div class="confort">
                                <h6>Confort +</h6>
                            </div>
                            <div class="icons">
                                <i class="fa-solid fa-wifi"></i>
                                <i class="fa-brands fa-usb"></i>
                                <i class="fa-brands fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
          
    </div>
    </div>
    </div>
    <div class="footer">
        
    </div>
    @endsection
