@extends('index')
@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
@endsection
@section('section')
<div class="container-xxl bg-white p-0">
    <!-- Contact Start -->
    <div class="container py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title text-center text-primary text-uppercase">Connexion</h3>
                {{-- <h1 class="mb-5"><span class="text-primary text-uppercase">Pour riservez</span>Pour Toute Question</h1> --}}
            </div>
                <div class="col-md-6 px-5 py-5" style="margin: auto;">
                    <div class="wow fadeInUp" data-wow-delay="0.25s">
                        <form>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Votre Email">
                                        <label for="email">Votre Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="Nom" placeholder="Mot de passe">
                                        <label for="name">Mot de passe</label>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12 mb-2">
                                        <a href="" class="float-end">Créez votre compte</a>
                                </div> --}}
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Connexion</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</div>

@endsection