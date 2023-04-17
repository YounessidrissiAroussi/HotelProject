@extends('app')
@section('head')
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('tables/fonts/icomoon/style.css')}}">

<link rel="stylesheet" href="{{asset('tables/css/owl.carousel.min.css')}}">

<link rel="stylesheet" href="{{asset('tables/css/style.css')}}">
@endsection
@section('title')
   Ajouter Clients
@endsection
@section('main')

<div class="col-md-12">
   <h2 class="my-5">
      Modifier Clients
   </h2>
   @if ($message = Session::get('success'))
   <div class="alert alert-success" role="alert">
      {{$message}}
    </div>
   @endif
   <div class="wow fadeInUp" data-wow-delay="0.2s">
       <form action="/Clients/{{$clients->id}}/Modifier" method="POST">
         @csrf
         @method('PUT')
           <div class="row g-3">
               <div class="col-md-12">
                   <div class="form-floating">
                       <input type="text" class="form-control" id="Nom" name="CIN"  placeholder="CIN" value="{{$clients->CIN}}">
                       <label for="name">Numéro la carte National</label>
                       @error('CIN')
                           <div class="text-danger">
                                 {{$message}}
                           </div>
                      @enderror
                   </div>
               </div>
               <div class="col-md-12">
                   <div class="form-floating">
                       <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Nom" value="{{$clients->Nom}}">
                       <label for="Nom">Nom Complet du Client</label>
                       @error('Nom')
                           <div class="text-danger">
                                 {{$message}}
                           </div>
                      @enderror
                   </div>
               </div>
               <div class="col-md-12">
                   <div class="form-floating">
                       <input type="text" class="form-control" id="subject" placeholder="Votre Sujet" name="Phone" value="{{$clients->Phone}}">
                       <label for="subject">Telephone</label>
                       @error('Phone')
                           <div class="text-danger">
                                 {{$message}}
                           </div>
                      @enderror
                   </div>
               </div>
               <div class="col-md-12">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="email" name="Email" placeholder="Email" value="{{$clients->Email}}">
                      <label for="email">Email</label>
                      @error('Email')
                           <div class="text-danger">
                                 {{$message}}
                           </div>
                      @enderror
                  </div>
              </div>
              <div class="col-md-12">
               <div class="form-group">
                   <select  class="form-select" id="type" name="type" name="type" value="{{$clients->type}}">
                     <option selected>Situation</option>
                     <option value="celibataire" @php if($clients->type=="celibataire"){echo('selected="selected"');} @endphp>Celibataire</option>
                     <option value="encouple" @php if($clients->type=="encouple"){echo('selected="selected"');} @endphp>En couple</option>
                   </select>
                   @error('type')
                           <div class="text-danger">
                                 {{$message}}
                           </div>
                      @enderror
               </div>
           </div>
               <div class="col-md-3 mr-auto">
                   <button class="btn btn-warning w-100 py-3" type="submit">Modifier</button>
               </div>
           </div>
       </form>
   </div>
</div>
@endsection
@section('js')
<script src="{{asset('tables/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('tables/js/popper.min.js')}}"></script>
<script src="{{asset('tables/js/bootstrap.min.js')}}"></script>
<script src="{{asset('tables/js/main.js')}}"></script>
@endsection