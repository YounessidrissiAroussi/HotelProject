@extends('app')
@section('main')

    <div class="pt-3">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('Clients')}}"><i class="fas fa-arrow-circle-left" style="color:black"></i></a>
            </div>
            <div class="col-lg-11">
                <p align="center"><b> détail Client {{ $Clients->Nom}}</b></p>
            </div>
        </div>

        <table class="mt-5 table table-bordered">
            <tr>
                <th>Cin:</th>
                <td>{{ $Clients->CIN}}</td>
            </tr>
            <tr>
                <th>Nom:</th>
                <td>{{ $Clients->Nom }}</td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>{{ $Clients->Phone }}</td>
            </tr>
            <tr>
                <th>E-mail:</th>
                <td>{{ $Clients->Email }}</td>
            </tr>
            <tr>
                <th>Type:</th>
                <td>{{ $Clients->type }}</td>
            </tr>
        </table>
    </div>
@endsection
