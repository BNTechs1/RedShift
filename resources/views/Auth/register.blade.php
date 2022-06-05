@extends('layoutA')

@section('content')
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">REDSHIFT</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action="/users" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf 
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input value="{{old('name')}}" type="text" name="name" class="form-control" id="yourName" required>

                      @error('name') 
                        <p>{{$message}}</p>
                      @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" value="{{old('email')}}"  name="email" class="form-control" id="yourEmail" required>
                       @error('email') 
                        <p>{{$message}}</p>
                      @enderror
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" value="{{old('password')}}"  name="password" class="form-control" id="yourPassword" required>
                      @error('password') 
                        <p>{{$message}}</p>
                      @enderror
                    </div>
                     <div class="col-12">
                      <label for="yourCPassword" class="form-label">Confirm Password</label>
                      <input type="password" value="{{old('password_confirmation')}}" name="password_confirmation" class="form-control" id="yourCPassword" required>
                      @error('password_confirmation') 
                        <p>{{$message}}</p>
                      @enderror
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100"  type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="/createproduct">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

@endsection