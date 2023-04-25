@extends('app')
@section('head')
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('tables/fonts/icomoon/style.css')}}">

<link rel="stylesheet" href="{{asset('tables/css/owl.carousel.min.css')}}">

<link rel="stylesheet" href="{{asset('tables/css/style.css')}}">
@endsection
@section('title')
    Chambers
@endsection
@section('main')

<div class="container">
    <h2 class="my-5">Chambers</h2>
    <div class="d-flex justify-content-between">
        <a href="/Chambers/Ajouter" class="btn btn-success rounded mb-1"><i class="fa fa-plus"></i></a>
        <form class="d-flex" name="form1">
            <input id="search-input" type="search" name="search1" id="search1" onchange="form1.submit()"
                class="form-control " placeholder="Rechercher Chambers...">
            <button id="search-button" type="submit" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    <div class="table-responsive">
      <table class="table table-striped custom-table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">#</th>
            <th scope="col">Numéro Chanmbre</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Prix</th>
            <th scope="col">Images</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($chambers as $item)
            <tr scope="row">
              <td></td>
              <td>{{$item->id}}</td>
              <td>{{$item->NChambre}}</td>
              <td class="pl-0">
                {{-- <div class="d-flex align-items-center">
                  <label class="custom-control ios-switch">
                    <input type="checkbox" class="ios-switch-control-input">
                    <span class="ios-switch-control-indicator"></span>
                  </label> --}}
                  <a>{{$item->titre}}</a>
                {{-- </div> --}}
              </td>
              <td>
                {{$item->Description}}
              </td>
              <td>
                {{$item->prix}}
              </td>
              <td>
                @foreach ($item->images as $ite)
                @php $data = json_decode($ite->url) @endphp
                @for ($i = 0; $i < count($data); $i++)
                  <img class="row" src="{{ asset('storage/'.$data[$i]) }}" width="100px">
                @endfor
            @endforeach
              </td>
              <td>
              <form action="/Chambers/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/Chambers/{{$item->id}}/Modifier" class="more">Modifier</a>
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