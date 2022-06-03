@extends('dashboard_layout')

@section('content')

  <main id="main" class="main">
    <section class="section">
      <div class="row">    
        <div class="col-lg-6">
           <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit News Info</h5>
              <!-- Floating Labels Form -->
              <form action="/blogs/update/{{$team->id}}" method="POST" class="row g-3">
              @csrf
              @method('PUT')
              {{-- {{$service}} --}}
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="name" value="{{$team->name}}" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Title</label>
                  </div>
                  @error('name')
                    <p>{{$message}}</p>
                  @enderror
                </div>                
                <div class="col-md-12">
                  <div class="form-floating">
                    <input class="form-control"  name="image" value="{{$team->image}}" type="file" id="fileUpload">
                </div>
                    @error('image')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="description" value="{{$team->description}}"  placeholder="Description" id="floatingDescription" style="height: 100px;"></textarea>
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