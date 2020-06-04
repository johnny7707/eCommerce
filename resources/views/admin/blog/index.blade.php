@extends('admin.admin_layouts')

@section('admin_content')
	
	<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Post Table</h5>
          <p></p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Post List 
          	<a href="{{ route('add.blogpost') }}" class="btn btn-sm btn-success" style="float: right;"> 
          		<i class="fa fa-plus-circle fa-lg" area-hidden="true"></i>  New Post </a></h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Post Title (English)</th>
                  <th class="wd-15p">Post Category </th>
                  <th class="wd-15p">Image</th>

                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($post as $row)
                <tr>
                  <td> {{ $row->post_title_en }} </td>
                  <td> {{ $row->category_name_en }} </td>
                  <td> <img src="{{ URL::to($row->post_image)}} " style="width: 50px; height: 50px;"> </td>
                  <td>
                  	<a href="{{ URL::to('edit/blogcategory/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                  	<a href=" {{ URL::to('delete/post/'.$row->id) }} " class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

    </div><!-- sl-mainpanel -->



@endsection