@extends('dashboard_layout')

@section('content')

  <main id="main" class="main">
    <div>
     <!-- Vertically centered Modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmodal">
     Add News
    </button>
    {{-- <a type="button" href="/createblogs" class="btn btn-primary"><i class="bi bi-star me-1"></i>Add Teams</a> --}}
    </div>
    {{-- {{ $services['name']}} --}}
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">News Table</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th  scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($newss as $news=>$value)
                        <tr>
                            {{-- <th scope="row">{{$value['id']}}</th> --}}
                            {{-- <td><img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" /></td> --}}
                            <td>{{$value->name}}</td>
                            <td>{{$value->name}}</td>
                            <td> 
                            <div>
                            {{-- services/{{$value->id}}/edit --}}
                                <a href="/blogs/{{$value->id}}/edit"  class="btn btn-secondary"><i class="bi bi-collection"></i></a>
                                <a href="/blogs/delete/{{$value->id}}" type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></a>
                                <a href="/blogs/{{$value->id}}"type="button" class="btn btn-warning"><i class="bi bi-exclamation-triangle"></i></a>
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
                  <li class="page-item"><a class="page-link" href="/blogs?page=1">1</a></li>
                  <li class="page-item"><a class="page-link" href="/blogs?page=2">2</a></li>
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
              <h5 class="modal-title">Create News</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Floating Labels Form -->
              <form action="/blogs" method="POST"  enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">News Title</label>
                  </div>
                  @error('name')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input class="form-control" name="image"  type="file" id="fileUpload">
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
      </div><!-- End Vertically centered Modal-->

</main>