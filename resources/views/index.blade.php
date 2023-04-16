<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
<body>
    <div class="container-l bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
            @include('partials.header')
        <!-- Header End -->
        <!-- Content -->
              @yield('section')
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
        <!-- Footer Start -->
                @include('partials.footer')
        <!-- Footer End -->
    </div>
    </div>
    @yield('script')
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>