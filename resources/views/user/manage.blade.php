@extends('dashboard_layout')

@section('content')

  <main id="main" class="main">
    <div>
    <!-- Vertically centered Modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmodal">
     Add User
    </button>
    {{-- <a type="button" href="/createproducts" class="btn btn-primary"><i class="bi bi-star me-1"></i>Add product</a> --}}
    </div>
    {{-- {{ $products['name']}} --}}
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Products Table</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th  scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user=>$value)
                        <tr>
                            {{-- <th scope="row">{{$value['id']}}</th> --}}
                            {{-- <td><img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" /></td> --}}
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td> 
                            <div>
                            {{-- products/{{$value->id}}/edit --}}
                                <a href="/users/{{$value->id}}/edit" class="btn btn-secondary"><i class="bi bi-collection"></i></a>
                                <a href="/users/delete/{{$value->id}}" type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></a>
                                {{-- <a href="/products/{{$value->id}}"type="button" class="btn btn-warning"><i class="bi bi-exclamation-triangle"></i></a> --}}
                            </div>
                            </td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
                  <!-- Pagination with icons -->
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="/product?page=1">1</a></li>
                  <li class="page-item"><a class="page-link" href="/product?page=2">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav><!-- End Pagination with icons -->
                </div>
                
            </div>
        </div>
         <div class="col-lg-6">

         
            
        </div>
    </div>
    </section>

     <div class="modal fade" id="createmodal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Create User</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
      </div><!-- End Vertically centered Modal-->
</main>