@extends('admin.layout.layout')



@section('title', 'User - Profile')



@section('current_page_css')
 <style type="text/css">
     .row.date_search_div {
    align-items: center;
}
.date_search_div .search_btn {
    margin-top: 15px;
}
.small-box.bg-warning {
	z-index: 1;
}
.bg-warning {
    background-color: #1ab394!important;
}
.data_details_info {
    color: #ffffff !important;
}
.data_details_info .inner {
    padding: 35px 15px 35px 15px;
}
.data_details_info a.small-box-footer {
    color: #ffffff !important;
    padding: 10px;
}
.data_details_info a.small-box-footer {
    color: #ffffff !important;
    padding: 10px;
}
.data_details_info .icon>i {
    top: 35px !important;
}
   </style>
@endsection



@section('current_page_js')

@endsection





@section('content')



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0">Dashboard</h1>

          </div><!-- /.col -->

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>

              <li class="breadcrumb-item active">Dashboard</li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="date_filter">
            <form method="POST" id="dateSearchFilter">
              <div class="row date_search_div" style="align-items: center;">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>From Date</label>

                    <input type="text" class="form-control" name="from_date" id="from_date" placeholder="Enter From Date">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>To Date</label>

                    <input type="text" class="form-control" name="to_date" id="to_date" placeholder="Enter To Date">
                  </div>
                </div>
                <div class="col-md-4 submit_btn" style="margin-top: 15px;">
                  <input type="button" name="btn" class="search_btn btn btn-primary" value="Search" onclick="searchFilter()">
                </div>
              </div>
            </form>
            
          </div>
        <div class="row date_search_data">
          
        

          <div class="col-lg-4 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">
              <?php
                  $business_data = DB::table("users")->where("user_type","business_user")->get();

              ?>
              <div class="inner">

                <h3>{{count($business_data)}}</h3>



                <p>Total Business List</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/business_management') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!-- ./col -->
          <div class="col-lg-4 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">

              <div class="inner">
                <?php
                  $business_data_active = DB::table("users")->where("status","1")->where("user_type","business_user")->get();
                  
                ?>

                <h3>{{count($business_data_active)}}</h3>



                <p>Active Business List</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/business_management/Active') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-4 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">

              <div class="inner">
                <?php
                  $business_data_inactive = DB::table("users")->where("status","0")->where("user_type","business_user")->get();

              ?>

                <h3>{{count($business_data_inactive)}}</h3>



                <p>Inactive Business List</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/business_management/Inactive') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">

              <div class="inner">
                <?php
                  $booking_data = DB::table("booking_management")->get();

              ?>

                <h3>{{count($booking_data)}}</h3>



                <p>Total Booking</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/booking_management') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>
          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">

              <div class="inner">
                <?php
                  $booking_data_accepted = DB::table("booking_management")->where("booking_status","3")->orwhere("booking_status","3")->get();

                ?>

                <h3>{{count($booking_data_accepted)}}</h3>



                <p>Accepted Booking</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/booking_management/Accepted') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>
          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">

              <div class="inner">
                <?php
                  $booking_data_rejected = DB::table("booking_management")->where("booking_status","4")->get();

                ?>

                <h3>{{count($booking_data_rejected)}}</h3>



                <p>Rejected Booking</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/booking_management/Rejected') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>
          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">

              <div class="inner">
                <?php
                  $booking_data_pending = DB::table("booking_management")->where("booking_status","1")->get();

                ?>

                <h3>{{count($booking_data_pending)}}</h3>



                <p>Pending Booking</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/booking_management/Pending') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>
          <div class="col-lg-4 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">

              <div class="inner">
                <?php
                  $payment_transaction_data = DB::table("payment_transaction")->get();

                ?>

                <h3>{{count($payment_transaction_data)}}</h3>



                <p>Total Payment Transaction</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/payment_transaction') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>
          <div class="col-lg-4 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">

              <div class="inner">
                <?php
                  $payment_transaction_completed = DB::table("payment_transaction")->where("payment_status","1")->get();

                ?>

                <h3>{{count($payment_transaction_completed)}}</h3>



                <p>Completed Payment Transaction</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/payment_transaction/Completed') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>
          <div class="col-lg-4 col-6">

            <!-- small box -->

            <div class="small-box bg-warning data_details_info">

              <div class="inner">
                <?php
                  $payment_transaction_pending = DB::table("payment_transaction")->where("payment_status","0")->get();

                ?>

                <h3>{{count($payment_transaction_pending)}}</h3>



                <p>Pending Payment Transaction</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="{{ url('/admin/payment_transaction/Pending') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!--<div class="col-lg-3 col-6">


            <div class="small-box bg-danger">

              <div class="inner">

                <h3>65</h3>



                <p>Unique Visitors</p>

              </div>

              <div class="icon">

                <i class="ion ion-pie-graph"></i>

              </div>

              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>-->

          <!-- ./col -->

        </div>

        <!-- /.row -->

        <!-- Main row -->

        <div class="row">

          <!-- Left col -->

          <section class="col-lg-7 connectedSortable">

            <!-- Custom tabs (Charts with tabs)-->

            <!-- <div class="card">

              <div class="card-header">

                <h3 class="card-title">

                  <i class="fas fa-chart-pie mr-1"></i>

                  Sales

                </h3>

                <div class="card-tools">

                  <ul class="nav nav-pills ml-auto">

                    <li class="nav-item">

                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>

                    </li>

                    <li class="nav-item">

                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>

                    </li>

                  </ul>

                </div>

              </div> -->

              <!-- /.card-header -->

              <!-- <div class="card-body">

                <div class="tab-content p-0"> -->

                  <!-- Morris chart - Sales -->

                  <!-- <div class="chart tab-pane active" id="revenue-chart"

                       style="position: relative; height: 300px;">

                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>

                   </div>

                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">

                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>

                  </div>

                </div> -->

              <!-- </div> -->

              <!-- /.card-body -->

            <!-- </div> -->

            <!-- /.card -->



            <!-- DIRECT CHAT -->

           <?php /* ?> <div class="card direct-chat direct-chat-primary  collapsed-card">

              <div class="card-header">

                <h3 class="card-title">Direct Chat</h3>



                <div class="card-tools">

                  <span title="3 New Messages" class="badge badge-primary">3</span>

                  <button type="button" class="btn btn-tool" data-card-widget="collapse">

                    <i class="fas fa-minus"></i>

                  </button>

                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">

                    <i class="fas fa-comments"></i>

                  </button>

                  <button type="button" class="btn btn-tool" data-card-widget="remove">

                    <i class="fas fa-times"></i>

                  </button>

                </div>

              </div>

              <!-- /.card-header -->

              <div class="card-body">

                <!-- Conversations are loaded here -->

                <div class="direct-chat-messages">

                  <!-- Message. Default to the left -->

                  <div class="direct-chat-msg">

                    <div class="direct-chat-infos clearfix">

                      <span class="direct-chat-name float-left">Alexander Pierce</span>

                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>

                    </div>

                    <!-- /.direct-chat-infos -->

                    <img class="direct-chat-img" src="{{ asset('resources/dist/img/user1-128x128.jpg')}}" alt="message user image">

                    <!-- /.direct-chat-img -->

                    <div class="direct-chat-text">

                      Is this template really for free? That's unbelievable!

                    </div>

                    <!-- /.direct-chat-text -->

                  </div>

                  <!-- /.direct-chat-msg -->



                  <!-- Message to the right -->

                  <div class="direct-chat-msg right">

                    <div class="direct-chat-infos clearfix">

                      <span class="direct-chat-name float-right">Sarah Bullock</span>

                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>

                    </div>

                    <!-- /.direct-chat-infos -->

                    <img class="direct-chat-img" src="{{ asset('resources/dist/img/user3-128x128.jpg')}}" alt="message user image">

                    <!-- /.direct-chat-img -->

                    <div class="direct-chat-text">

                      You better believe it!

                    </div>

                    <!-- /.direct-chat-text -->

                  </div>

                  <!-- /.direct-chat-msg -->



                  <!-- Message. Default to the left -->

                  <div class="direct-chat-msg">

                    <div class="direct-chat-infos clearfix">

                      <span class="direct-chat-name float-left">Alexander Pierce</span>

                      <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>

                    </div>

                    <!-- /.direct-chat-infos -->

                    <img class="direct-chat-img" src="{{ asset('resources/dist/img/user1-128x128.jpg')}}" alt="message user image">

                    <!-- /.direct-chat-img -->

                    <div class="direct-chat-text">

                      Working with AdminLTE on a great new app! Wanna join?

                    </div>

                    <!-- /.direct-chat-text -->

                  </div>

                  <!-- /.direct-chat-msg -->



                  <!-- Message to the right -->

                  <div class="direct-chat-msg right">

                    <div class="direct-chat-infos clearfix">

                      <span class="direct-chat-name float-right">Sarah Bullock</span>

                      <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>

                    </div>

                    <!-- /.direct-chat-infos -->

                    <img class="direct-chat-img" src="{{ asset('resources/dist/img/user3-128x128.jpg')}}" alt="message user image">

                    <!-- /.direct-chat-img -->

                    <div class="direct-chat-text">

                      I would love to.

                    </div>

                    <!-- /.direct-chat-text -->

                  </div>

                  <!-- /.direct-chat-msg -->



                </div>

                <!--/.direct-chat-messages-->



                <!-- Contacts are loaded here -->

                <div class="direct-chat-contacts">

                  <ul class="contacts-list">

                    <li>

                      <a href="#">

                        <img class="contacts-list-img" src="{{ asset('resources/dist/img/user1-128x128.jpg')}}" alt="User Avatar">



                        <div class="contacts-list-info">

                          <span class="contacts-list-name">

                            Count Dracula

                            <small class="contacts-list-date float-right">2/28/2015</small>

                          </span>

                          <span class="contacts-list-msg">How have you been? I was...</span>

                        </div>

                        <!-- /.contacts-list-info -->

                      </a>

                    </li>

                    <!-- End Contact Item -->

                    <li>

                      <a href="#">

                        <img class="contacts-list-img" src="{{ asset('resources/dist/img/user7-128x128.jpg')}}" alt="User Avatar">



                        <div class="contacts-list-info">

                          <span class="contacts-list-name">

                            Sarah Doe

                            <small class="contacts-list-date float-right">2/23/2015</small>

                          </span>

                          <span class="contacts-list-msg">I will be waiting for...</span>

                        </div>

                        <!-- /.contacts-list-info -->

                      </a>

                    </li>

                    <!-- End Contact Item -->

                    <li>

                      <a href="#">

                        <img class="contacts-list-img" src="{{ asset('resources/dist/img/user3-128x128.jpg')}}" alt="User Avatar">



                        <div class="contacts-list-info">

                          <span class="contacts-list-name">

                            Nadia Jolie

                            <small class="contacts-list-date float-right">2/20/2015</small>

                          </span>

                          <span class="contacts-list-msg">I'll call you back at...</span>

                        </div>

                        <!-- /.contacts-list-info -->

                      </a>

                    </li>

                    <!-- End Contact Item -->

                    <li>

                      <a href="#">

                        <img class="contacts-list-img" src="{{ asset('resources/dist/img/user5-128x128.jpg')}}" alt="User Avatar">



                        <div class="contacts-list-info">

                          <span class="contacts-list-name">

                            Nora S. Vans

                            <small class="contacts-list-date float-right">2/10/2015</small>

                          </span>

                          <span class="contacts-list-msg">Where is your new...</span>

                        </div>

                        <!-- /.contacts-list-info -->

                      </a>

                    </li>

                    <!-- End Contact Item -->

                    <li>

                      <a href="#">

                        <img class="contacts-list-img" src="{{ asset('resources/dist/img/user6-128x128.jpg')}}" alt="User Avatar">



                        <div class="contacts-list-info">

                          <span class="contacts-list-name">

                            John K.

                            <small class="contacts-list-date float-right">1/27/2015</small>

                          </span>

                          <span class="contacts-list-msg">Can I take a look at...</span>

                        </div>

                        <!-- /.contacts-list-info -->

                      </a>

                    </li>

                    <!-- End Contact Item -->

                    <li>

                      <a href="#">

                        <img class="contacts-list-img" src="{{ asset('resources/dist/img/user8-128x128.jpg')}}" alt="User Avatar">



                        <div class="contacts-list-info">

                          <span class="contacts-list-name">

                            Kenneth M.

                            <small class="contacts-list-date float-right">1/4/2015</small>

                          </span>

                          <span class="contacts-list-msg">Never mind I found...</span>

                        </div>

                        <!-- /.contacts-list-info -->

                      </a>

                    </li>

                    <!-- End Contact Item -->

                  </ul>

                  <!-- /.contacts-list -->

                </div>

                <!-- /.direct-chat-pane -->

              </div>

              <!-- /.card-body -->

              <div class="card-footer">

                <form action="#" method="post">

                  <div class="input-group">

                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">

                    <span class="input-group-append">

                      <button type="button" class="btn btn-primary">Send</button>

                    </span>

                  </div>

                </form>

              </div>

              <!-- /.card-footer-->

            </div> <?php */ ?>

            <!--/.direct-chat -->



            <!-- TO DO List -->

            <!-- <div class="card">

              <div class="card-header">

                <h3 class="card-title">

                  <i class="ion ion-clipboard mr-1"></i>

                  To Do List

                </h3>



                <div class="card-tools">

                  <ul class="pagination pagination-sm">

                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>

                    <li class="page-item"><a href="#" class="page-link">1</a></li>

                    <li class="page-item"><a href="#" class="page-link">2</a></li>

                    <li class="page-item"><a href="#" class="page-link">3</a></li>

                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>

                  </ul>

                </div>

              </div> -->

              <!-- /.card-header -->

              <!-- <div class="card-body">

                <ul class="todo-list" data-widget="todo-list">

                  <li> -->

                    <!-- drag handle -->

                    <!-- <span class="handle">

                      <i class="fas fa-ellipsis-v"></i>

                      <i class="fas fa-ellipsis-v"></i>

                    </span> -->

                    <!-- checkbox -->

                    <!-- <div  class="icheck-primary d-inline ml-2">

                      <input type="checkbox" value="" name="todo1" id="todoCheck1">

                      <label for="todoCheck1"></label>

                    </div> -->

                    <!-- todo text -->

                    <!-- <span class="text">Design a nice theme</span> -->

                    <!-- Emphasis label -->

                    <!-- <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small> -->

                    <!-- General tools such as edit or delete-->

                    <!-- <div class="tools">

                      <i class="fas fa-edit"></i>

                      <i class="fas fa-trash-o"></i>

                    </div>

                  </li>

                  <li>

                    <span class="handle">

                      <i class="fas fa-ellipsis-v"></i>

                      <i class="fas fa-ellipsis-v"></i>

                    </span>

                    <div  class="icheck-primary d-inline ml-2">

                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>

                      <label for="todoCheck2"></label>

                    </div>

                    <span class="text">Make the theme responsive</span>

                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>

                    <div class="tools">

                      <i class="fas fa-edit"></i>

                      <i class="fas fa-trash-o"></i>

                    </div>

                  </li>

                  <li>

                    <span class="handle">

                      <i class="fas fa-ellipsis-v"></i>

                      <i class="fas fa-ellipsis-v"></i>

                    </span>

                    <div  class="icheck-primary d-inline ml-2">

                      <input type="checkbox" value="" name="todo3" id="todoCheck3">

                      <label for="todoCheck3"></label>

                    </div>

                    <span class="text">Let theme shine like a star</span>

                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>

                    <div class="tools">

                      <i class="fas fa-edit"></i>

                      <i class="fas fa-trash-o"></i>

                    </div>

                  </li>

                  <li>

                    <span class="handle">

                      <i class="fas fa-ellipsis-v"></i>

                      <i class="fas fa-ellipsis-v"></i>

                    </span>

                    <div  class="icheck-primary d-inline ml-2">

                      <input type="checkbox" value="" name="todo4" id="todoCheck4">

                      <label for="todoCheck4"></label>

                    </div>

                    <span class="text">Let theme shine like a star</span>

                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>

                    <div class="tools">

                      <i class="fas fa-edit"></i>

                      <i class="fas fa-trash-o"></i>

                    </div>

                  </li>

                  <li>

                    <span class="handle">

                      <i class="fas fa-ellipsis-v"></i>

                      <i class="fas fa-ellipsis-v"></i>

                    </span>

                    <div  class="icheck-primary d-inline ml-2">

                      <input type="checkbox" value="" name="todo5" id="todoCheck5">

                      <label for="todoCheck5"></label>

                    </div>

                    <span class="text">Check your messages and notifications</span>

                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>

                    <div class="tools">

                      <i class="fas fa-edit"></i>

                      <i class="fas fa-trash-o"></i>

                    </div>

                  </li>

                  <li>

                    <span class="handle">

                      <i class="fas fa-ellipsis-v"></i>

                      <i class="fas fa-ellipsis-v"></i>

                    </span>

                    <div  class="icheck-primary d-inline ml-2">

                      <input type="checkbox" value="" name="todo6" id="todoCheck6">

                      <label for="todoCheck6"></label>

                    </div>

                    <span class="text">Let theme shine like a star</span>

                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>

                    <div class="tools">

                      <i class="fas fa-edit"></i>

                      <i class="fas fa-trash-o"></i>

                    </div>

                  </li>

                </ul>

              </div> -->

              <!-- /.card-body -->

              <!-- <div class="card-footer clearfix">

                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>

              </div>

            </div> -->

            <!-- /.card -->

          </section>

          <!-- /.Left col -->

          <!-- right col (We are only adding the ID to make the widgets sortable)-->

          <section class="col-lg-5 connectedSortable">



            <!-- Map card -->

            <!-- <div class="card bg-gradient-primary">

              <div class="card-header border-0">

                <h3 class="card-title">

                  <i class="fas fa-map-marker-alt mr-1"></i>

                  Visitors

                </h3> -->

                <!-- card tools -->

                <!-- <div class="card-tools">

                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">

                    <i class="far fa-calendar-alt"></i>

                  </button>

                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">

                    <i class="fas fa-minus"></i>

                  </button>

                </div> -->

                <!-- /.card-tools -->

              <!-- </div>

              <div class="card-body">

                <div id="world-map" style="height: 250px; width: 100%;"></div>

              </div> -->

              <!-- /.card-body-->

              <!-- <div class="card-footer bg-transparent">

                <div class="row">

                  <div class="col-4 text-center">

                    <div id="sparkline-1"></div>

                    <div class="text-white">Visitors</div>

                  </div> -->

                  <!-- ./col -->

                  <!-- <div class="col-4 text-center">

                    <div id="sparkline-2"></div>

                    <div class="text-white">Online</div>

                  </div> -->

                  <!-- ./col -->

                  <!-- <div class="col-4 text-center">

                    <div id="sparkline-3"></div>

                    <div class="text-white">Sales</div>

                  </div> -->

                  <!-- ./col -->

                <!-- </div> -->

                <!-- /.row -->

              <!-- </div>

            </div> -->

            <!-- /.card -->



            <!-- solid sales graph -->

            <!-- <div class="card bg-gradient-info">

              <div class="card-header border-0">

                <h3 class="card-title">

                  <i class="fas fa-th mr-1"></i>

                  Sales Graph

                </h3>



                <div class="card-tools">

                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">

                    <i class="fas fa-minus"></i>

                  </button>

                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">

                    <i class="fas fa-times"></i>

                  </button>

                </div>

              </div>

              <div class="card-body">

                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

              </div> -->

              <!-- /.card-body -->

              <!-- <div class="card-footer bg-transparent">

                <div class="row">

                  <div class="col-4 text-center">

                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"

                           data-fgColor="#39CCCC">



                    <div class="text-white">Mail-Orders</div>

                  </div> -->

                  <!-- ./col -->

                  <!-- <div class="col-4 text-center">

                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"

                           data-fgColor="#39CCCC">



                    <div class="text-white">Online</div>

                  </div> -->

                  <!-- ./col -->

                  <!-- <div class="col-4 text-center">

                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"

                           data-fgColor="#39CCCC">



                    <div class="text-white">In-Store</div>

                  </div> -->

                  <!-- ./col -->

                <!-- </div> -->

                <!-- /.row -->

              <!-- </div> -->

              <!-- /.card-footer -->

            <!-- </div> -->

            <!-- /.card -->



            <!-- Calendar -->

            <!-- <div class="card bg-gradient-success">

              <div class="card-header border-0">



                <h3 class="card-title">

                  <i class="far fa-calendar-alt"></i>

                  Calendar

                </h3> -->

                <!-- tools card -->

                <!-- <div class="card-tools"> -->

                  <!-- button with a dropdown -->

                  <!-- <div class="btn-group">

                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">

                      <i class="fas fa-bars"></i>

                    </button>

                    <div class="dropdown-menu" role="menu">

                      <a href="#" class="dropdown-item">Add new event</a>

                      <a href="#" class="dropdown-item">Clear events</a>

                      <div class="dropdown-divider"></div>

                      <a href="#" class="dropdown-item">View calendar</a>

                    </div>

                  </div>

                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">

                    <i class="fas fa-minus"></i>

                  </button>

                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">

                    <i class="fas fa-times"></i>

                  </button>

                </div> -->

                <!-- /. tools -->

              <!-- </div> -->

              <!-- /.card-header -->

              <!-- <div class="card-body pt-0"> -->

                <!--The calendar -->

                <!-- <div id="calendar" style="width: 100%"></div> -->

              <!-- </div> -->

              <!-- /.card-body -->

            <!-- </div> -->

            <!-- /.card -->

          </section>

          <!-- right col -->

        </div>

        <!-- /.row (main row) -->

      </div><!-- /.container-fluid -->

    </section>

    <!-- /.content -->

  </div>



@endsection         