@extends('app')
@section('main')
    <div class="">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('chambers')}}"><i class="fas fa-arrow-circle-left" style="color:black"></i></a>
            </div>
            <div class="col-lg-11">
                <p align="center"><b>Modifier Chambers Numéro {{$chambers->NChambre}}</b></p>
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
        <br>
        <form class="d-flex flex-column" action="{{ url('chambers/'. $chambers->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group mb-3">
                <label for="NChambre">NChambre:</label>
                <input type="text" class="form-control" id="NChambre" name="NChambre" required placeholder="Numéro Chambre" value="{{$chambers->NChambre}}" >
                @error('NChambre')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="titre">titre:</label>
                <input type="text" class="form-control" id="titre" name="titre" required placeholder="Titre" value="{{$chambers->titre}}" >
                @error('titre')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="cin">Description:</label>
                <textarea class="form-control" placeholder="Laissez un message ici" required id="Description" name="Description" style="height: 100px">{{$chambers->Description}}</textarea>
                @error('Description')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="prix">prix:</label>
                <input type="text" class="form-control" id="prix" name="prix" required placeholder="prix"  value="{{$chambers->prix}}">
                @error('prix')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="images">images:</label>
                    <input type="file" class="form-control bg-transparent" name="images[]" placeholder="images" multiple  value="{{$chambers->images}}">
                    @error('images')
                    <div class="text-danger">
                          {{$message}}
                    </div>
               @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection

