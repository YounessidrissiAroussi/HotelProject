<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>La Chambotte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
    <style>
        .prod01 {
            display: block;
            overflow: auto;
            height: 185px;
        }
        .prod1 {
            display: block;
            overflow: auto;
            height: 500px;
            background-color:#ebf3f3;
        }
    </style>
  </head>
  <body>
    @include('partials.sidebar')
        <section class="mx-3 w-100 ">
            @if ($message = Session::get('success'))
                <br>
                <div class="alert alert-success" style="height: 60px">
                    <p>{{$message}}</p>
                </div>
            @elseif($message = Session::get('danger'))
                <br>
                <div class="alert alert-danger" style="height: 60px">
                    <p>{{$message}}</p>
                </div>
            @endif
            @yield('main')
        </section>
      </main>
    <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/sidebar.js')}}"></script>
  </body>
</html>
