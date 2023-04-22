@extends('app')
@section('main')

    <div class="pt-5">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('reservations')}}"><i class="fas fa-arrow-circle-left" style="color:black"></i></a>
            </div>
            <div class="col-lg-11">
                <p align="center"><b> détail Reservations </b></p>
            </div>
        </div>
        <table class="mt-5 table table-bordered">
            <tr>
                <th>Date Depart:</th>
                <td>{{ $Reservations->DateDepart}}</td>
            </tr>
            <tr>
                <th>Adults:</th>
                <td>{{ $Reservations->Adults }}</td>
            </tr>
            <tr>
                <th>Enfants:</th>
                <td>{{ $Reservations->Enfants }}</td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>{{ $Reservations->status }}</td>
            </tr>
            <tr>
                <th>Code Client:</th>
                <td>{{ $Reservations->Client_id }}</td>
            </tr>
        </table>
    </div>

@endsection
