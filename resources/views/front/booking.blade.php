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
<!-- Form Overview-->
		<section class="page-section title-banner">
            <div class="container px-4 px-lg-5">
                <div class="row head_rgt">
                    <div class="col-lg-12">
                        <h2 class="text-white mt-0 mb-0"></h2>
                    </div>
                </div>         
            </div>
 		</section>
        <section class="page-section book-form">
            <div class="container">
                <div class="row info-det gx-4 gx-lg-5"> 
					<div class="row">
					<h4>Mens Driving Detail's</h4>
					<p>As they appear on driving licence</p>
					</div>
					<div class="row alt_box_form">
					<div class="col-lg-6 col-sm-6 form_col mx-auto">
						<form method="post" action="{{ url('submit_booking') }}" name="bookingForm">
						@csrf	
						<div class="booking-form">
							<div class="form-outline mb-3">
								<label class="form-label">Email address</label>
								<input type="hidden" name="car_id" value="{{ $car_id }}"/>
								<input type="email" name="email_address" class="form-control" />
								<span>So we can send the confirmation email and voucher</span>
							</div>
						<div class="form-outline mb-3">
							<label class="form-label">Title</label>
								<select class="select" name="title">
								<option value="">Select your option</option>
									<option value="1">Mr</option>
									<option value="2">Ms</option>
								</select>
						</div>
						<div class="form-outline mb-3">
							<label class="form-label">First Name</label>
							<input type="text" class="form-control" name="first_name">
						</div>
						<div class="form-outline mb-3">
							<label class="form-label">Last Name</label>
							<input type="text" class="form-control" name="last_name">
						</div>
						<div class="form-outline mb-3">
							<label class="form-label">Contact Number</label>							
							<input id="phone" name="phone" type="tel" placeholder="Phone Number" class="form-control" maxlength="10"/>
							<span>So we can call if any problems come up</span>
						</div>
						<div class="form-outline mb-3">
							<label class="form-label">Country of Residence</label>		
							
							<select id='country_select' name='country'> 
								<option>Select</option>
								<?php
									foreach ($countries_list as $country) {
										?>
										<option value="<?php echo $country->name; ?>"><?php echo $country->name; ?></option>
										<?php
										
									}
								?>
								
							</select>
						</div>
						<div class="form-outline mb-3">
							<label class="form-label">Flight Number (Optional)</label>							
							<input type="number" class="form-control" name="flight_no">
							<span>Just in case the flight is delayed</span>
						</div>
						<div class="form-outline btn-submit">
						<button type="submit" class="btn btn-primary">Submit</button>
						</div>
                </div>
                </form>	
				</div>
				
				<div class="col-lg-6 col-sm-6 rgt_col_form">
					<div class="drive_details_cont">
						<h3>Class of its own</h3>
						<h2>Rent Verified Luxury Cars Directly From <span>Royal Car Rental</span></h2>
						<div class="auth-btn-links">
							<a class="btn btn-one" href="{{ url('page/contact-us') }}">Contact Us Now</a>
							<a class="btn btn-two" href="{{ url('/') }}">Search Cars</a>
						</div>
					</div>
				</div>
				</div>
            </div>
        </section>

        

        <!-- Call to action-->
        <section class="page-section cta">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Do You Have Something To Sell?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a class="cta-btn" href="#">Contact Us <i class="bi bi-arrow-right"></i></a>
            </div>
        </section>
@endsection