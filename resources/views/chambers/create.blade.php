@extends('app')
@section('main')
    <div class="">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('chambers')}}"><i class="fas fa-arrow-circle-left" style="color:black"></i></a>
            </div>
            <div class="col-lg-11">
                <p align="center"><b>Ajouter un Chambers</b></p>
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
        <form class="d-flex flex-column" action="{{ url('chambers') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="NChambre">Numéro Chambre:</label>
                <input type="number" class="form-control" id="NChambre" name="NChambre" required placeholder="Numéro Chambre" value="{{old('NChambre')}}" >
                @error('NChambre')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="titre">Titre:</label>
                <input type="text" class="form-control" id="titre" name="titre" required placeholder="Titre" value="{{old('titre')}}" >
                @error('titre')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="Description">Déscription:</label>
                <textarea class="form-control" placeholder="Laissez Déscription du chamber ici" required id="Description" name="Description" style="height: 100px">{{old('Description')}}</textarea>
                @error('Description')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="prix">Prix:</label>
                <input type="text" class="form-control" id="prix" name="prix" required placeholder="prix"  value="{{old('prix')}}">
                @error('prix')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="images">Images:</label>
                    <input type="file" class="form-control bg-transparent" name="images[]" placeholder="images" multiple  value="{{old('images')}}">
                    @error('images')
                    <div class="text-danger">
                          {{$message}}
                    </div>
               @enderror
            </div>

            <button type="submit" class="btn btn-primary">Enregister</button>

        </form>
    </div>
@endsection

