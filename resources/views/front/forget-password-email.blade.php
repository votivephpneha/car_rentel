<div class="fgt-pwd-mail" style="border: 1px solid #e7e7e7;padding: 25px;border-radius: 7px;text-align: center;max-width: 650px;margin: 0 auto;">
<div class="web-logo" style="margin-bottom: 20px;">
	<?php $home_logo = $page_info->home_logo; ?>
	<img style="width: 100px;" src="{{ url('public/uploads/') }}/{{$home_logo}}">
</div>	
<h1 style="margin-top: 0px;margin-bottom: 10px;">Forget Password Email</h1>

<p style="font-size:18px;">You can reset password from below link:</p>
<div style="margin: 35px 0px;"><a style="color: #ff5f00;text-decoration: none;padding: 10px;border: 2px solid #ff5f00;font-weight: 600;border-radius: 5px;" class="link--reset" href="{{ url('/reset_password') }}/{{ $token }}/{{ $email }}">Reset Password</a></div>
<p style="font-size:14px;line-height: 20px;">If you do not want to change your password or didn't request a reset,</br> you can ignore and delete this email.</p>
</div>


