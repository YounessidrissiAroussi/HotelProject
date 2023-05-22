<x-guest-layout>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- <h3 class="fw-bold mb-2 text-warning">La Chambotte</h3> --}}
                        <h1 class="fw-bold mb-4 text-success">Inscription</h1>

                        <div class="form-outline form-white mb-4">
                            <input type="text"  class="form-control " placeholder="Nom" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="email" id="typeEmailX" class="form-control " placeholder="E-mail" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" id="typePasswordX" class="form-control " placeholder="Mot de pass" name="password" required autocomplete="new-password"/>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" id="typePasswordX" class="form-control " placeholder="Confirmation Mot de pass" name="password_confirmation" required autocomplete="new-password"/>
                        </div>

                        <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ __("S'inscrire") }}</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-guest-layout>
