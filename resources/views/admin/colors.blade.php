@extends('admin.partials.navbar')

  @section('css')
  <link href="{{asset('css/dataTables.bootstrap4.css')}}" rel="stylesheet">
  @endsection
  @section('breadcrumb')
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Colors</li>
  </ol>
  <h6 class="font-weight-bolder mb-0">Colors</h6>
  @endsection
    @section('content')
      <!-- Main Content -->
      <div class="p-3">
        <div class="card mb-3">
          <div class="card-body">
              <h5 class="card-title">Create New Color</h5>
              <div class="table-responsive">
                <form action="/admin/colors" class="form-inline" method="POST">
                  @csrf
                  <div class="row container">
                    <div class="col-md-1 pt-2">
                      <label for="name">Name :</label>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Tag Name">
                    </div>
                    <div class="col-md-1 pt-2">
                      <label for="name">Color :</label>
                    </div>
                    <div class="col-md-3 pt-2">
                      <input type="color" class="form-control" name="hex" id="hex">
                    </div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                  </div>
              </form>
              </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
              <h5 class="card-title">Existing Colors</h5>
              <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered text-center">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>hex</th>
                              <th>color</th>
                              <th>Created at</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                          @forelse ($colors as $color)
                          <tr>
                              <td> {{$color->id}} </td>
                              <td>{{$color->name}}</td>
                              <td>{{$color->hex}}</td>
                              <td><div style="background-color:{{$color->hex}};color:white;padding:15px;"></div></td>
                              <td>{{$color->created_at}}</td>
                              <td>
                                <a href="{{route('color.destroy',$color->id)}}"><img src="{{ asset('img/Dashboard/delete-button-svgrepo-com.svg') }}" alt="Delete" width="20px"></a>
                              </td>
                          </tr>
                          @empty
                          <tr>
                              <td colspan="5" class="text-center">No Colors Available</td>
                          </tr>
                          @endforelse
                      </tbody>
                      <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>hex</th>
                            <th>color</th>
                            <th>Created at</th>
                            <th>Delete</th>
                          </tr>
                      </tfoot>
                  </table>
              </div>
  
          </div>
        </div>
      </div>
   @endsection
  @section('scripts')
    <!-- Table -->
  <script src="{{asset('js/jquery.min.js')}}"></script>

    <script src="{{asset('js/datatable/datatables.min.js')}}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    <script>
      var element = document.getElementById("navcol");
      element.classList.add("active");
      element.classList.add("bg-gradient-primary");
    </script>
  @endsection