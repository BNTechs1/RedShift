@extends('dashboard_layout')

@section('content')

  <main id="main" class="main">
    <div>
    <a type="button" href="/creatproduct" class="btn btn-primary"><i class="bi bi-star me-1"></i>Add product</a>
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
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Tags</th>
                        <th  scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product=>$value)
                        <tr>
                            <th scope="row">{{$value['id']}}</th>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->price}}</td>
                            <td>{{$value->tag}}</td>
                            <td> 
                            <div>
                                <a href="/product/{{$value->id}}/edit" type="button" class="btn btn-secondary"><i class="bi bi-collection"></i></a>
                                <a href="/products/delete/{{$value->id}}" type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></a>
                                <a href="/products/{{$value->id}}"type="button" class="btn btn-warning"><i class="bi bi-exclamation-triangle"></i></a>
                            </div>
                            </td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </div>
    </section>
</main>