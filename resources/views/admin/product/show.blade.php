@extends('admin.admin_layouts')

@section('admin_content')
     <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('admin.home')}}">Admin</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Product details Page 
            <a href="{{ route('list.product')}}" class="btn btn-sm btn-dark  pull-right">
                <i class="fa fa-product-hunt" aria-hidden="true"></i> All Products</a>
          </h6>

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->product_name }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->product_code }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->product_quantity }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Discount Price: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->discount_price }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->category_name }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->subcategory_name }}</strong>
                </div>

              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brands: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->brand_name }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->product_size }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->product_color }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->selling_price }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label">Product Detials: <span class="tx-danger">*</span></label><br>
                   <p> {!! $product->product_details !!} </p>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Video Link: <span class="tx-danger"> </span></label><br>
                  <strong>{{ $product->video_link}}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image One (Main Thumbnail):  <span class="tx-danger">*</span></label><br>
                  <label class="custom-file">
                    <img src="{{ URL::to($product->image_one) }}" width="100" height="100">
                  </label>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two:  <span class="tx-danger"></span></label><br>
                  <label class="custom-file">
                    <img src="{{ URL::to($product->image_two) }}" width="100" height="100">
                  </label>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three:  <span class="tx-danger"></span></label><br>
                  <label class="custom-file">
                    <img src="{{ URL::to($product->image_three) }}" width="100" height="100">
                  </label>
                </div>
              </div><!-- col-4 -->

            </div><!-- row -->
<hr>
            <div class="row">

              <div class="col-lg-4">
                <label class="">
                  @if($product->main_slider == 1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">Inactive</span>
                  @endif
                  <span> Main Slider </span>
                </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <label class="">
                  @if($product->hot_deal == 1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">Inactive</span>
                  @endif
                  <span> Hot Deal </span>
                </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <label class="">
                  @if($product->best_rated == 1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">Inactive</span>
                  @endif
                  <span> Best Rated </span>
                </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <label class="">
                  @if($product->trend == 1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">Inactive</span>
                  @endif
                  <span> Trend Product </span>

                </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <label class="">
                  @if($product->mid_slider == 1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">Inactive</span>
                  @endif
                  <span> Middle Slider </span>
                </label>

              </div><!-- col-4 -->

              <div class="col-lg-4">
                <label class="">
                  @if($product->hot_new == 1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">Inactive</span>
                  @endif
                  <span> Hot New </span>
                </label>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <label class="">
                  @if($product->buyone_getone == 1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-danger">Inactive</span>
                  @endif
                  <span> BuyOne GetOne </span>
                </label>
              </div><!-- col-4 -->


            </div><!-- end row -->
            <br><br>

            <div class="form-layout-footer">

            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->

      </div><!-- row -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection
