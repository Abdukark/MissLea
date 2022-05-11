@extends('admin.partials.navbar')
@section('css')
  <link href="{{asset('css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection
@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Products</li>
</ol>
          <h6 class="font-weight-bolder mb-0">Products</h6>
@endsection
@section('content')
<div class="main-content p-2">
      <div class="float-md-right">
        <a href="{{ route('addproducts') }}" class="btn btn-sm btn-primary d-block">
          <span class="ml-2">Add Product</span>
        </a>
      </div>
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Existing Users</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Wrong Price</th>
                            <th>Price</th>
                            <th>Featured</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Created at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->slug}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->image}}</td>
                            <td>{{$product->wrongPrice}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->featured}}</td>
                            <td>{{$product->color}}</td>
                            <td>{{$product->size}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>                              
                              <a href="/products/edit/{{$product->id}}"><img src="{{ asset('img/Dashboard/edit-button-svgrepo-com.svg') }}" alt="Edit" width="20px"></a>
                            </td>
                            <td>
                              <a href="{{route('product.destroy',$product->id)}}"><img src="{{ asset('img/Dashboard/delete-button-svgrepo-com.svg') }}" alt="Delete" width="20px"></a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12">No Products found</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Code</th>
                          <th>Name</th>
                          <th>Slug</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Wrong Price</th>
                          <th>Price</th>
                          <th>Featured</th>
                          <th>Color</th>
                          <th>Size</th>
                          <th>Created at</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
      </div>
    </div>
    <!-- End Main Content -->
  </div>
@endsection
@section('scripts')
  <script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/datatable/datatables.min.js')}}"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>
<script>
  var element = document.getElementById("navpro");
  element.classList.add("active");
  element.classList.add("bg-gradient-primary");
</script>
@endsection
