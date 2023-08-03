<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5 logo-new">
                <?php $home_logo = $page_info->home_logo; ?>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('public/uploads/')}}/{{$home_logo}}"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link current" href="#">{{ __('messages.Home') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{ __('messages.Rent') }}</a></li>
						<div class="navbar-collapse collapse show form_manage" id="book_form" style="">
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
									<form method="post" action="{{ url('/manage_booking') }}">
										@csrf
										<div class="single-input">
											<span><i class="bi bi-person"></i></span>
											<input type="text" name="booking_id" placeholder="{{ __('messages.booking_no') }}">
										</div>
										<div class="single-input">
											<span><i class="bi bi-envelope"></i></span>
											<input type="email" name="email" placeholder="{{ __('messages.email') }}">
										</div>
										<div class="single-input submit-btn">
											<!-- <h6>No data found</h6> -->
											<input type="submit" value="{{ __('messages.submit_btn') }}">
										</div>
									</form>
										</div>
									</li>       
								</ul>
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
            <div class="login">
              <a href="#"><i class="bi bi-person-circle"></i></a>
            </div>
           <!-- <div class="cart">
              <a href="#"><i class="bi bi-cart3"></i></a>
            </div> -->	
          </div>
                </div>
            </div>
        </nav>