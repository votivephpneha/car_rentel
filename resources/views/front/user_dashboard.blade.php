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
	<section class="page-section user_dashboard">
		<div class="container">
			<div class="col-md-3">
				@include('front.layout.user_header')
			</div>
			<div class="col-md-9"></div>
		</div>
	</section>
@endsection