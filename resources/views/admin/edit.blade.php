  @extends('admin.partials.navbar')

  @section('css')
    <!--Select2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  @endsection

  @section('breadcrumb')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Products</li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Products</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Edit Products</h6>
  @endsection
  @section('content')
    <div class="main-content p-3">
      <!--- Edit Products Forms -->
      <form action="/admin/products/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="">
            <div class="card">
              <div class="card-body">
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="">Product Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Product Name" value="{{$product->name}}">
                    </div>
                    <div class="col-md-6">
                      <label for="">Product Code</label>
                      <input type="text" name="code" class="form-control" placeholder="Product Code" value="{{$product->code}}">
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="description" placeholder="Write the product description" rows="3">{{$product->description}}</textarea>
                </div>
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="">Product Price</label>
                      <input type="number" name="price" class="form-control" placeholder="Product Price" value="{{$product->price}}">
                    </div>
                    <div class="col-md-6">
                      <label for="">Product Wrong Price</label>
                      <input type="number" name="wrongPrice" class="form-control" placeholder="Product Wrong Price" value="{{$product->wrongPrice}}">
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="" class="d-block">Featured</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="featured" id="inlineRadio1" value="option1" {{ ($product->featured === 1) ? 'checked' : '' }} >
                        <label class="form-check-label" for="inlineRadio1">True</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="featured" id="inlineRadio2" value="option2" {{ ($product->featured === 0) ? 'checked' : '' }} >
                        <label class="form-check-label" for="inlineRadio2">False</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="category">Category</label>
                      <select class="form-control js-example-basic-multiple" id="category" name="category_id[]" multiple>
                        @forelse ($categories as $category)
                        <option value="{{$category->id}}" {{ ($product->categories()->pluck('category_id')->contains($category->id)) ?'selected':''}}>{{$category->name}}</option>
                        @empty
                        <option>No Category available</option>
                        @endforelse
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="tag">tag</label>
                      <select class="form-control js-example-basic-multiple" id="tag" name="tag_id[]" multiple>
                        @forelse($tags as $tag)
                        <option value="{{$tag->id}}" {{ ($product->tags()->pluck('tag_id')->contains($tag->id)) ?'selected':''}}>{{$tag->name}}</option>
                        @empty
                        <option>No Tags available</option>
                        @endforelse
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="size">size</label>
                      <select class="form-control js-example-basic-multiple" id="size" name="size[]" multiple>
                        @php
                          $str = $product->size;
                          $arr = explode(" ",$str);
                        @endphp
                        <option {{ in_array("XS",$arr) ?'selected':''}} >XS</option>
                        <option {{ in_array("S",$arr) ?'selected':''}} >S</option>
                        <option {{ in_array("M",$arr) ?'selected':''}} >M</option>
                        <option {{ in_array("L",$arr) ?'selected':''}} >L</option>
                        <option {{ in_array("XL",$arr) ?'selected':''}} >XL</option>
                        <option {{ in_array("XXL",$arr) ?'selected':''}} >XXL</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="color">color</label>
                      <select class="form-control js-example-basic-multiple" id="color" name="color_id[]" multiple>
                        @forelse ($colors as $color)
                        <option value="{{$color->id}}" {{ ($product->colors()->pluck('color_id')->contains($color->id)) ?'selected':''}} ? 'selected' : '' }}>{{$color->name}}</option>
                        @empty
                        <option>No color is available</option>
                        @endforelse
                      </select>
                    </div>
                  </div>
                </div>
                <div class="input-group">
                  <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                      <i class="fa fa-picture-o"></i> Choose Product Picture
                    </a>
                  </span>
                  <input id="thumbnail" class="form-control mx-2" type="text" name="image" value="{{$product->image}}">
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$product->image}}">
                <hr>
                    <!-- Save changes button-->
                <button class="btn btn-primary mb-3" type="submit">Save Editing of the Product</button>
              </div>
            </div>
          </div>
      </form>
    </div>
  @endsection
  @section('scripts')
  <script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
 $('#lfm').filemanager('image');
 var route_prefix = "/laravel-filemanager";
 $('#lfm').filemanager('image', {prefix: route_prefix});
</script>
  @endsection