<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5 logo-new">
                <?php $home_logo = $page_info->home_logo; ?>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('public/uploads/')}}/{{$home_logo}}"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link current" href="{{ url('/') }}">{{ __('messages.Menu1') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('messages.Menu2') }}</a></li>
						<!-- <div class="navbar-collapse collapse show form_manage" id="book_form" style="">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									{{ __('messages.Menu3') }}
									</a>
								<ul class="dropdown-menu">
									<li>
										<div class="my-form">
											<div class="form-title">
												<h4>{{ __('messages.popup_heading') }}</h4>
												<p>{{ __('messages.popup_content') }}</p>
											</div>
										<!-- main form -->
									<!-- <form method="post" action="{{ url('/manage_booking') }}">
										@csrf
										<div class="single-input">
											<span><i class="bi bi-person"></i></span>
											<input type="text" name="booking_id" placeholder="{{ __('messages.booking_no') }}" required>
										</div>
										<div class="single-input">
											<span><i class="bi bi-envelope"></i></span>
											<input type="email" name="email" placeholder="{{ __('messages.email') }}">
										</div>
										<div class="single-input submit-btn">
											<!-- <h6>No data found</h6> -->
										<!--	<input type="submit" value="{{ __('messages.submit_btn') }}" required>
										</div>
									</form>
										</div>
									</li>       
								</ul>
								</li>
							</ul>
						</div> -->
						
						<div class="dropdown manage_bk_field form_manage">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="mngbookbutton" data-bs-toggle="dropdown" aria-expanded="false">
							Manage Booking
							</button>
								<ul class="dropdown-menu field_manage_form" aria-labelledby="mngbookbutton">
									<li>
										<div class="my-form">
											<div class="form-title">
												<h4>Manage your booking</h4>
												<p>View or change your booking easily.</p>
											</div>
										<!-- main form -->
									<form method="post" action="{{ url('/manage_booking') }}">
										@csrf										<div class="single-input">
											<span><i class="bi bi-person"></i></span>
											<input type="text" name="booking_id" placeholder="Booking Number" required="">
										</div>
										<div class="single-input">
											<span><i class="bi bi-envelope"></i></span>
											<input type="email" name="email" placeholder="Email Address">
										</div>
										<div class="single-input submit-btn">
											<!-- <h6>No data found</h6> -->
											<input type="submit" value="Submit" required="">
										</div>
									</form>
										</div>
									</li>
								</ul>
						</div>
						
                       <!-- <li class="nav-item"><a class="nav-link" href="#">Share</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Ride</a></li> -->
						<li class="nav-item call-now"><a class="nav-link" href="tel:+355672002573">{{ __('messages.call_now') }}</a></li>
                    </ul>
          <div class="header-info">
            <div class="lang_picker">
			<select class="selectpicker change_content" data-width="fit">
				<option value="en" id="en" data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
				<option  value="it" id="it" data-content='<span class="flag-icon flag-icon-it"></span> Italian'>Italian</option>
			</select>
			</div>
			
		<!--	<div class="navbar-collapse collapse show form_manage" id="login_form" style="">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login
						</a>
						<ul class="dropdown-menu dropdown-menu-right login--drp">
							<li>
								<div class="login-wrap">
									<div class="d-flex">
										<div class="w-100">
										<h3 class="mb-2">My Account Login</h3>
										</div>
									</div>
						<form method="post" action="{{ url('submit_login') }}" class="signin-form">
							@csrf
							<div class="form-group mb-3 emailfield">
								<label class="label" for="name">Email address </label>
								<input type="text" name="email_address" class="form-control" placeholder="Email address" required="">
							</div>
							<div class="form-group mb-3">
								<label class="label" for="password">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password" required="">
							</div>
							<div class="form-group sign_btn_01">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
							</div>
							<div class="form-group grp-btm-for">
							<div class="text-left">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember_me">
								<label class="form-check-label" for="flexCheckDefault">
								Remember Me
								</label>
							</div>
							<div class="text-left">
								<a class="forg_pwd" href="{{ url('forget_password') }}">Forgot Password</a>
							</div>
							</div>
						</form>
							</div>
							</li>
						</ul>
					</li>
				</ul>
			</div> -->
			<?php
				$user = Auth::guard('user')->user();

			?>
			@if($user)
				<div class="dropdown account-show">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="accountButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Account
					</button>
					<div class="dropdown-menu items-account" aria-labelledby="accountButton">
						<a class="dropdown-item" href="{{ url('user/dashboard') }}">Dashboard</a>
						<a class="dropdown-item" href="{{ url('user/userProfile') }}">Profile</a>
						<a class="dropdown-item" href="{{ url('user/changePassword') }}">Change Password</a>
						<a class="dropdown-item" href="{{ url('user/logout') }}">Logout</a>
					</div>
				</div>
			@else
			<div class="dropdown login_field">
			  <div id="login-prevent">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
				{{ __('messages.login_text') }}
				</button>
						<ul class="dropdown-menu dropdown-menu-right login--drp" aria-labelledby="dropdownMenuButton1">
							<li>
								<div class="login-wrap">
									<div class="d-flex">
										<div class="w-100">
										<h3 class="mb-2">{{ __('messages.login_heading') }}</h3>
										</div>
									</div>
						<p class="email_password_error" style="color:red;"></p>			
						<form method="post" class="signin-form">
						@csrf
														<div class="form-group mb-3 emailfield">
								<label class="label" for="name">{{ __('messages.login_email') }} </label>
								<input type="text" name="email_address" class="form-control" placeholder="{{ __('messages.login_email') }}" required="">
							</div>
							<div class="form-group mb-3">
								<label class="label" for="password">{{ __('messages.login_password') }}</label>
								<input type="password" name="password" class="form-control" placeholder="{{ __('messages.login_password') }}" required="">
							</div>
							<div class="form-group sign_btn_01">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">{{ __('messages.login_submit') }}</button>
							</div>
							<div class="form-group grp-btm-for">
							<div class="text-left">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember_me">
								<label class="form-check-label" for="flexCheckDefault">
								{{ __('messages.login_submit') }}
								</label>
							</div>
							<div class="text-left">
								<a class="forg_pwd" href="{{ url('forget_password') }}">{{ __('messages.login_forget_password') }}</a>
							</div>
							</div>
						</form>
							</div>
							</li>
						</ul>
					</div>
			</div>
			@endif
			
			
          </div>
                </div>
            </div>
        </nav>