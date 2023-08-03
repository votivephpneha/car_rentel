@extends('front.layout.layout')
@section('title', 'Car List Page')

@section('current_page_css')
@endsection

@section('current_page_js')

@section('content')
<!-- Category-->
<section class="page-section thankyou-title-banner" style="padding:8rem 0;">
    <div class="container px-4 px-lg-5">
       <!-- <div class="row head_rgt">
            <div class="col-lg-12">
                <h2 class="text-white mt-0 mb-0">Thank You</h2>
            </div>
        </div>  -->       
    </div>
</section>
        

<!-- Call to action-->
<section class="page-section thankyou">
    <div class="container px-4 px-lg-5">
        <div class="block-tq">
        <h2 class="mb-4">Thank you, your order has been accepted, shortly you will receive by email :</h2>
        <p>- Details of your rental.</p>
        <p>- Photos of the car you will rent.</p>
        <p>- Invoice of the rental booking.</p>
        <p>- If you do not see the email in a few minutes, check your "junk mail" folder or "spam" folder.</p>
        <h6>Thank you for choosing Royal Car Rental.</h6>
        <div class="continue_btn">
            <a href="{{ url('/') }}">Ok</a>
            
        </div>
        </div>
    </div>
</section>
@endsection