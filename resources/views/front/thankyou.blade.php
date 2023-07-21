@extends('front.layout.layout')
@section('title', 'Car List Page')

@section('current_page_css')
@endsection

@section('current_page_js')

@section('content')
<section class="page-section title-banner">
    <div class="container px-4 px-lg-5">
        <div class="row head_rgt">
            <div class="col-lg-12">
                <h2 class="text-white mt-0 mb-0">Browse by <span class="acc-span">Make</span></h2>
            </div>
        </div>         
    </div>
</section>
<section class="page-section payments-block">
    <div class="container px-4 px-lg-5">
    	@if ($message = Session::get('success'))
	        <h2>{{ $message }}</h2>
	    @endif
    </div>
</section>	
@endsection