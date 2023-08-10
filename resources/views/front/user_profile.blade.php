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
							<h4>User Profile</h4>	
						</div>
			<div class="row">
				<div class="col-md-3">
					@include('front.layout.user_header')
				</div>
				<div class="col-md-9">
					<div class="profile">
						@if ($message = Session::get('success'))
				        <div class="alert alert-success">
				          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				          {{ $message }}
				        </div>
				         @endif
				        <form name="registration" method="post" action="{{ url('user/postuserProfile') }}" enctype="multipart/form-data">
				          @csrf
				          <div class="row">
				            <div class="col-md-6">
				          <div class="form-group mb-tm">
				            <label for="email">Name:</label>
				            <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" value="{{ $user_data['fname'] }}">
				          </div>
				        </div>
				         <div class="col-md-6">
				         <div class="form-group mb-tm">
				            <label for="email">Email:</label>
				            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $user_data['email'] }}" readonly="">
				          </div>
				      </div>
				        </div>
				          
				          <div class="form-group mb-tm">
				            <label for="phone_no">Phone No:</label>
				            <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone Number" name="phone_no" value="{{ $user_data['phone'] }}">
				          </div>
				          <div class="form-group mb-tm">
				            <label for="phone_no">Address</label>
				            <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{ $user_data['address'] }}">
				          </div>
				          <div class="form-group mb-tm">
				            <label for="phone_no">City</label>
				            <input type="text" class="form-control" id="address" placeholder="Enter City" name="city" value="{{ $user_data['user_city'] }}">
				          </div>
				          <div class="form-group mb-tm">
				            <label for="phone_no">Country</label>
				            <select class="form-control select2bs4" name="user_country"  id="user_country" style="width: 100%;">

	                          <option value="">Select Country</option>

	                          @foreach ($countries as $cont)

	                            <option value="{{ $cont->id }}" @if($cont->id == $user_data['user_country'] ) selected @endif>{{ $cont->name }}</option>

	                          @endforeach

	                        </select>
				          </div>
				          <div class="form-group mb-tm">
				            <label for="email">Profile Image:</label>
				            <input type="file" class="form-control" id="profile_image" name="profile_image">
				            <input type="hidden" name="hidden_profile_image" value="{{ $user_data['user_image'] }}">
				            <div class="user_img">
				              <?php if($user_data['user_image']){
				                ?>
				                <img src="{{ url('/public/upload/user') }}/{{ $user_data['user_image'] }}" style="width:100px">
				                <?php
				              }else{
				                ?>
				                <img src="{{ url('/public/uploads/user') }}/1683022539_user.jpg" style="width:100px">
				                <?php
				              }
				              ?>
				              
				            </div>
				          </div>
				          
				          
				        <center>  <button class="profile_upd" type="submit" class="btn btn-default">Update Profile</button></center>
				        </form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection