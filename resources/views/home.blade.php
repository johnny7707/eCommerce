@extends('layouts.app')
@section('content')
<!-- content wrpper -->
  
<div class="contact_form">
  <div class="container">
        <div class="row">
          <div class="col-8 card">
            <table class="table table-response">
              <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First </th>
                <th scope="col">Last </th>
                <th scope="col">Body </th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="">1</td>
                  <td scope="">Johnny</td>
                  <td scope="">Hongthuch</td>
                  <td scope="">sdfsdfds</td>
                </tr>
              </tbody>
            </table>

          </div>

        <div class="col-4">
          <div class="card">
            <img src="{{ asset('public/frontend/images/ant1.jpg') }}" class="card-img-top img-circle" style="height: 90px; width: 90px; margin-left: 30%;">
            <div class="card-body">
              <h4 class="card-title text-center"> {{ Auth::user()->name }} </h4>
              
            </div>

            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="{{ route('password.change') }}"><i class="fa fa-key"></i> Change Password</a> </li>
              <li class="list-group-item"><a href="  "><i class="fa fa-user"></i> Profile</a> </li>
            </ul>
            <div class="card-body">
              <a href="{{ route('user.logout') }}" class="btn btn-sm btn-danger btn-block"><i class="fa fa-sign-out-alt"></i> LogOut</a>
              
            </div>
          </div>

        </div>
      </div>

      
  </div>

</div>

@endsection
