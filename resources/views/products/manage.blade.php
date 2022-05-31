 @extends('dashboard_layout')

@section('content')

  <main id="main" class="main">
    <div>
    <a type="button" href="/creatproduct" class="btn btn-primary"><i class="bi bi-star me-1"></i>Add product</a>
    </div>
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
                    @foreach ($products as $product)
                        <tr>
                            {{-- <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td> --}}
                            
                            <th scope="row">{{$product['id']}}</th>
                            <td>{{$product['id']}}</td>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['price']}}</td>
                            <td>{{$product['tag']}}</td>
                            <td> 
                            <div>
                                <button type="button" class="btn btn-secondary"><i class="bi bi-collection"></i></button>
                                <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
                                <button type="button" class="btn btn-warning"><i class="bi bi-exclamation-triangle"></i></button>
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