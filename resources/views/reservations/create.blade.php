@extends('app')
@section('main')
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('/Reservations')}}"><i class="fas fa-arrow-circle-left" style="color:black"></i></a>
            </div>
            <div class="col-lg-11">
                <p align="center"><b>Nouveau Reservation</b></p>
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
        <form class="d-flex flex-column" action="{{ url('Reservations') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="DateDepart">DateDepart:</label>
                <input type="date" class="form-control" required value{{old('DateDepart')}} placeholder="DateDepart" name="DateDepart" >
            </div>
            <div class="form-group mb-3">
                <label for="Adults">Adultes :</label>
                <select class="form-select" name="Adults">
                    <option selected disabled>Adultes</option>
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
                    <option selected value="0">Enfants</option>
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
                    <option selected disabled value="1">status valide</option>
                    <option value="0">non valide</option>
                </select>
            </div>
            <div class="form-group mb-3 ">
                <label for="Clients">Code Clients:</label>
                <select name="Client_id" required class="form-select">
                    <option selected disabled align='center'>----Choisez Clients----</option>
                    @foreach ($Clients as $emp)
                        <option value={{ $emp->id }}>{{ $emp->Nom }} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enregister</button>
        </form>
    </div>
@endsection
