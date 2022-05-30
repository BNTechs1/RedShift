@extends('layoutA')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Floating labels Form</h5>

                <!-- Floating Labels Form -->
                <form  method="POST" action="/products" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <div class="col-md-12">
                    <div class="form-floating">
                        <input name="name" type="text"  value="{{old('name')}}" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Name of Product</label>

                        @error('name')
                         
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" value="{{old('price')}}" name="price" class="form-control" id="floatingPrice" placeholder="Price">
                        <label for="floatingEmail">Price</label>
                        
                        @error('price')
                         
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" value="{{old('tag')}}" name="tag" class="form-control" id="floatingTag" placeholder="Tags">
                        <label for="floatingTag">Tag</label>
                        
                        @error('tag')
                         
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                   <div class="col-12">
                        <div class="form-floating">
                            <input name="image" class="form-control" placeholder="File Upload" type="file" id="formFile">
                            {{-- <label for="formFile">File Upload</label> --}}
                               @error('image')
                         
                            <p>{{$message}}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                        <textarea name="description" value="{{old('description')}}" class="form-control" placeholder="Description" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Description</label>
                        
                        @error('description')
                         
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-floating">
                            <input type="text" class="form-control" id="floatingCity" placeholder="City">
                            <label for="floatingCity">City</label>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="State">
                            <option selected>New York</option>
                            <option value="1">Oregon</option>
                            <option value="2">DC</option>
                            </select>
                            <label for="floatingSelect">State</label>
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingZip" placeholder="Zip">
                            <label for="floatingZip">Zip</label>
                        </div>
                    </div> --}}
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
@endsection