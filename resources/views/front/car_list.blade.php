@extends('front.layout.layout')
@section('title', 'Car List Page')

@section('current_page_css')
<style type="text/css">
	/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
@endsection

@section('current_page_js')
<script type="text/javascript">
	var vehicle_category_array = {vehicle_type:'',vehicle_category:''};
    function getCars(vehicle_type){

    	vehicle_category_array.vehicle_type = vehicle_type;
    	
        var vehicle_json_array = JSON.stringify(vehicle_category_array);
        
        $.ajax({
          type: "GET",
          url: "{{ url('get_car_list') }}",
          data: {vehicle_type:vehicle_json_array},
          cache: false,
          success: function(data){
             $(".tab_con").html(data);
             var rowsShown = 3;  
    var rowsTotal = $('.tab_con .tab_pan').length;  

    var numPages = rowsTotal/rowsShown;  

    $('#nav').append ('<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>');
    for (i = 0;i < numPages;i++) {  
        var pageNum = i + 1;  
        $('#nav').append ('<li class="page-item"><a href="#" rel="'+i+'" class="page-link">'+pageNum+'</a></li>');  
    }  
    $('#nav').append ('<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>');
    $('.tab_con .tab_pan').hide();  

    $('.tab_con .tab_pan').slice (0, rowsShown).show();  
    $('#nav a:first').addClass('active');  
    $('#nav a').bind('click', function() {  
    $('#nav a').removeClass('active');  
   $(this).addClass('active');  
        var currPage = $(this).attr('rel');  
        var startItem = currPage * rowsShown;  
        var endItem = startItem + rowsShown;  
        $('.tab_con .tab_pan').css('opacity','0.0').hide().slice(startItem, endItem).  
        css('display','block').animate({opacity:1}, 300);  
    });    
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

          }
        });
    }

    function getCarsCategory(vehicle_category){

    	vehicle_category_array.vehicle_category = vehicle_category;
    	console.log("vehicle_category_array",vehicle_category_array);
        var vehicle_json_array = JSON.stringify(vehicle_category_array);
        
        $.ajax({
          type: "GET",
          url: "{{ url('car_list_category') }}",
          data: {vehicle_category:vehicle_json_array},
          cache: false,
          success: function(data){
             $(".tab_con").html(data);
             var rowsShown = 3;  
    var rowsTotal = $('.tab_con .tab_pan').length;  

    var numPages = rowsTotal/rowsShown;  

    $('#nav').append ('<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>');
    for (i = 0;i < numPages;i++) {  
        var pageNum = i + 1;  
        $('#nav').append ('<li class="page-item"><a href="#" rel="'+i+'" class="page-link">'+pageNum+'</a></li>');  
    }  
    $('#nav').append ('<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>');
    $('.tab_con .tab_pan').hide();  

    $('.tab_con .tab_pan').slice (0, rowsShown).show();  
    $('#nav a:first').addClass('active');  
    $('#nav a').bind('click', function() {  
    $('#nav a').removeClass('active');  
   $(this).addClass('active');  
        var currPage = $(this).attr('rel');  
        var startItem = currPage * rowsShown;  
        var endItem = startItem + rowsShown;  
        $('.tab_con .tab_pan').css('opacity','0.0').hide().slice(startItem, endItem).  
        css('display','block').animate({opacity:1}, 300);  
    });    
     // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
          }
        });
    }
     // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

$(".pickup_location").keyup(function(){
    var address_value = $(".pickup_location").val();
    $(".address_div").show();
    $.ajax({
      type: "GET",
      url: "{{ url('/get_address') }}",
      data: {address_value:address_value},
      cache: false,
      success: function(data){
        console.log("data",data);
        if(data){
         $(".address_div").html(data);
        }else{
          $(".address_div").text("No address found");
        }
      }
    });
  });

  $(".drop_off_location").keyup(function(){
    var address_value = $(".drop_off_location").val();
    $(".address_div_dropoff").show();
    $.ajax({
      type: "GET",
      url: "{{ url('/get_dropoff_address') }}",
      data: {address_value:address_value},
      cache: false,
      success: function(data){
        console.log("data",data);
        if(data){
          $(".address_div_dropoff").html(data);
        }else{
          $(".address_div_dropoff").text("No address found");
        }
        
      }
    });
  });

  function getAddress(address_id){
    var address_value1 = $(".address-"+address_id).text();

    $(".pickup_location").val(address_value1);
    $(".address_div").hide();
  }

  function getDropoffAddress(address_id){
    var address_value2 = $(".address_text-"+address_id).text();

    $(".drop_off_location").val(address_value2);
    $(".address_div_dropoff").hide();
  }
  $(document).mouseup(function(e){
    var address_div = $(".address_div");

    // If the target of the click isn't the container
    if(!address_div.is(e.target) && address_div.has(e.target).length === 0){
        address_div.hide();
    }

    var address_div_dropoff = $(".address_div_dropoff");

    // If the target of the click isn't the container
    if(!address_div_dropoff.is(e.target) && address_div_dropoff.has(e.target).length === 0){
        address_div_dropoff.hide();
    }
  });
