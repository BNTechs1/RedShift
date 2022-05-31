@extends('dashboard_layout')

@section('content')

  <main id="main" class="main">
    <section class="section">
      <div class="row">    
        <div class="col-lg-6">
           <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Product</h5>

              <!-- Floating Labels Form -->
              <form action="/products" method="POST" class="row g-3">
              @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Product Name</label>
                  </div>
                  @error('name')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="tag" value="{{old('tag')}}"  class="form-control" id="floatingTags" placeholder="Tags(Comma Separated)">
                    <label for="floatingTags">Tags</label>
                  </div>
                      @error('tag')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="price" value="{{old('price')}}"  class="form-control" id="floatingPrice" placeholder="Price">
                    <label for="floatingPrice">Price</label>
                  </div>
                      @error('price')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input class="form-control"  name="image" value="{{old('image')}}" type="file" id="fileUpload">
                </div>
                    @error('image')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="description" value="{{old('description')}}"  placeholder="Description" id="floatingDescription" style="height: 100px;"></textarea>
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