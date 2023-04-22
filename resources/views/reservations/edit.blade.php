@extends('app')
@section('main')

    {{-- <h1>Modifier adherent</h1> --}}
    <div class="row mt-3">
        <div class="col-lg-1">
            <a class="btn btn-success " href="{{ url('reservations')}}"><i class="fas fa-arrow-circle-left" style="color:black"></i></a>
        </div>
        <div class="col-lg-11">
            <p align="center"><b>Modifier Reservations</b></p>
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
    <form class="d-flex flex-column" method="post" action="{{ url('reservations/'. $Reservations->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group mb-3">
            <label for="DateDepart">DateDepart:</label>
            <input type="date" class="form-control" required value="{{ $Reservations->DateDepart }}" placeholder="DateDepart" name="DateDepart" >
        </div>
        <div class="form-group mb-3">
            <label for="Adults">Adultes :</label>
            <select class="form-select" name="Adults">
                <option selected value="{{ $Reservations->Adults }}">{{ $Reservations->Adults }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="Enfants">Enfants:</label>
            <select class="form-select" name="Enfants">
                <option selected value="{{ $Reservations->Enfants }}">{{ $Reservations->Enfants }}</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="status">Status:</label>
            <select class="form-select" name="status">
                <option selected value="{{ $Reservations->status }}">{{ $Reservations->status }}</option>
                <option value="1">Valide</option>
                <option value="0">Non Valide</option>

            </select>
        </div>
        <div class="form-group mb-3 ">
            <label for="Clients">Code Clients:</label>
            <select name="Client_id" required class="form-select">
                <option selected disabled align='center' value="{{ $Reservations->Client_id }}">{{ $Reservations->Client_id }}</option>
                @foreach ($Clients as $emp)
                    <option value={{ $emp->id }}>({{ $emp->id }}) {{ $emp->Nom }} {{ $emp->CIN }} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>
@endsection