</script>
@endsection

@section('content')
<!-- Category-->
        <section class="page-section title-banner" style="padding:8rem 0;">
            <div class="container px-4 px-lg-5">
               <!-- <div class="row head_rgt">
                    <div class="col-lg-12">
                         <h2 class="text-white mt-0 mb-0">Browse by <span class="acc-span">Make</span></h2>
                    </div>
                </div> -->        
            </div>
        </section>
<!-- Vehicle Overview-->
        <section class="page-section car-lists-block">
            <div class="container px-4 px-lg-5">
                <div class="row info-det gx-4 gx-lg-5">
                    <div class="col-lg-3 col-sm-6 mb-4">	
						<div class="sidebar-cust">
						<div class="sbar-type">
							<div class="cat-title-sb">
								<h4>{{ __('messages.vehicle_type_head') }}</h4>
							</div>
							<div class="cat-type">
								<div class="">
									<div class="form-inline border rounded p-sm-2 my-2">
                                        <input type="radio" name="type" id="coupe-car" value="Automatic" onclick="getCars(this.value)"> 
                                        <label for="coupe-car" class="pl-1 pt-sm-0 pt-1">{{ __('messages.automatic') }}</label>
                                        <!--<img src="{{ url('public/assets/img/coupe-car.png') }}">-->
                                    </div>
                                    <div class="form-inline border rounded p-sm-2 my-2">
                                        <input type="radio" name="type" id="sedan-car" value="Manual" onclick="getCars(this.value)">
                                        <label for="sedan-car" class="pl-1 pt-sm-0 pt-1">{{ __('messages.manual') }}</label>
                                        <!--<img src="{{ url('public/assets/img/coupe-car.png') }}">-->
                                    </div>
									
								</div>
							</div>
							</div>
							<div class="sbar-categ">
							<div class="cat-title-sb">
								<h4>{{ __('messages.vehicle_category_head') }}</h4>
							</div>
							<div class="cat-type">
								<div class="">
									@foreach($category_list as $cat_list)
									@if($cat_list->status == "1")
									<div class="form-inline border rounded p-sm-2 my-2">
									   <div class="cate_inp">	
										<input type="radio" name="category" id="cat-{{ $cat_list->cat_name }}" value="{{ $cat_list->cat_name }}" onclick="getCarsCategory(this.value)"> 
										<label for="cat-{{ $cat_list->cat_name }}" class="pl-1 pt-sm-0 pt-1">@if($locale == 'it' and $cat_list->cat_name_it)
                      {{ $cat_list->cat_name_it }}
                      @else
                      {{ $cat_list->cat_name }}
                      @endif</label>
									   </div>
									  <div class="cate_image-des">									   
										<img src="{{ url('public/assets/img/coupe-car.png') }}">
									  </div>
									</div>
									@endif
									@endforeach
									
									
								</div>
							</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8 col-sm-12 listing_infos">
						<div class="mb-lg-0">
							<div class="">
								<div class="item2-gl carlist-style">
									<div class="tab-content tab_con">
										@foreach($car_list as $c_list)
										<?php

					                        $car_price_data = DB::table('car_price_days')->where('car_id',$c_list->id)->get();

					                    ?>
										<div class="carlist--tabs tab-pane tab_pan" role="tabpanel">
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs"> <img alt="img" class="cover-image" src="{{ url('public/uploads/cars') }}/{{ $c_list->image }}"></div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body">
															<div class="item-card9">
															<div class="title_price">
																<div class="title_name_info">
																<a class="text-dark" href="#"> <h4 class="font-weight-bold mt-1 mb-2">@if($locale == 'it' and $c_list->title_it)
                                  {{ $c_list->title_it }}
                                  @else
                                  {{ $c_list->title }}
                                  @endif</h4> 
																<h6 class="car_cat">
                                  
                                  <?php
                                    $category_data = DB::table("categories")->where("cat_id",$c_list->vehicle_category)->get()->first();
                                    
                                  ?>
                                  @if($locale == 'it' and $category_data->cat_name_it)
                                  {{ $category_data->cat_name_it }}
                                  @else
                                  {{ $category_data->cat_name }}
                                  @endif</h6>
																	
																<p>@if($locale == 'it' and $c_list->title_it)
                                  {{ $c_list->car_description_it }}
                                  @else
                                  {{ $c_list->car_description }}
                                  @endif</p>
																</a>
																<?php
																$price_data = DB::table('car_price_days')->where('no_of_day','1 Day')->where('car_id',$c_list->id)->first();
																$price = $price_data->price * $date_diff;

																?>
																</div>
																
																<div class="price_div">
																	<div class="day_price">{{ $price_data->price }} <i class="fa fa-eur" aria-hidden="true"></i> / {{ __('messages.Day') }}</div>
																	<div class="tot_price">{{ $price }} <i class="fa fa-eur" aria-hidden="true"></i> {{ __('messages.total') }}</div>
																</div>
																
															</div>
														<div class="item-card9-desc mb-2 mt-1" style="">
															<div class="row features_list">
																<div class="col-lg-3 col-sm-3">
																	<div class="icon-set">
																		<i class="bi bi-people"></i>
																	</div>
																	<div class="feat-set">{{ $c_list->no_of_seats }} {{ __('messages.Seater') }}</div>
																</div>
																<div class="col-lg-3 col-sm-3">
																	<div class="icon-set">
																		<i class="bi bi-gear"></i>
																	</div>
																	<div class="feat-set">@if($c_list->vehicle_type == "Manual")
																		{{ __('messages.manual') }}
																		@else
																		{{ __('messages.automatic') }}
																		@endif</div>
																</div>
																<div class="col-lg-3 col-sm-3">
																	<div class="icon-set">
																		<i class="bi bi-speedometer2"></i>
																	</div>
																	<div class="feat-set">{{ __('messages.KM') }}</div>
																</div>
																<div class="col-lg-3 col-sm-3">
																	<div class="icon-set">
																		<i class="bi bi-three-dots"></i>
																	</div>
																	<div class="feat-set">{{ __('messages.More') }}</div>
																</div>
															</div>
														</div>
															</div>
														</div>
														<div class="card-footer p-0">
															<div class="item-card9-footer btn-appointment">
																<div class="btn-group w-100">
																	<a href="{{ url('/booking')}}/{{ $c_list->id }}" class="btn btn-outline-light w-34 p-2 border-top-0 border-end-0 border-bottom-0 call-btn">
																	<div class="book-btn-1"><i class="fe fe-phone me-1"></i>{{ __('messages.book_now') }}</div>
																	</a>
																</div>
															</div>
														</div>
													</div>
														<!-- <div class="card col_02 border-0 mb-0 price_det"> 
															<div class="card-body">
																<div class="item-card-price">
																	<table>
  <tbody>
  	@foreach($car_price_data as $car_price)
																    <?php
							                                            $price = $car_price->price;
							                                            $price_cal = $date_diff*$price;
							                                            $new_days = $car_price->no_of_day;
							                                            $new_days1 = str_replace(" Day","",$new_days);
							                                            $new_days2 = str_replace("+","",$new_days1);
							                                            $new_days3 = $new_days2*$date_diff;

							                                        ?>
  <tr>
  	<?php
							                                            $price = $car_price->price;
							                                            $price_cal = $date_diff*$price;
							                                            $new_days = $car_price->no_of_day;
							                                            $new_days1 = str_replace(" Day","",$new_days);
							                                            $new_days2 = str_replace("+","",$new_days1);
							                                            $new_days3 = $new_days2*$date_diff;

							                                        ?>
    <td>@if($new_days == "1 Day")	
																	<?php
																	echo str_replace("+","",$new_days3)." Days"
																	?>
																	@else
																	 {{ $new_days3 }} + Days
																	@endif</td>
    <td>|</td>
    <td>
    	<?php
            $price = $car_price->price;
            $price_cal = $date_diff*$price;
        ?>
    ${{ $price_cal }}</td>
  </tr>
  @endforeach
 
