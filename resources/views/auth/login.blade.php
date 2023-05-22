<x-guest-layout>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1 class="fw-bold mb-4 text-success">Connexion</h1>

                        <div class="form-outline form-white mb-4">
                            <input type="email" id="typeEmailX" placeholder="E-mail" class="form-control form-control-lg" name="email" :value="old('email')" />
                            {{-- <label class="form-label" for="typeEmailX">Email</label> --}}
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" id="typePasswordX" placeholder="Mot De Pass" class="form-control form-control-lg" name="password" />
                            {{-- <label class="form-label" for="typePasswordX">Password</label> --}}
                        </div>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ __('Se conecter') }}</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-guest-layout>
