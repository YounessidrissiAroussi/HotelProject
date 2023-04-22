@extends('app')
@section('main')

<div class="prod">
    <div class="row mt-3">
        <hr>
        <div class="col-lg-5 text-center">
            <h3 class="text-body">Rapport D'aujourd'hui</h3>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-4 text-center">
            <h3 class="text-body">{{ \Carbon\Carbon::now()->format('D-d-M-Y') }}</h3>
        </div>
        <hr>
    </div>
    <div id="dashboard">
        <div class="row">
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm border" style="border-radius: 0.5rem">
                            <div class="card-header">
                                <div class="row ">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <h4> {{ count($Reservations)}} Nouveau Reservations</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="prod01 card-body table-responsive p-0">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Nom Client</th>
                                        <th>Date Départ</th>
                                        <th>Validation</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Reservations as $index => $a)
                                        <tr >
                                            <td align="center">{{ $index+1 }}</td>
                                            <td class="pl-0">
                                                <a href="{{url('clients/'. $a->Client_id .'/edit') }}">{{ $a->client_Nom }}</a>
                                            </td>
                                            <td >{{ $a->DateDepart }}</td>
                                            <td class="d-flex ">
                                                <form action="{{url('reservations/'. $a->id.'/valide') }}" method="post">
                                                    @method('PATCH')
                                                    @csrf
                                                    <button class="border-0 bg-transparent" type="submit"><i class="fas fa-paperclip"></i></button>
                                                </form>
                                                <form action="{{url('reservations/'. $a->id.'/delete') }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="border-0 bg-transparent" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                                <a href="{{url('clients/'. $a->Client_id.'/edit') }}"><i class="fa fa-eye" style="color:black" ></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card shadow-sm border" style="border-radius: 0.5rem">
                            <div class="card-body text-center">
                                <canvas id="myChart1" height="180px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row ">
                    <div class="col-lg-12 mb-3">
                        <div class="card shadow-sm border" style="border-radius: 0.5rem">
                            <div class="card-body text-center">
                                <h3>Tableau de bord</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card shadow-sm border"  style="border-radius: 0.5rem">
                            <div class="card-body">
                                <canvas id="myChart" height="216px"></canvas>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
    var labels =  {{ Js::from($labels) }};
    var users =  {{ Js::from($data) }};
    const data = {
      labels: labels,
      datasets: [{
        label: 'Reservations',
        backgroundColor: 'rgb(0, 153, 204)',
        borderColor: 'rgb(255, 99, 132)',
        data: users,
      }]
    };
    const config = {
      // line, bar,
      type: 'bar',
      data: data,
      options: {}
    };
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
</script>

<script type="text/javascript">
      var labels =  {{ Js::from($labelss) }};
      var users =  {{ Js::from($dataa) }};
      const data1 = {
        labels: labels,
        datasets: [{
          label: 'Clients',
          backgroundColor: 'rgb(51, 51, 255)',
          borderColor: 'rgb(0, 255, 0)',
          data: users,
        }]
      };
      const config1 = {
        // line, bar,
        type: 'line',
        data: data1,
        options: {}
      };
      const myChart1 = new Chart(
        document.getElementById('myChart1'),
        config1
      );
</script>


@endsection
