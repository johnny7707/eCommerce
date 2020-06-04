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
          <h6 class="card-body-title">Brand List 
          	<a href="" class="btn btn-sm btn-success" style="float: right;" data-toggle="modal" data-target="#modaldemo3"> 
          		<i class="fa fa-plus-circle fa-lg" area-hidden="true"></i> New Brand</a></h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Brand Name</th>
                  <th class="wd-15p">Brand Logo</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($brand as $key=>$row)
                <tr>
                  <td> {{ $key +1 }} </td>
                  <td> {{ $row->brand_name }} </td>
                  <td> <img src="{{ URL::to($row->brand_logo) }}" height="50px" width="120px"> </td>
                  <td>
                  	<a href="{{ URL::to('edit/brand/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                  	<a href=" {{ URL::to('delete/brand/'.$row->id) }} " class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> New Brand</h6>
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
	            <form method="post" action=" {{ route('store.brand') }} " enctype="multipart/form-data"> 
	            @csrf 
	             <div class="modal-body pd-20">
					<div class="form-group">
						<label for="exampleInputEmail1">Brand Name</label>
						<input type="text" class="form-control" id="brand_name" aria-describedby="emailHelp" placeholder="Brand Name" name="brand_name">
					</div>
          <div class="form-group">
            <label for="exampleInputEmail1">Brand Logo</label>
            <input type="file" class="form-control" aria-describedby="emailHelp" name="brand_logo" placeholder="Brand Logo">
          </div>
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