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
      Ajouter Chambers
   </h2>
   {{-- @if ($message = Session::get('success'))
   <div class="alert alert-success" role="alert">
      {{$message}}
    </div>
   @endif --}}
   <div class="wow fadeInUp" data-wow-delay="0.2s">
       <form action="/Chambers/{{$chambers->id}}/Modifier" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
           <div class="row g-3">
               <div class="col-md-12">
                   <div class="form-floating">
                       <input type="text" class="form-control" id="NChambre" name="NChambre"  placeholder="Numéro Chambre" value="{{ $chambers->NChambre }}" >
                       <label for="NChambre">Numéro Chambre</label>
                       @error('NChambre')
                           <div class="text-danger">
                                 {{$message}}
                           </div>
                      @enderror
                   </div>
               </div>
               <div class="col-md-12">
                   <div class="form-floating">
                       <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{ $chambers->titre }}" >
                       <label for="title">Titre</label>
                       @error('titre')
                           <div class="text-danger">
                                 {{$message}}
                           </div>
                      @enderror
                   </div>
               </div>
               <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Laissez un message ici" id="Description" name="Description" style="height: 150px">{{ $chambers->Description }}</textarea>
                    <label for="Description">Description</label>
                     @error('Description')
                           <div class="text-danger">
                                 {{$message}}
                           </div>
                      @enderror
                </div>
            </div>
               <div class="col-md-12">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="prix" name="prix" placeholder="prix"  value="{{ $chambers->prix }}">
                      <label for="prix">Prix</label>
                      @error('prix')
                           <div class="text-danger">
                                 {{$message}}
                           </div>
                      @enderror
                  </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating">
                    <input type="file" class="form-control bg-transparent" name="url[]" placeholder="images" multiple  value="{{old('url')}}">
                    <label for="images">Images</label>
                    @error('url')
                         <div class="text-danger">
                               {{$message}}
                         </div>
                    @enderror
                </div>
            </div>
               <div class="col-md-3 mr-auto">
                   <button class="btn btn-primary w-100 py-3" type="submit">Modifier</button>
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