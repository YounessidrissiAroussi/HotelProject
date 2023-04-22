@extends('app')
@section('main')
    <div class="row mt-3">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('reservations/create')}}">+</a>
            </div>
            <div class="col-lg-8">
                <h3>List des Reservations</h3>
            </div>
            <div class="col-lg-2">
                <form class="d-flex" name="form1">
                    <input id="search-input" type="search" name="search1" id="search1" onchange="form1.submit()"
                        class="form-control " placeholder="Nom Clients...">
                </form>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-danger" href="{{ url('reservations')}}">x</a>
            </div>
        </div>
    </div>
    <br>
        @if ( count($Reservations)==0)
            <br>
            <div class="alert alert-success">
                <p align="center"><b>Aucune Reservations enregistrer</b></p>
            </div>
        @else
        <div class="prod1">
            <table class="table table-striped custom-table text-center">
                <tr>
                    <th>Numéro</th>
                    <th>Date Départ</th>
                    <th>Adults</th>
                    <th>Enfants</th>
                    <th>Statut</th>
                    <th>Nom_client</th>
                    <th>Actions</th>
                </tr>
                @foreach ($Reservations as $index => $a)
                <tr >
                    <td >{{ $index+1 }}</td>
                    <td >{{ $a->DateDepart }}</td>
                    <td >{{ $a->Adults }}</td>
                    <td >{{ $a->Enfants }}</td>
                    <td >{{ $a->status }}</td>
                    <td >{{ $a->client_Nom }}</td>

                    <td style="height: 20px">
                        <form action="{{ url('reservations/'. $a->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{url('reservations/'. $a->id) }}"><i class="fa fa-eye" style="color:black" ></i></a>
                            <a href="{{url('reservations/'. $a->id .'/edit') }}"><i class="fa fa-edit" style="color:rgb(4, 12, 249)" ></i></a>
                            <button class="border-0 bg-transparent text-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                            <a href="{{url('clients/'. $a->Client_id .'/edit') }}"><i class="fas fa-sync-alt" style="color:rgb(37, 237, 23)" ></i></a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        @endif
    </div>
@endsection
