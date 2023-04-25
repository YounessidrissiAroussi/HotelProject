@extends('app')
@section('main')
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('clients')}}"><i class="fas fa-arrow-circle-left" style="color:black"></i></a>
            </div>
            <div class="col-lg-11">
                <p align="center"><b>Ajouter un Client</b></p>
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
        <form class="d-flex flex-column" action="{{ url('clients') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="cin">Cin:</label>
                <input type="text" class="form-control" required value{{old('cin')}} placeholder="cin" name="cin" >
            </div>
            <div class="form-group mb-3">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" required value{{old('nom')}} placeholder="nom" name="nom" >
            </div>
            <div class="form-group mb-3">
                <label for="tele">Telephone:</label>
                <input type="text" class="form-control" required value{{old('phone')}} placeholder="tele" name="phone">
            </div>
            <div class="form-group mb-3">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" required value{{old('email')}} placeholder="email" name="email">
            </div>
            <div class="form-group mb-3">
                <label for="type">Type:</label>
                <select name="type" required class="form-select ">
                    <option selected disabled align='center'>----Choisez statut familiare----</option>
                    <option value="celibataire"> celibataire </option>
                    <option value="marié"> marié </option>

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enregister</button>
        </form>
    </div>
@endsection
