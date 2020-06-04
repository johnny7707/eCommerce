@extends('admin.admin_layouts')

@section('admin_content')
	
	<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <!-- <h5>Brand Table</h5> -->
          <p></p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Product List 
          	<a href="{{ route('create.product') }}" class="btn btn-sm btn-success" style="float: right;"> 
          		<i class="fa fa-plus-circle fa-lg" area-hidden="true"></i> New Product</a></h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Product Code</th>
                  <th class="wd-15p">Product Name</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-15p">Brand</th>
                  <th class="wd-15p">Quantity</th>
                  <th class="wd-15p">Status</th>

                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($product as $row)
                <tr>
                  <td> {{ $row->product_code }} </td>
                  <td> {{ $row->product_name }} </td>
                  <td> <img src="{{ URL::to($row->image_one) }}" height="50px" width="50px"> </td>
                  <td> {{ $row->category_name }} </td>
                  <td> {{ $row->brand_name }} </td>
                  <td> {{ $row->product_quantity }} </td>
                  <td> 
                    @if($row->status == 1)
                    <span class="badge badge-success"> Active</span>
                    @else
                    <span class="badge badge-danger"> Inactive</span>
                    @endif
                  </td>
                  <td>
                  <a href="{{ URL::to('edit/product/'.$row->id) }}" class="btn btn-sm btn-info" title="Edit">
                    <i class="fa fa-edit" aria-hidden="true"></i></a>

                  <a href=" {{ URL::to('delete/product/'.$row->id) }} " class="btn btn-sm btn-danger" title="Delete" id="delete">
                    <i class="fa fa-trash" aria-hidden="true"></i></a>

                  <a href="{{ URL::to('view/product/'.$row->id) }}" class="btn btn-sm btn-pink" title="Preview">
                    <i class="fa fa-eye" aria-hidden="true"></i></a>

                    @if($row->status == 1)
                  <a href=" {{ URL::to('inactive/product/'.$row->id) }} " class="btn btn-sm btn-danger" title="Inactive">
                    <i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                    @else
                  <a href=" {{ URL::to('active/product/'.$row->id) }} " class="btn btn-sm btn-info" title="Active">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                    @endif
                    

                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

    </div><!-- sl-mainpanel -->

<!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Create New Product</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              	@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
	      
	           </div><!-- modal-body -->
			        <div class="modal-footer">
			            <button type="submit" class="btn btn-info pd-x-20"><i class="fa fa-save fa-lg"></i> Save</button>
			            <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Close</button>
			        </div>
	   </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

@endsection