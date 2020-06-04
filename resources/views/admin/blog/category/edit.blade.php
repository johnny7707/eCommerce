@extends('admin.admin_layouts')

@section('admin_content')
  
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Blog Category Table</h5>
          <p></p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Blog Category Update </a></h6>

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
            <form method="post" action=" {{ url('update/blog/category/'.$blogcateEdit->id) }} "> 
                @csrf 
               <div class="modal-body pd-20">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name English</label>
                  <input type="text" class="form-control" id="category_name_en" aria-describedby="emailHelp" value="{{ $blogcateEdit->category_name_en }}" name="category_name_en">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name Thai</label>
                  <input type="text" class="form-control" id="category_name_th" aria-describedby="emailHelp" value="{{ $blogcateEdit->category_name_th }}" name="category_name_th">
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