@extends('app')
@section('main')

    <div class="pt-3">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('Chambers')}}"><i class="fas fa-arrow-circle-left" style="color:black"></i></a>
            </div>
            <div class="col-lg-11">
                <p align="center"><b> Détail Chambers Numéro {{$chambers->NChambre}}</b></p>
            </div>
        </div>
        <table class="mt-5 table table-bordered">
            <tr>
                <th>Numéro:</th>
                <td>{{ $chambers->NChambre}}</td>
            </tr>
            <tr>
                <th>Titre:</th>
                <td>{{ $chambers->titre }}</td>
            </tr>
            <tr>
                <th>Description:</th>
                <td>{{ $chambers->Description }}</td>
            </tr>
            <tr>
                <th>Prix:</th>
                <td>{{ $chambers->prix }}</td>
            </tr>
            <tr>
                <th>Images:</th>
                <td>
                    <div class="col-lg-12">
                        @foreach ($chambers->images as $item)
                            <img src="{{asset('storage/'.$item->url)}}" width="100px">
                        @endforeach
                    </div>
                </td>
            </tr>
        </table>
    </div>
@endsection