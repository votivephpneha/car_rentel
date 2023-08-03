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
	var sum = 0;
  $(".car_price").each(function(i,val){
    
    var price = $(this).text();
    var new_price = $.trim(price.replace("$",""));
    sum = sum + parseInt(new_price);
    
  });
  console.log("car_price",sum.toFixed(2));
  $(".total_price").html("<i class='fa fa-eur'></i>"+sum.toFixed(2));
</script>
@endsection

@section('content')
<section class="page-section title-banner">
	<div class="container px-4 px-lg-5">
	    <div class="row head_rgt">
	        <div class="col-lg-12">
	            <h2 class="text-white mt-0 mb-0">Manage Booking</h2>
	        </div>
	    </div>         
	</div>
</section>
<section class="page-section manage_det book-form">
	<div class="container">
		<div class="row info-det gx-4 gx-lg-5">
			<div class="booking_content">
        @if($booking_details)
				<div class="row">
					<div class="col-md-6">
                <div class="customer_content">
                  <h5>Driver Details</h5>
                  <table class="table table-bordered caption-top table-responsive">
                    
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <td>{{ $booking_details->driver_first_name }}</td>
                      </tr>
                      <tr>
                        <th>Last Name</th>
                        <td>{{ $booking_details->driver_last_name }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{ $booking_details->driver_email_address }}</td>
                      </tr>
                      <tr>
                        <th>Phone No</th>
                        <td>{{ $booking_details->driver_contact_no }}</td>
                      </tr>
                      <tr>
                        <th>Country</th>
                        <td>{{ $booking_details->driver_country }}</td>
                      </tr>
                    </thead>
                  </table>
                </div> 
              </div>
					<div class="booking_details col-md-6">
						   <h5>Booking Details</h5>
		                  <table class="table table-bordered caption-top table-responsive">
		                    
		                    <thead>
		                      <tr>
		                        <th>Booking ID</th>
		                        <td>{{ $booking_details->booking_id }}</td>
		                      </tr>
		                      <tr>
		                        <th>Booking Date</th>
		                        <?php
		                          $date=date_create($booking_details->created_at);

		                        ?>
		                        <td><?php echo date_format($date,"Y/m/d"); ?></td>
		                      </tr>
		                      <tr>
		                        <th>Booking Status</th>

		                        <td>
		                          @if($booking_details->booking_status == "1")
		                          Pending
		                          @endif
		                          @if($booking_details->booking_status == "2")
		                          Assigned
		                          @endif
		                          @if($booking_details->booking_status == "3")
		                          Accepted
		                          @endif
                              @if($booking_details->booking_status == "4")
                              Rejected
                              @endif
		                        </td>
		                      </tr>
		                      <tr>
		                        <th>Total Amount</th>

		                        <td>
		                          <?php
		                            $price = $booking_details->total;
		                            echo "<i class='fa fa-eur'></i>".number_format((float)$price, 2, '.', '');
		                          ?>
		                        </td>
		                      </tr>
                          <?php
                            $business_user = DB::table('users')->where("id",$booking_details->customer_id)->get()->first();
                            
                          ?>
                           @if(!empty($arr->customer_id))
                          <tr>
                            <th>Business Name</th>
                            <td>
                              
                                  
                                  {{ $business_user->first_name }} {{ $business_user->last_name }}
                                  
                            </td>
                          </tr>
                          @endif
		                    </thead>
		                  </table>
					</div>
					<div class="payment_details">
					<div class="col-md-12">
                
                  <h5>Payment Details</h5>
                  <table class="table table-bordered caption-top table-responsive">
                    
                    <thead>
                      <tr>
                        <th>Payment Methods</th>
                        <td>{{ $booking_details->payment_method }}</td>
                      </tr>
                      <tr>
                        <th>Payment Status</th>
                       
                        <td>
                          <?php

                            $payment_data = DB::table("payment_transaction")->where("booking_id",$booking_details->booking_id)->get()->first();
                            if($payment_data->payment_status == 0){
                              echo "Pending";
                            }else{
                              echo "Completed";
                            }
                            
                          ?>
                          
                          
                        </td>
                      </tr>
                     
                    </thead>
                  </table>
                
                
              </div>
			  </div>
			  <div class="billing-table_info">
              <div class="col-md-12">
                <h5>Billing Details</h5>
                <table class="table table-bordered caption-top table-responsive">
                  
                  <thead>
                    <tr>
                      <th>Sno</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Vehicle Type</th>
                      <th>From Date</th>
                      <th>To Date</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    @foreach($booking_data as $b_data)
                    <?php
                      //print_r($b_data);
                      
                      $car_details = DB::table('car_management')->where("id",$b_data->vehicle_id)->get()->first();
                    ?>
                    <tr>
                      <td>{{ $i }}</td>
                      <td><img src="{{ url('public/uploads/cars') }}/{{ $car_details->image }}" style="width:100px"></td>
                      <td>{{ $car_details->title }}</td>
                      <td>{{ $car_details->vehicle_type }}</td>
                      <td>{{ $b_data->from_date }}</td>
                      <td>{{ $b_data->to_date }}</td>
                      <td class="car_price">
                        
                        <?php
                              $price_data = DB::table('car_price_days')->where('no_of_day','1 Day')->where('car_id',$b_data->vehicle_id)->first();
                              $price = $price_data->price;
                              echo "<i class='fa fa-eur'></i>".number_format((float)$price, 2, '.', '');
                            ?>
                      </td>
                    </tr>
                    <?php
                      $i++;
                    ?>
                    @endforeach
                    <tr>
                      <td colspan="5"></td>
                      <td><b>Total Price</b></td>
                      <td class="total_price"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
			  </div>
				</div>
				@else
          <div class="no_data_found">
            No Booking Found
          </div>
        @endif
			</div>
		</div>
	</div>
</section>

@endsection