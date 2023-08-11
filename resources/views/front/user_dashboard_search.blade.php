<div class="col-md-6">
<div class="card p-md-4 mb-4 statist_card">
	<div class="card-body">
		<div class="d-flex px-1 px-md-3 info--stats">
			<?php
				$user_data = Auth::guard('user')->user();
				//echo $user_data->id;
				$business_data_total = DB::table("booking_management")->whereBetween('created_at',[$from_date.'%', $to_date.'%'])->where("customer_id",$user_data->id)->get();
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
				$business_data_accepted = DB::table("booking_management")->whereBetween('created_at',[$from_date.'%', $to_date.'%'])->where("customer_id",$user_data->id)->where("booking_status","3")->get();
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
				$business_data_rejected = DB::table("booking_management")->whereBetween('created_at',[$from_date.'%', $to_date.'%'])->where("customer_id",$user_data->id)->where("booking_status","4")->get();
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
				
				$business_data = DB::table("booking_management")->whereBetween('created_at',[$from_date.'%', $to_date.'%'])->where("customer_id",$user_data->id)->where("booking_status","3")->get();
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