@extends('front.layout.layout')
@section('title', 'Car List Page')

@section('current_page_css')
@endsection

@section('current_page_js')
<script type="text/javascript">
    function getCars(vehicle_type){
        
        $.ajax({
          type: "GET",
          url: "{{ url('get_car_list') }}",
          data: {vehicle_type:vehicle_type},
          cache: false,
          success: function(data){
             $(".car_data").html(data);
             $('.car_data').after ('<div id="nav"></div>');  
            var rowsShown = 4;  
            var rowsTotal = $('.grid-list .single_list').length;  
            var numPages = rowsTotal/rowsShown;  
            $('#nav').append ('<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>');
            for (i = 0;i < numPages;i++) {  
                var pageNum = i + 1;  
                $('#nav').append ('<li class="page-item"><a href="#" rel="'+i+'" class="page-link">'+pageNum+'</a></li>');  
            }  
            $('#nav').append ('<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>');
            $('.grid-list .single_list').hide();  
            $('.grid-list .single_list').slice (0, rowsShown).show();  
            $('#nav a:first').addClass('active');  
            $('#nav a').bind('click', function() {  
            $('#nav a').removeClass('active');  
           $(this).addClass('active');  
                var currPage = $(this).attr('rel');  
                var startItem = currPage * rowsShown;  
                var endItem = startItem + rowsShown;  
                $('.grid-list .single_list').css('opacity','0.0').hide().slice(startItem, endItem).  
                css('display','table-row').animate({opacity:1}, 300);  
            });  
          }
        });
    }
    
</script>
@endsection

@section('content')
<!-- Category-->
        <section class="page-section title-banner">
            <div class="container px-4 px-lg-5">
                <div class="row head_rgt">
                    <div class="col-lg-12">
                        <!-- <h2 class="text-white mt-0 mb-0">Browse by <span class="acc-span">Make</span></h2> -->
                    </div>
                </div>         
            </div>
        </section>
<!-- Vehicle Overview-->
        <section class="page-section car-lists-block">
            <div class="container px-4 px-lg-5">
                <div class="row info-det gx-4 gx-lg-5">
                    <div class="col-lg-3 col-sm-3 mb-4">	
						<div class="sidebar-cust">
							<div class="cat-title-sb">
								<h4>Vehicle Type</h4>
							</div>
							<div class="cat-type">
								<div class="ml-md-2">
									<div class="form-inline border rounded p-sm-2 my-2">
                                        <input type="radio" name="type" id="coupe-car" value="Automatic" onclick="getCars(this.value)"> 
                                        <label for="coupe-car" class="pl-1 pt-sm-0 pt-1">Automatic</label>
                                        <img src="{{ url('public/assets/img/coupe-car.png') }}">
                                    </div>
                                    <div class="form-inline border rounded p-sm-2 my-2">
                                        <input type="radio" name="type" id="sedan-car" value="Normal" onclick="getCars(this.value)">
                                        <label for="sedan-car" class="pl-1 pt-sm-0 pt-1">Normal</label>
                                        <img src="{{ url('public/assets/img/coupe-car.png') }}">
                                    </div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-sm-9 mb-4">
						<div class="row gx-4 gx-lg-5 grid-list car_data">
                    @foreach($car_list as $c_list)  
                    <?php

                        $car_price_data = DB::table('car_price_days')->where('car_id',$c_list->id)->get();

                    ?>
                    @foreach($car_price_data as $price_data)           
                    <div class="col-lg-6 col-sm-6 mb-4 single_list">
                        <div class="list-item">
                            <a class="list-link">
                                <img class="img-fluid" src="{{ url('public/uploads/cars') }}/{{ $c_list->image }}" alt="..." />
                            </a>
                            <div class="list-caption">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="list-caption-heading">{{ $c_list->title }}</div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="list-subheading">{{ $price_data->price }} <span>@if($price_data->no_of_day == "1 Day") Per Day @else {{ $price_data->no_of_day }} @endif</span></div>
                                    </div>
                                </div>
                                <div class="row features_list">
                                    <div class="col-lg-3 col-sm-3">
                                        <div class="icon-set">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="feat-set">{{ $c_list->no_of_seats }} Seater</div>
                                    </div>
                                    <div class="col-lg-3 col-sm-3">
                                        <div class="icon-set">
                                            <i class="bi bi-gear"></i>
                                        </div>
                                        <div class="feat-set">{{ $c_list->manual_text }}</div>
                                    </div>
                                    <div class="col-lg-3 col-sm-3">
                                        <div class="icon-set">
                                            <i class="bi bi-speedometer2"></i>
                                        </div>
                                        <div class="feat-set">{{ $c_list->no_of_km }}</div>
                                    </div>
                                    <div class="col-lg-3 col-sm-3">
                                        <div class="icon-set">
                                            <i class="bi bi-three-dots"></i>
                                        </div>
                                        <div class="feat-set">More</div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-lg-12 col-sm-12 footer-book">
                                        <div class="book-now"><a href="#">Book Now</a></div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
								</li> -->
							</ul>
						</nav>
					</div>
					
				
					</div>
					
					
                </div>
            </div>
        </section>
        @endsection