
@extends('admin.layout.layout')



@section('title', 'User - Profile')



@section('current_page_css')

@endsection



@section('current_page_js')

<script type="text/javascript">
 // Start pages

$("#updateTranslations").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_translations',
      data: formData,
      success: function (response) {
        console.log(response);
        if (response.status == 'success') {
          // $("#register_form")[0].reset();
          // success_noti(response.msg);
          // setTimeout(function(){window.location.reload()},1000);
          success_noti(response.msg);
          //setTimeout(function(){window.location.href=site_url+"/admin/car_management"},1000);
        } else {
          error_noti(response.msg);
        }

      }
    });
    // event.preventDefault();
  }
});

// End pages 
</script>

<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });

</script>

@endsection



@section('content')



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>Translation Management</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Translation Management</li>

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        

        <!-- SELECT2 EXAMPLE -->

        <div class="card card-default">

          <!-- <div class="card-header">

            <h3 class="card-title">Add Cars</h3>


          </div> -->



          <!-- /.card-header -->

          <div class="card-body">

              <form  method="POST" enctype="multipart/form-data" id="updateTranslations">

                @csrf
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </tbody>
                </table>
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Menus</h3></div> 
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu1_en" id="home" value="{{ $texts->Menu1_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu1_it" id="home" value="{{ $texts->Menu1_it }}">

                        </div>
                      </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu2_en" id="home" value="{{ $texts->Menu2_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu2_it" id="home" value="{{ $texts->Menu2_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu3_en" id="home" value="{{ $texts->Menu3_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu3_it" id="home" value="{{ $texts->Menu3_it }}">

                        </div>
                      </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="call_now_en" id="home" value="{{ $texts->call_now_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="call_now_it" id="home" value="{{ $texts->call_now_it }}">

                        </div>
                      </td>
                      
                    </tr>
                  </tbody>
                </table>
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Home Banner</h3></div> 
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="pickup_location_en" id="home" value="{{ $texts->pickup_location_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="pickup_location_it" id="home" value="{{ $texts->pickup_location_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="dropoff_location_en" id="home" value="{{ $texts->dropoff_location_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="dropoff_location_it" id="home" value="{{ $texts->dropoff_location_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="pickup_date_en" id="home" value="{{ $texts->pickup_date_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="pickup_date_it" id="home" value="{{ $texts->pickup_date_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="dropoff_date_en" id="home" value="{{ $texts->dropoff_date_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="dropoff_date_it" id="home" value="{{ $texts->dropoff_date_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="book_btn_en" id="home" value="{{ $texts->book_btn_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="book_btn_it" id="home" value="{{ $texts->book_btn_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Brand Section</h3></div> 
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_section_heading_en" id="home" value="{{ $texts->brand_section_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_section_heading_it" id="home" value="{{ $texts->brand_section_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_heading_one_en" id="home" value="{{ $texts->brand_heading_one_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_heading_one_it" id="home" value="{{ $texts->brand_heading_one_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_heading_two_en" id="home" value="{{ $texts->brand_heading_two_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_heading_two_it" id="home" value="{{ $texts->brand_heading_two_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_heading_three_en" id="home" value="{{ $texts->brand_heading_three_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_heading_three_it" id="home" value="{{ $texts->brand_heading_three_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_content_one_en" id="home" value="{{ $texts->brand_content_one_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_content_one_it" id="home" value="{{ $texts->brand_content_one_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_content_two_en" id="home" value="{{ $texts->brand_content_two_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_content_two_it" id="home" value="{{ $texts->brand_content_two_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_content_three_en" id="home" value="{{ $texts->brand_content_three_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_content_three_it" id="home" value="{{ $texts->brand_content_three_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Best Deal Section</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="best_deal_heading_en" id="home" value="{{ $texts->best_deal_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="best_deal_heading_it" id="home" value="{{ $texts->best_deal_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="best_deal_content_en" id="home" value="{{ $texts->best_deal_content_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="best_deal_content_it" id="home" value="{{ $texts->best_deal_content_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Car Management texts</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Day_en" id="home" value="{{ $texts->Day_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Day_it" id="home" value="{{ $texts->Day_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Seater_en" id="home" value="{{ $texts->Seater_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Seater_it" id="home" value="{{ $texts->Seater_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Manual_en" id="home" value="{{ $texts->Manual_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Manual_it" id="home" value="{{ $texts->Manual_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="KM_en" id="home" value="{{ $texts->KM_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="KM_it" id="home" value="{{ $texts->KM_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="More_en" id="home" value="{{ $texts->More_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="More_it" id="home" value="{{ $texts->More_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="book_now_en" id="home" value="{{ $texts->book_now_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="book_now_it" id="home" value="{{ $texts->book_now_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="vehicle_type_head_en" id="home" value="{{ $texts->vehicle_type_head_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="vehicle_type_head_it" id="home" value="{{ $texts->vehicle_type_head_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="vehicle_category_head_en" id="home" value="{{ $texts->vehicle_category_head_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="vehicle_category_head_it" id="home" value="{{ $texts->vehicle_category_head_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="total_en" id="home" value="{{ $texts->total_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="total_it" id="home" value="{{ $texts->total_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="automatic_en" id="home" value="{{ $texts->automatic_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="automatic_it" id="home" value="{{ $texts->automatic_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="manual_en" id="home" value="{{ $texts->manual_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="manual_it" id="home" value="{{ $texts->manual_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="change_date_en" id="home" value="{{ $texts->manual_it }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="change_date_it" id="home" value="{{ $texts->manual_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="search_popup_en" id="home" value="{{ $texts->manual_it }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="search_popup_it" id="home" value="{{ $texts->manual_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Why choose us</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="choose_us_heading_en" id="home" value="{{ $texts->best_deal_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="choose_us_heading_it" id="home" value="{{ $texts->best_deal_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="choose_us_content_en" id="home" rows="10">{{ $texts->choose_us_content_en }}</textarea>
                          <!-- <input type="text" class="form-control" name="choose_us_content_en" id="home" value="{{ $texts->best_deal_content_en }}"> -->

                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="choose_us_content_it" id="home" rows="10">{{ $texts->choose_us_content_it }}</textarea>
                          <!-- <input type="text" class="form-control" name="choose_us_content_it" id="home" value="{{ $texts->best_deal_content_it }}"> -->

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Locations</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="location_one_en" id="home" value="{{ $texts->location_one_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="location_one_it" id="home" value="{{ $texts->location_one_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="location_two_en" id="home" value="{{ $texts->location_two_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="location_two_it" id="home" value="{{ $texts->location_two_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="location_three_en" id="home" value="{{ $texts->location_three_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="location_three_it" id="home" value="{{ $texts->location_three_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="location_four_en" id="home" value="{{ $texts->location_four_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="location_four_it" id="home" value="{{ $texts->location_four_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Meet the team</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="meet_team_en" id="home" value="{{ $texts->meet_team_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="meet_team_it" id="home" value="{{ $texts->meet_team_it }}">

                        </div>
                      </td>
                    </tr>
                    
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Work with us</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="work_heading_en" id="home" value="{{ $texts->work_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="work_heading_it" id="home" value="{{ $texts->work_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="work_content_en" id="home" value="{{ $texts->work_content_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="work_content_it" id="home" value="{{ $texts->work_content_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="contact_en" id="home" value="{{ $texts->contact_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="contact_it" id="home" value="{{ $texts->contact_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Footer Featured Makes</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="cat_one_en" id="home" value="{{ $texts->cat_one_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="cat_one_it" id="home" value="{{ $texts->cat_one_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="cat_two_en" id="home" value="{{ $texts->cat_two_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="cat_two_it" id="home" value="{{ $texts->cat_two_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="cat_three_en" id="home" value="{{ $texts->cat_three_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="cat_three_it" id="home" value="{{ $texts->cat_three_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="cat_four_en" id="home" value="{{ $texts->cat_four_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="cat_four_it" id="home" value="{{ $texts->cat_four_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Footer Texts</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_heading_one_en" id="home" value="{{ $texts->footer_heading_one_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_heading_one_it" id="home" value="{{ $texts->footer_heading_one_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_content_en" id="home" value="{{ $texts->footer_content_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_content_it" id="home" value="{{ $texts->footer_content_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_heading_two_en" id="home" value="{{ $texts->footer_heading_two_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_heading_two_it" id="home" value="{{ $texts->footer_heading_two_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_heading_three_en" id="home" value="{{ $texts->footer_heading_three_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_heading_three_it" id="home" value="{{ $texts->footer_heading_three_it }}">

                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_heading_four_en" id="home" value="{{ $texts->footer_heading_four_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="footer_heading_four_it" id="home" value="{{ $texts->footer_heading_four_it }}">

                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="copyright_en" id="home" value="{{ $texts->copyright_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="copyright_it" id="home" value="{{ $texts->copyright_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Manage Booking Popup</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="popup_heading_en" id="home" value="{{ $texts->popup_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="popup_heading_it" id="home" value="{{ $texts->popup_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="popup_content_en" id="home" value="{{ $texts->popup_content_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="popup_content_it" id="home" value="{{ $texts->popup_content_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="booking_no_en" id="home" value="{{ $texts->booking_no_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="booking_no_it" id="home" value="{{ $texts->booking_no_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="email_en" id="home" value="{{ $texts->email_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="email_it" id="home" value="{{ $texts->email_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="submit_btn_en" id="home" value="{{ $texts->submit_btn_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="submit_btn_it" id="home" value="{{ $texts->submit_btn_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="row">


                  <div class="col-12">

                  <button class="btn btn-primary btn-dark float-right" name="submit" type="submit">Submit</button>

                  </div>

                </div>

              </form>



            <!-- /.row -->

          </div>

          <!-- /.card-body -->

          

          <div class="card-footer">

            <!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about

            the plugin. -->

          </div>

        </div>

        <!-- /.card -->



      </div>

      <!-- /.container-fluid -->

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->



@endsection         