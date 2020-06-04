@extends('admin.admin_layouts')

@section('admin_content')
	
	<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
         
          <p></p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Coupon Update </a></h6>

          <div class="table-wrapper">
            
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form method="post" action=" {{ url('update/coupon/'.$coupon->id) }} "> 
                @csrf 
               <div class="modal-body pd-20">
                <div class="form-group">
                  <label for="exampleInputEmail1">Coupon Code</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" value="{{ $coupon->coupon }}" name="coupon">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Coupon Discount</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" value="{{ $coupon->discount }}" name="discount">
                </div>
               </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info pd-x-20"><i class="fa fa-save fa-lg"></i> Save Change</button>
                    
                </div>
            </form>

          </div><!-- table-wrapper -->
        </div><!-- card -->

    </div><!-- sl-mainpanel -->


@endsection