@extends('dashboard_layout')

@section('content')

  <main id="main" class="main">
    <section class="section">
      <div class="row">    
        <div class="col-lg-6">
           <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit services</h5>
              <!-- Floating Labels Form -->
              <form action="/services/update/{{$service->id}}" method="POST" class="row g-3">
              @csrf
              @method('PUT')
              {{-- {{$service}} --}}
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="name" value="{{$service->name}}" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">service Name</label>
                  </div>
                  @error('name')
                    <p>{{$message}}</p>
                  @enderror
                </div>                
                <div class="col-md-12">
                  <div class="form-floating">
                    <input class="form-control"  name="image" value="{{$service->image}}" type="file" id="fileUpload">
                </div>
                    @error('image')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="description" value="{{$service->description}}"  placeholder="Description" id="floatingDescription" style="height: 100px;"></textarea>
                    <label for="floatingDescription">Description</label>
                  </div>
                      @error('description')
                    <p>{{$message}}</p>
                  @enderror
                </div>
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
        </div>
      </div>
    </section>
    </main><!-- End #main -->

@endsection