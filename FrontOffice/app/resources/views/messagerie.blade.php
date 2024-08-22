@extends('CodeCommun')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
        <div class="center">
            <div class="form">
                <form method="get" action="">
                    @csrf
                    <div class="mb-3">
                        <textarea name="note" class="form-control" class="text" placeholder="Note"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning" style="margin-left: 23%;">envoyer</button>
                </form>
            </div>
        </div>
    </div>
    @endsection