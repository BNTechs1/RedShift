@extends('dashboard_layout')

@section('content')

  <main id="main" class="main">
    <div>
    <a type="button" href="/createservices" class="btn btn-primary"><i class="bi bi-star me-1"></i>Add Service</a>
    </div>
    {{-- {{ $services['name']}} --}}
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Team Table</h5>

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
                    @foreach ($services as $service=>$value)
                        <tr>
                            {{-- <th scope="row">{{$value['id']}}</th> --}}
                            {{-- <td><img src="{{$value->image ? asset('storage/' . $value->image) : asset('/assets/images/dtegku1i@2x.png')}}" alt="blog image" /></td> --}}
                            <td>{{$value->name}}</td>
                            <td>{{$value->name}}</td>
                            <td> 
                            <div>
                            {{-- services/{{$value->id}}/edit --}}
                                <a href="/services/{{$value->id}}/edit"  class="btn btn-secondary"><i class="bi bi-collection"></i></a>
                                <a href="/services/delete/{{$value->id}}" type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></a>
                                <a href="/services/{{$value->id}}"type="button" class="btn btn-warning"><i class="bi bi-exclamation-triangle"></i></a>
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
                  <li class="page-item"><a class="page-link" href="/service?page=1">1</a></li>
                  <li class="page-item"><a class="page-link" href="/service?page=2">2</a></li>
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
</main>