@extends('app')
@section('head')
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('tables/fonts/icomoon/style.css')}}">

<link rel="stylesheet" href="{{asset('tables/css/owl.carousel.min.css')}}">

<link rel="stylesheet" href="{{asset('tables/css/style.css')}}">
@endsection
@section('title')
    Clients salam
@endsection
@section('main')
<div class="container">
    <h2 class="my-5">Clients</h2>
    <div class="d-flex justify-content-between">
        <a href="/Clients/Ajouter" class="btn btn-success rounded mb-1"><i class="fa fa-plus"></i></a>
        <form class="d-flex" name="form1">
            <input id="search-input" type="search" name="search1" id="search1" onchange="form1.submit()"
                class="form-control " placeholder="Rechercher Clients...">
            <button id="search-button" type="submit" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    <div class="table-responsive">
      <table class="table table-striped custom-table">
        <thead>
          <tr>
            <th scope="col">
            </th>
            <th scope="col">#</th>
            <th scope="col">CIN</th>
            <th scope="col">Nom Complet</th>
            <th scope="col">Telephone</th>
            <th scope="col">Email</th>
            <th scope="col">Situation</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr scope="row">
              <td></td>
              <td>{{$client->id}}</td>
              <td>{{$client->CIN == Null ? "en-cours" : $client->CIN}}</td>
              <td class="pl-0">
                <div class="d-flex align-items-center">
                  <label class="custom-control ios-switch">
                  <input type="checkbox" class="ios-switch-control-input" {{$client->CIN ? "checked" : ""}}>
                  <span class="ios-switch-control-indicator"></span>
                  </label>
                  <a>{{$client->Nom}}</a>
                </div>
              </td>
              <td>
                  {{$client->Phone == Null ? "en-cours" : $client->Phone}}
              </td>
              <td>
                {{$client->Email == Null ? "en-cours" : $client->Email}}
              </td>
              <td>
                {{$client->type == Null ? "en-cours" : $client->type}}
              </td>
              <td>
              <form action="/Clients/{{$client->id}}" method="POST">
                @csrf
                @method('DELETE')
                  <a href="/Clients/{{$client->id}}/Modifier" class="more">Modifier</a>
                  <button class="text-danger ms-2 border-0 bg-transparent">Supprimer</button>
              </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
@section('js')
<script src="{{asset('tables/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('tables/js/popper.min.js')}}"></script>
<script src="{{asset('tables/js/bootstrap.min.js')}}"></script>
<script src="{{asset('tables/js/main.js')}}"></script>
@endsection