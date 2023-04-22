@extends('app')
@section('main')

    {{-- <h1>Modifier adherent</h1> --}}
    <div class="row mt-3">
        <div class="col-lg-1">
            <a class="btn btn-success " href="{{ url('clients')}}"><i class="fas fa-arrow-circle-left" style="color:black"></i></a>
        </div>
        <div class="col-lg-11">
            <p align="center"><b>Modifier Clients</b></p>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="d-flex flex-column" method="post" action="{{ url('clients/'. $Clients->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group mb-3">
            <label for="cin">Cin:</label>
            <input type="text" class="form-control" id="cin" required name="cin" value="{{ $Clients->CIN }}">
        </div>
        <div class="form-group mb-3">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" required name="nom" value="{{ $Clients->Nom }}">
        </div>
        <div class="form-group mb-3">
            <label for="Phone">Phone :</label>
            <input type="text" class="form-control" id="Phone" required name="phone" value="{{ $Clients->Phone }}">
        </div>
        <div class="form-group mb-3">
            <label for="date_inscrire">E-mail:</label>
            <input type="email" class="form-control" id="date_inscrire" required name="email" value="{{ $Clients->Email }}">
        </div>
        <div class="form-group mb-3">
            <label for="type">Type:</label>
            <select name="type" required class="form-select ">
                <option selected align='center' value="{{ $Clients->type }}">----{{ $Clients->type }}----</option>
                <option value="celibataire"> celibataire </option>
                <option value="marié"> marié </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>

    </form>
@endsection
