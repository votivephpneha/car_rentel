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
@endsection

@section('content')
<section class="page-section title-banner" style="padding:8rem 0;margin-top:0px;">
	<div class="container px-4 px-lg-5">
	   <!-- <div class="row head_rgt">
	        <div class="col-lg-12">
	            <h2 class="text-white mt-0 mb-0"></h2>
	        </div>
	    </div>  -->       
	</div>
</section>
<section class="page-section forget_password">
	<div class="container">
		<div class="row info-det gx-4 gx-lg-5">
			<div class="row">
				<h4>Forget Password</h4>
			</div>
			<div class="row alt_box_form">
				<div class="col-md-12">
					 @if ($message = Session::get('error'))
				      <div class="alert alert-danger info-se-msg">
				          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				      {{ $message }}
				    </div>
				     @endif
				      @if ($message = Session::get('password_success'))
				      <div class="alert alert-success info-se-msg">
				      	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  {{ $message }}
					  </div>
					   @endif
					   <div class="fgt-div">
					  <form name="forget_password" method="post" action="{{ url('postforget_password') }}">
					  	@csrf
					    
					    <div class="form-group">
					      <label for="email">Email</label>
					      <input type="email" class="form-control" id="email" placeholder="" name="email">
						  <button type="submit" class="btn btn-default recover">Recover</button>
					    </div>
					  </form>
					  </div>
				    <div class="note-div">
				      <p><a href="{{ url('/') }}" data-action="show-popover-panel" aria-controls="header-login-panel" class="link link--accented">Back to login</a></p>
				    </div>
				</div>
			</div>
		</div> 
	</div>
</section>
@endsection