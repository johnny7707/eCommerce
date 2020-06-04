@extends('admin.admin_layouts')

@section('admin_content')
	
	<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Subcription Users</h5>
          <p></p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">User Subcription Lists 
            <a href="" class="btn btn-sm btn-danger" style="float: right;" data-toggle="modal" data-target="#modaldemo3"> 
              <i class="fa fa-trash fa-lg" area-hidden="true"></i> All</a>
          </h6>
          

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Subcribing Time</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($Subc as $key=>$row)
                <tr>
                  <td> <input type="checkbox"> {{ $key +1 }} </td>
                  <td> {{ $row->email }} </td>
                  <td> {{ \Carbon\Carbon::parse($row->created_at)->diffForhumans()  }} </td>
                  <td>
                  	<a href=" {{ URL::to('delete/Subc/'.$row->id) }} " class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

    </div><!-- sl-mainpanel -->

@endsection