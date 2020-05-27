@extends('admin.admin_layouts')

@section('admin_content')
	
	<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Category Table</h5>
          <p></p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Category List 
          	<a href="" class="btn btn-sm btn-success" style="float: right;" data-toggle="modal" data-target="#modaldemo3"> 
          		<i class="fa fa-plus-square fa-lg" area-hidden="true"></i> Add New</a></h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Category Name</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
              
                <tr>
                  <td>  </td>
                  <td>  </td>
                  <td>
                  	<a href="" class="btn btn-sm btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                  	<a href="" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
            
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New Category</h6>
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
	            <form method="post" action=" {{ route('store.category') }} "> 
	            @csrf 
	             <div class="modal-body pd-20">
					<div class="form-group">
						<label for="exampleInputEmail1">Category Name</label>
						<input type="text" class="form-control" id="category_name" aria-describedby="emailHelp" placeholder="Category" name="category_name">
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