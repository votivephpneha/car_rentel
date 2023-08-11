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

<section class="page-section title-banner" style="padding:8rem 0;">
	<div class="container px-4 px-lg-5">
	   <!-- <div class="row head_rgt">
	        <div class="col-lg-12">
	            <h2 class="text-white mt-0 mb-0"></h2>
	        </div>
	    </div>  -->       
	</div>
</section>
<section class="page-section reset_password" style="padding:4rem 0;">
	<div class="container">
		<div class="row info-det gx-4 gx-lg-5">
			<div class="row">
				<h4>{{ __('messages.reset_password_heading') }}</h4>
			</div>
			<div class="row alt_box_form">
				<div class="col-md-12">
					@if ($message = Session::get('error'))
			        <div class="alert alert-success">
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
				  <div class="fgt-div">
				  <form name="resetPassword" method="post" action="{{ url('postreset_password') }}" class="resetPassword">
				  	@csrf
				    <div class="form-group">
				        <label for="Email">{{ __('messages.reset_password_email') }}</label>
				        <input type="hidden" name="token" value="{{ $token }}">
				        <input type="email" class="form-control" id="email" placeholder="{{ __('messages.reset_password_email') }}" name="email">
				    </div>
				    <div class="form-group">
				        <label for="new_password">{{ __('messages.reset_new_password') }}</label>
				        <input type="password" class="form-control" id="new_password" placeholder="{{ __('messages.reset_new_password') }}" name="new_password">
				    </div>
					<div class="form-group">
						<label for="confirm_password">{{ __('messages.reset_confirm_password') }}</label>
						<input type="password" class="form-control" id="confirm_password" placeholder="{{ __('messages.reset_confirm_password') }}" name="confirm_password">
					</div>
			      
			      <button type="submit" class="btn btn-default recover">{{ __('messages.reset_submit') }}</button>
				  </form>
				  </div>
				</div>
			</div>
		</div>	
	</div>
</section>

@endsection