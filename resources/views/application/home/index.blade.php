@extends('app')
@section('main')

<div class="container">
    <div class="row mt-3">
        <hr>
        <div class="col-lg-5 text-center">
            {{-- <p align="center"><b>Rapport D'aujourd'hui</b></p> --}}
            <h3 class="text-body">Rapport D'aujourd'hui</h3>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-4 text-center">
            <h3 class="text-body">{{ \Carbon\Carbon::now()->format('D-d-M-Y') }}</h3>
        </div>
        <hr>
    </div>

    <div class="row mt-1">
        <div class="col-lg-5 mb-3 prod1 " >
            <div class="card shadow-sm border">
                @if ( count($clients)==0)
                    <br>
                    <div class="alert alert-success">
                        <p align="center"><b>Aucune clients enregistrer</b></p>
                    </div>
                @else
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between ">
                            <h3>Les Nouveau Clients</h3>
                            <div>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Cin</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $index => $a)
                            <tr >
                                <td >{{ $a->CIN }}</td>
                                <td >{{ $a->Nom }}</td>
                                <td style="height: 20px">
                                    <a class="btn btn-info btn-sm" href="{{url('clients/'. $a->id) }}">Voir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
        <div class="col-lg-2 mb-3"></div>
        <div class="col-lg-5 mb-3 prod1">
            <div class="card shadow-sm border">
                <div class="card-header">
                    <div class="row ">
                        <div class="col-lg-12 d-flex justify-content-between">
                            <h3>Nouveau Reservation</h3>
                        </div>
                    </div>
                </div>
                @if ( count($Reservations)==0)
                    <br>
                    <div class="alert alert-success">
                        <p align="center"><b>Aucune Reservations enregistrer</b></p>
                    </div>
                @else
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Code client</th>
                            <th>Depart</th>
                            <th>Adults</th>
                            <th>Enfants</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($Reservations as $index => $a)
                        <tr >
                            <td >{{ $a->Client_id }}</td>
                            <td >{{ $a->DateDepart }}</td>
                            <td >{{ $a->Adults }}</td>
                            <td >{{ $a->Enfants }}</td>
                            <td style="height: 20px">
                                <a class="btn btn-primary btn-sm" href="{{url('Reservations/'. $a->id) }}">Voir</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endif
            </div>
        </div>
        <div class="col-lg-12 mb-3 prod1">
            <div class="card shadow-sm border">
                @if ( count($clients)==0)
                    <br>
                    <div class="alert alert-success">
                        <p align="center"><b>Les Chambers Vide</b></p>
                    </div>
                @else
                <div class="card-header">
                    <div class="row ">
                        <div class="col-lg-12 d-flex justify-content-between">
                            <h3>Les Chambers Vide</h3>
                            <div>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Numéro</th>
                            <th>Cin</th>
                            <th>Nom</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($clients as $index => $a)
                        <tr >
                            <td >{{ $index+1 }}</td>
                            <td >{{ $a->CIN }}</td>
                            <td >{{ $a->Nom }}</td>
                            <td >{{ $a->Phone }}</td>
                            <td >{{ $a->Email }}</td>
                            <td >{{ $a->type }}</td>
                            <td style="height: 20px">
                                <a class="btn btn-danger btn-sm" href="{{url('clients/'. $a->id) }}">Voir</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection
