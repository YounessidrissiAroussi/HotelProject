@extends('app')
@section('main')
    <div class="row mt-3">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('reservations/create')}}">+</a>
            </div>
            <div class="col-lg-7">
                <p align="center"><b>List des Reservations</b></p>
            </div>
            <div class="col-lg-4">
                <form class="d-flex" name="form1">
                    <input id="search-input" type="search" name="search1" id="search1" onchange="form1.submit()"
                        class="form-control " placeholder="Rechercher Par Nom Clients...">
                </form>
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
        <table class="table table-striped custom-table text-center">
            <tr>
                <th>Numéro</th>
                <th>date départ</th>
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
                        <a class="text-info ms-2 border-0 bg-transparent" href="{{url('reservations/'. $a->id) }}">Voir</a>
                        <a class="text-primary ms-2 border-0 bg-transparent" href="{{url('reservations/'. $a->id .'/edit') }}">Modifier</a>
                        <button type="submit" class="text-danger ms-2 border-0 bg-transparent">Supprimer</button>
                        <a class="text-success ms-2 border-0 bg-transparent" href="{{url('clients/'. $a->Client_id .'/edit') }}">add client</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>


    {{-- <div class="d-flex justify-content-center pagination-md">
        {{ $adherent->links() }}
    </div> --}}
@endsection
