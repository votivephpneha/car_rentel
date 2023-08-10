@extends('front.layout.layout')
@section('title', 'Home')

@section('current_page_css')
<style type="text/css">
  .error{
    color:red;
  }
</style>
@endsection

@section('current_page_js')
<script>
  document.getElementById("profile_image")
  .onchange = function(event) {
    let file = event.target.files[0];

    console.log("file","{{ url('/uploads') }}/"+file.name);
    let blobURL = URL.createObjectURL(file);
   
    $(".user_img img").attr("src",blobURL);
  }
  
</script>
@endsection

@section('content')
  <section class="page-section title-banner" style="padding:8rem 0;">
        <div class="container px-4 px-lg-5">
           <!-- <div class="row head_rgt">
                <div class="col-lg-12">
                    <h2 class="text-white mt-0 mb-0"></h2>
                </div>
            </div>  -->       
        </div>
  </section>
  <section class="page-section user_profile">
    <div class="container">
      <div class="profile_heading" style="text-align: center">
							<h4>Change Password</h4>	
						</div>
      <div class="row">
        <div class="col-md-3">
          @include('front.layout.user_header')
        </div>
        <div class="col-md-9">
          <div class="profile">
            @if ($message = Session::get('password_error'))
            <div class="alert alert-danger">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{ $message }}
            </div>
             @endif
             @if ($message = Session::get('password_success'))
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{ $message }}
            </div>
             @endif
            <form name="change_password" method="post" action="{{ url('user/postuser_ChangePassword') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-tm">
                <label for="old_password">Old Password</label>
                <input type="password" class="form-control" id="old_password" placeholder="Enter Old Password" name="old_password">
              </div>
              <div class="form-group mb-tm">
                <label for="new_password">New Password</label>
                <input type="password" class="form-control" id="new_password" placeholder="Enter New Password" name="new_password">
              </div>
              <div class="form-group mb-tm">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="Enter Confirm Password" name="confirm_password">
              </div>
              
              <button type="submit" class="btn btn-default profile_upd">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection