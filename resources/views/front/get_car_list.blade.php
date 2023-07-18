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
                    <div class="feat-set">{{ $c_list->vehicle_type }}</div>
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