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
<script type="text/javascript">
	$( function() {
    $( "#start_date").datepicker({
        dateFormat: "dd-M-yy",
        
        onSelect: function (date) {

            var min_date = new Date(date);

            min_date.setDate(min_date.getDate() + 1);
           
            var dt2 = $('#end_date');
            dt2.datepicker('setDate', min_date);
            dt2.datepicker('option', 'minDate', min_date);
        }
    });
    $( "#end_date").datepicker({
        dateFormat: "dd-M-yy",
        
    });
  } );

	function searchFilter(){
       var from_date = $("#start_date").val();
       var to_date = $("#end_date").val();
       $.ajax({
        type: "GET",
        url: "{{ url('user/search_date_filter') }}",
        data: {from_date:from_date,to_date:to_date},
        cache: false,
        success: function(data){
          console.log("data",data);
           $("#user_data_boxes").html(data);
        }
       });
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
	<section class="page-section user_dashboard user_profile">
		<div class="container">
		<div class="profile_heading" style="text-align: center">
							<h4>Dashboard</h4>	
						</div>
		  <div class="row">
			<div class="col-md-3">
				@include('front.layout.user_header')
			</div>
			<div class="col-md-9 des-rgt-profile">
			<div class="profile">
			<div class="row date_search_div" style="align-items: center;">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>From Date</label>

                    <input type="text" class="form-control" name="start_date" id="start_date" placeholder="Enter From Date">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>To Date</label>

                    <input type="text" class="form-control" name="end_date" id="end_date" placeholder="Enter To Date">
                  </div>
                </div>
                <div class="col-md-2 submit_btn user-sub_btn" style="margin-top: 15px;">
                  <input type="button" name="btn" class="search_btn btn btn-primary" value="Search" onclick="searchFilter()">
                </div>
              </div>
				<div class="row m--tp" id="user_data_boxes">
				  <div class="col-md-6">
					<div class="card p-md-4 mb-4 statist_card">
						<div class="card-body">
							<div class="d-flex px-1 px-md-3 info--stats">
								<?php
									$user_data = Auth::guard('user')->user();
									//echo $user_data->id;
									$business_data_total = DB::table("booking_management")->where("customer_id",$user_data->id)->get();
									//print_r($business_data);
									
								?>
								<div class="pr-2 pr-md-4">
									<h5>{{ count($business_data_total) }}</h5>
									<p>Total Customers</p>
								</div>
								<div class="icon icon-primary icn-stats">
									<i class="bi bi-people"></i>
								</div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="col-md-6 l-pd-0">
					<div class="card p-md-4 mb-4 statist_card">
						<div class="card-body">
							<div class="d-flex px-1 px-md-3 info--stats">
								<?php
									$user_data = Auth::guard('user')->user();
									//echo $user_data->id;
									$business_data_accepted = DB::table("booking_management")->where("customer_id",$user_data->id)->where("booking_status","3")->get();
									//print_r($business_data);
									
								?>
								<div class="pr-2 pr-md-4">
									<h5>{{ count($business_data_accepted) }}</h5>
									<p>Accepted Customers</p>
								</div>
								<div class="icon icon-primary icn-stats">
									<i class="bi bi-check-circle"></i>
								</div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="card p-md-4 mb-4 statist_card">
						<div class="card-body">
							<div class="d-flex px-1 px-md-3 info--stats">
								<?php
									$user_data = Auth::guard('user')->user();
									//echo $user_data->id;
									$business_data_rejected = DB::table("booking_management")->where("customer_id",$user_data->id)->where("booking_status","4")->get();
									//print_r($business_data);
									
								?>
								<div class="pr-2 pr-md-4">
									<h5>{{ count($business_data_rejected) }}</h5>
									<p>Rejected Customers</p>
								</div>
								<div class="icon icon-primary icn-stats">
									<i class="bi bi-x-circle"></i>
								</div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="col-md-6 l-pd-0">
					<div class="card p-md-4 mb-4 statist_card">
						<div class="card-body">
							<div class="d-flex px-1 px-md-3 info--stats">
								<?php
									$user_data = Auth::guard('user')->user();
									//echo $user_data->id;
									
									$business_data = DB::table("booking_management")->where("customer_id",$user_data->id)->where("booking_status","3")->get();
									//print_r($business_data);
									$sum = 0;
									foreach ($business_data as $b_data) {
										
										$sum = $sum + $b_data->total;
									}
									//print_r($business_data);
									
								?>
								<div class="pr-2 pr-md-4">
									<h5>€{{ $sum }}</h5>
									<p>Customers Bill</p>
								</div>
								<div class="icon icon-primary icn-stats">
									<i class="bi bi-receipt"></i>
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>
			  </div>	
			</div>
		  </div>
		</div>
	</section>
@endsection