</tbody>
</table>
																	
																	
																</div>
															</div>	
														</div> -->
												</div>
											</div>
											</div>
											@endforeach
											
                    <div class="pagination-navs">
						<nav aria-label="Page navigation example">
							<ul class="pagination" id="nav">
								 <!-- <li class="page-item">
									<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
									</a>
								</li>  -->
							</ul>
						</nav>
					</div>
					<div class="change_date_btn">
						<a href="#" id="myBtn">{{ __('messages.change_date') }}</a>
					</div>
                </div>
            </div>
        </div>
    </div>

    
</div>

					
            </div>
            <!-- The Modal -->
			<div id="myModal" class="modal dc_popup">
			 <div class="modal-dialog modal-lg modal-dialog-centered">
			  <!-- Modal content -->
			  <div class="modal-content">
			    <div class="modal-close">
					<h4>{{ __('messages.search_popup') }}</h4>
					<span class="close">&times;</span>
				</div>
			    <div class="row">
			    	<form class="cd_src_filter" method="post" action="{{ url('car_list') }}">
            @csrf
            <div class="form cd-form row g-2"> 
              <div class="form-group col-md-6 mb-0 cd-group wd-adj"> 
                <div class="form-group mb-0"> 
                  <label>{{ __('messages.pickup_location') }}</label>
                  <input class="form-control border pickup_location" name="pickup_location" placeholder="Choose {{ __('messages.pickup_location') }}" type="text" required="" autocomplete="off">
				  <div class="address_div" style="display: none;">
					<!-- <div style="cursor:pointer" class="address_dropdown address-1">Airport Tirana</div>
					<div style="cursor:pointer" class="address_dropdown address-2">Tirana City</div>
					<div style="cursor:pointer" class="address_dropdown address-3">Airport Malpensa Milan</div>
					<div style="cursor:pointer" class="address_dropdown address-4">Milan City</div>
					<div style="cursor:pointer" class="address_dropdown address-5">Turin Airport </div>
					<div style="cursor:pointer" class="address_dropdown address-6">Turin City</div>
					<div style="cursor:pointer" class="address_dropdown address-7">Florence Airport</div>
					<div style="cursor:pointer" class="address_dropdown address-8">Florence City</div> -->
				  </div>
				  <div class="pickup_location_error search_box_error"></div> 
                </div> 
              </div> 
              <div class="form-group col-md-6 mb-0 cd-group">
                <div class="form-group mb-0"> 
                  <label>{{ __('messages.dropoff_location') }}</label>
                  <input class="form-control border drop_off_location" name="drop_off_location" placeholder="Choose {{ __('messages.dropoff_location') }}" type="text" required="" autocomplete="off">
				  <div class="address_div_dropoff" style="">
					<div style="cursor:pointer" class="address_dropdown address_text-1">Airport Tirana</div>
					<div style="cursor:pointer" class="address_dropdown address_text-2">Tirana City</div>
					<div style="cursor:pointer" class="address_dropdown address_text-3">Airport Malpensa Milan</div>
					<div style="cursor:pointer" class="address_dropdown address_text-4">Milan City</div>
					<div style="cursor:pointer" class="address_dropdown address_text-5">Turin Airport </div>
					<div style="cursor:pointer" class="address_dropdown address_text-6">Turin City</div>
					<div style="cursor:pointer" class="address_dropdown address_text-7">Florence Airport</div>
					<div style="cursor:pointer" class="address_dropdown address_text-8">Florence City</div>
				  </div>
				  <div class="dropoff_location_error search_box_error"></div> 
                </div> 
              </div>
              <div class="form-group col-md-6 mb-0 cd-group wd-adj">
                <div class="form-group mb-0"> 
                  <label>{{ __('messages.pickup_date') }}</label>
                  <input class="form-control border pickup_date" name="pickup_date" placeholder="Choose {{ __('messages.pickup_date') }}" type="text" id="pickup_date" required="" autocomplete="off"><div class="pickup_date_error search_box_error"></div> 
                </div>
              </div>
			  <div class="form-group col-md-6 mb-0 cd-group">
                <div class="form-group mb-0"> 
                  <label>{{ __('messages.dropoff_date') }}</label>
                  <input class="form-control border drop_off_date" name="drop_off_date" placeholder="Choose {{ __('messages.dropoff_date') }}" type="text" id="drop_off_date" required="" autocomplete="off"><div class="dropoff_date_error search_box_error"></div> 
                </div>
              </div>
              
              <div class="form-group col-md-12 mb-0 btn--book"> 
                <button type="submit" name="search_btn" class="search_btn">{{ __('messages.book_btn') }}<i class="bi bi-arrow-right"></i></button>
                <!-- <a class="btn btn-block btn-orange search_btn fs-14" href="javascript:void(0);"> BOOK <i class="bi bi-arrow-right"></i></a> --> 
              </div> 
            </div> 
          </form>
			    </div>
			  </div>
			</div>
			</div>
        </section>
        @endsection