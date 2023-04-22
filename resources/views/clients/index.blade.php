@extends('app')
@section('main')
    <div class="row mt-3">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('clients/create')}}">+</a>
            </div>
            <div class="col-lg-6">
                <h3>List des Clients</h3>
            </div>
            <div class="col-lg-2">
                <form class="d-flex" name="form1">
                    <input id="search-input" type="search" name="search1" id="search1" onchange="form1.submit()"
                    class="form-control " placeholder="Cin Clients...">
                </form>
            </div>
            <div class="col-lg-2">
                <form class="d-flex" name="form2">
                    <input id="search-input" type="search" name="search2" id="search2" onchange="form2.submit()"
                        class="form-control " placeholder="Nom Clients...">
                </form>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-danger" href="{{ url('clients')}}">x</a>
            </div>
        </div>
    </div>
    <br>
        @if ( count($clients)==0)
            <br>
            <div class="alert alert-success">
                <p align="center"><b>Aucune clients enregistrer</b></p>
            </div>
        @else
        <div class="prod1">
            <table class="table table-striped custom-table ">
                <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Cin</th>
                    <th>Phone</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th class="text-center">Actions</th>
                </tr>
                @foreach ($clients as $index => $a)
                <tr class="text-dark">
                    <td >{{ $index+1 }}</td>
                    <td class="pl-0">
                        <div class="d-flex align-items-center">
                        <label class="custom-control ios-switch">
                            <input type="checkbox" class="ios-switch-control-input" {{$a->CIN ? "checked" : ""}}>
                            <span class="ios-switch-control-indicator"></span>
                        </label>
                        <a>{{$a->Nom}}</a>
                        </div>
                    </td>
                    <td>{{$a->CIN == Null ? "en-cours" : $a->CIN}}</td>
                    <td>
                        {{$a->Phone == Null ? "en-cours" : $a->Phone}}
                    </td>
                    <td>
                    {{$a->Email == Null ? "en-cours" : $a->Email}}
                    </td>
                    <td>
                    {{$a->type == Null ? "en-cours" : $a->type}}
                    </td>
                    <td class="text-center">
                        <form action="{{ url('clients/'. $a->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{url('clients/'. $a->id) }}"><i class="fa fa-eye" style="color:black" ></i></a>
                            <a href="{{url('clients/'. $a->id .'/edit') }}"><i class="fa fa-edit" style="color:rgb(4, 12, 249)" ></i></a>
                            <button class="border-0 bg-transparent text-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        @endif
    </div>


    {{-- <div class="d-flex justify-content-center pagination-md">
        {{ $adherent->links() }}
    </div> --}}
@endsection
