@extends('app')
@section('main')
    <div class="row mt-3">
        <div class="row mt-3">
            <div class="col-lg-1">
                <a class="btn btn-success" href="{{ url('chambers/create')}}">+</a>
            </div>
            <div class="col-lg-8">
                <h3>List des chambers</h3>
            </div>

            <div class="col-lg-2">
                <form class="d-flex" name="form1">
                    <input id="search-input" type="search" name="search1" id="search1" onchange="form1.submit()"
                    class="form-control " placeholder="Code chambers...">
                </form>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-danger" href="{{ url('chambers')}}">x</a>
            </div>
        </div>
    </div>
    <br>
        @if ( count($chambers)==0)
            <br>
            <div class="alert alert-success">
                <p align="center"><b>Aucune chambers enregistrer</b></p>
            </div>
        @else
        <div class="prod1">
            <table class="table table-striped custom-table ">
                <tr>
                    <th>Numéro</th>
                    <th>NChambre</th>
                    <th>titre</th>
                    <th>Description</th>
                    <th>prix</th>
                    <th>images</th>
                    <th class="text-center">Actions</th>
                </tr>
                @foreach ($chambers as $index => $a)
                <tr class="text-dark">
                    <td >{{ $index+1 }}</td>
                    <td >{{ $a->NChambre }}</td>
                    <td >{{ $a->titre }}</td>
                    <td style="width:200px;">{{ $a->Description }}</td>
                    <td >{{ $a->prix }}</td>
                    <td>
                        @php [$data = json_decode($a->images) , ($nbr = count($data))]@endphp
                        {{$nbr}} images
                        {{-- @for ($i = 0; $i < count($data); $i++)
                            <img class="row" src="{{ asset('storage/'.$data[$i]) }}" width="100px">
                        @endfor --}}
                    </td>
                    <td class="text-center">
                        <form action="{{ url('chambers/'. $a->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a  href="{{url('chambers/'. $a->id) }}"><i class="fa fa-eye" style="color:black" ></i></a>
                            <a  href="{{url('chambers/'. $a->id .'/edit') }}"><i class="fa fa-edit" style="color:rgb(4, 12, 249)" ></i></a>
                            <button class="border-0 bg-transparent text-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        @endif
    </div>

@endsection
