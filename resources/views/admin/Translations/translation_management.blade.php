
@extends('admin.layout.layout')



@section('title', 'User - Profile')



@section('current_page_css')
<style>
 
.tabs-nav {
    list-style: none;
    margin: 0;
    padding: 0;
}
.tabs-nav li:first-child a {
    border-right: 0;
    -moz-border-radius-topleft: 6px;
    -webkit-border-top-left-radius: 6px;
    border-top-left-radius: 6px;
}
.tabs-nav .tab-active a {
    background: hsl(0, 100%, 100%);
    border-bottom-color: hsla(0, 0%, 0%, 0);
    color: #ff5f00;
    cursor: default;
}
.tabs-nav a {
    background: hsl(120, 11%, 96%);
    border: 1px solid hsl(210, 6%, 79%);
    color: hsl(215, 6%, 57%);
    display: block;
    font-size: 11px;
    font-weight: bold;
    height: 46px;
    line-height: 10px;
    text-align: center;
    text-transform: uppercase;
  padding: 18px;
    
}
.tabs-nav li:last-child a {
    border-left: 0px;
    border-top-right-radius: 6px;
}
.tabs-nav li {
    float: left;
}
.tabs-stage {
    border: 1px solid hsl(210, 6%, 79%);
    -webkit-border-radius: 0 0 6px 6px;
    -moz-border-radius: 0 0 6px 6px;
    -ms-border-radius: 0 0 6px 6px;
    -o-border-radius: 0 0 6px 6px;
    border-radius: 0 0 6px 6px;
    border-top: 0;
    clear: both;
    margin-bottom: 20px;
    position: relative;
    top: -1px;
    
}
.tabs-stage p {
    margin: 0;
    padding: 20px;
    color: hsl(0, 0%, 33%);
}
.mgmt_tabs {
    padding-bottom: 15px;
}
.trans_lng_btn button.btn {
    margin-right: 15px;
}
</style>
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
// From http://learn.shayhowe.com/advanced-html-css/jquery
$("#updateTranslationsTwo").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_translationsTwo',
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
$("#updateCarTranslations").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_car_translations',
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
$("#updateCategoryTranslations").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_category_translations',
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
$("#updateAddressTranslations").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_address_translations',
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
$("#updateLoginTranslations").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_login_translations',
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
$("#updateCountryTranslations").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_country_translations',
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
$("#updateTeamTranslations").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_team_translations',
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
$("#updatePageTranslations").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_page_translations',
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
$("#updateValidationTranslations").validate({
  debug: false,
  
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_validation_translations',
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
// Change tab class and display content
$('.tabs-nav a').on('click', function (event) {
    event.preventDefault();
    
    $('.tab-active').removeClass('tab-active');
    $(this).parent().addClass('tab-active');
    $('.tabs-stage .form_tab').hide();
    $($(this).attr('href')).show();
});

$('.tabs-nav a:first').trigger('click'); // Default

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
              <ul class="tabs-nav">
                  <li class=""><a href="#tab-1" rel="nofollow">Basic Texts</a>
                  </li>
                  <li class="tab-active"><a href="#tab-2" rel="nofollow">Booking Texts</a>
                  </li>
                  <li class="tab-active"><a href="#tab-3" rel="nofollow">Login Management Texts</a>
                  </li>
                  <li class="tab-active"><a href="#tab-4" rel="nofollow">Form Validations and Success Messages</a>
                  </li>
                  <li class="tab-active"><a href="#tab-5" rel="nofollow">Locations</a>  
                  </li>
                  <li class="tab-active"><a href="#tab-6" rel="nofollow">Countries Translation</a>
                  </li>
                  </li>
              </ul>
              <div class="tabs-stage mgmt_tabs">
               <div id="tab-1" class="form_tab" style="display: none;"> 
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

                          <input type="text" class="form-control" name="change_date_en" id="home" value="{{ $texts->change_date_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="change_date_it" id="home" value="{{ $texts->change_date_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="search_popup_en" id="home" value="{{ $texts->search_popup_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="search_popup_it" id="home" value="{{ $texts->search_popup_it }}">

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
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">	</h3></div>
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


                  <div class="col-12 trans_lng_btn">

                  <button class="btn btn-primary btn-dark float-right" name="submit" type="submit">Submit</button>

                  </div>

                </div>

              </form>
              </div>
              <div id="tab-2" class="form_tab" style="display: block;">
            <form enctype="multipart/form-data" id="updateTranslationsTwo">            
                @csrf
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_heading_en" id="home" value="{{ $texts_booking->driver_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_heading_it" id="home" value="{{ $texts_booking->driver_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_sub_heading_en" id="home" value="{{ $texts_booking->driver_sub_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_sub_heading_it" id="home" value="{{ $texts_booking->driver_sub_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_email_en" id="home" value="{{ $texts_booking->driver_email_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_email_it" id="home" value="{{ $texts_booking->driver_email_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_title_en" id="home" value="{{ $texts_booking->driver_title_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_title_it" id="home" value="{{ $texts_booking->driver_title_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_fname_en" id="home" value="{{ $texts_booking->driver_fname_en }}">

                        </div>
                      </td>
                       
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_fname_it" id="home" value="{{ $texts_booking->driver_fname_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_lname_en" id="home" value="{{ $texts_booking->driver_lname_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_lname_it" id="home" value="{{ $texts_booking->driver_lname_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_contact_en" id="home" value="{{ $texts_booking->driver_contact_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_contact_it" id="home" value="{{ $texts_booking->driver_contact_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_country_en" id="home" value="{{ $texts_booking->driver_country_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_country_it" id="home" value="{{ $texts_booking->driver_country_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_flight_en" id="home" value="{{ $texts_booking->driver_flight_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_flight_it" id="home" value="{{ $texts_booking->driver_flight_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_notes_en" id="home" value="{{ $texts_booking->driver_notes_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_notes_it" id="home" value="{{ $texts_booking->driver_notes_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_submit_btn_en" id="home" value="{{ $texts_booking->driver_submit_btn_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_submit_btn_it" id="home" value="{{ $texts_booking->driver_submit_btn_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_email_field_en" id="home" value="{{ $texts_booking->driver_email_field_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_email_field_it" id="home" value="{{ $texts_booking->driver_email_field_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_contact_field_en" id="home" value="{{ $texts_booking->driver_contact_field_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_contact_field_it" id="home" value="{{ $texts_booking->driver_contact_field_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_flight_field_en" id="home" value="{{ $texts_booking->driver_flight_field_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_flight_field_it" id="home" value="{{ $texts_booking->driver_flight_field_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_title_one_en" id="home" value="{{ $texts_booking->driver_title_one_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_title_one_it" id="home" value="{{ $texts_booking->driver_title_two_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_title_two_en" id="home" value="{{ $texts_booking->driver_title_two_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_title_two_it" id="home" value="{{ $texts_booking->driver_title_two_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_select_option_en" id="home" value="{{ $texts_booking->driver_select_option_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_select_option_it" id="home" value="{{ $texts_booking->driver_select_option_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_required_field_en" id="home" value="{{ $texts_booking->driver_required_field_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_required_field_it" id="home" value="{{ $texts_booking->driver_required_field_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_valid_no_en" id="home" value="{{ $texts_booking->driver_valid_no_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_valid_no_it" id="home" value="{{ $texts_booking->driver_valid_no_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_valid_email_en" id="home" value="{{ $texts_booking->driver_valid_email_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_valid_email_it" id="home" value="{{ $texts_booking->driver_valid_email_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_image_text_en" id="home" value="{{ $texts_booking->driver_image_text_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="driver_image_text_it" id="home" value="{{ $texts_booking->driver_image_text_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="driver_image_text_en" id="home" rows="5">{{ $texts_booking->driver_image_text_en }}</textarea>
                          

                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="driver_image_text_it" id="home" rows="5">{{ $texts_booking->driver_image_text_it }}</textarea>
                          

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Payment Page</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="payment_method_en" id="home" value="{{ $texts_booking->payment_method_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="payment_method_it" id="home" value="{{ $texts_booking->payment_method_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="paytext_en" id="home" value="{{ $texts_booking->paytext_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="paytext_it" id="home" value="{{ $texts_booking->paytext_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="payment_btn_en" id="home" value="{{ $texts_booking->payment_btn_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="payment_btn_it" id="home" value="{{ $texts_booking->payment_btn_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="rentel_days_en" id="home" value="{{ $texts_booking->rentel_days_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="rentel_days_it" id="home" value="{{ $texts_booking->rentel_days_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="payment_details_en" id="home" rows="5">{{ $texts_booking->payment_details_en }}</textarea>
                          

                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="payment_details_it" id="home" rows="5">{{ $texts_booking->payment_details_it }}</textarea>
                          

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="price_detail_en" id="home" value="{{ $texts_booking->price_detail_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="price_detail_it" id="home" value="{{ $texts_booking->price_detail_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Thank You Page</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="thankyoucontent_en" id="home" rows="5">{{ $texts_booking->payment_details_en }}</textarea>
                          

                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="thankyoucontent_it" id="home" rows="5">{{ $texts_booking->payment_details_it }}</textarea>
                          

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="thankyoubtn_en" id="home" value="{{ $texts->best_deal_content_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="thankyoubtn_it" id="home" value="{{ $texts->best_deal_content_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="row">


                  <div class="col-12 trans_lng_btn">

                  <button class="btn btn-primary btn-dark float-right" name="submit" type="submit">Submit</button>

                  </div>

                </div>
            </form>
            </div>
            <div id="tab-3" class="form_tab" style="display: none;">
              <form method="POST" enctype="multipart/form-data" id="updateLoginTranslations" novalidate="novalidate">
                @csrf
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </tbody>
                </table>
                
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="login_text_en" id="home" value="{{ $login_texts->login_text_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="login_text_it" id="home" value="{{ $login_texts->login_text_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="login_heading_en" id="home" value="{{ $login_texts->login_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="login_heading_it" id="home" value="{{ $login_texts->login_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="login_email_en" id="home" value="{{ $login_texts->login_email_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="login_email_it" id="home" value="{{ $login_texts->login_email_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="login_password_en" id="home" value="{{ $login_texts->login_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="login_password_it" id="home" value="{{ $login_texts->login_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="login_submit_en" id="home" value="{{ $login_texts->login_submit_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="login_submit_it" id="home" value="{{ $login_texts->login_submit_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="login_remember_text_en" id="home" value="{{ $login_texts->login_remember_text_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="login_remember_text_it" id="home" value="{{ $login_texts->login_remember_text_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="login_forget_password_en" id="home" value="{{ $login_texts->login_forget_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="login_forget_password_it" id="home" value="{{ $login_texts->login_forget_password_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">User Dashboard</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="dashboard_en" id="home" value="{{ $login_texts->dashboard_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="dashboard_it" id="home" value="{{ $login_texts->dashboard_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="date_range_en" id="home" value="{{ $login_texts->date_range_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="date_range_it" id="home" value="{{ $login_texts->date_range_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="total_customers_en" id="home" value="{{ $login_texts->total_customers_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="total_customers_it" id="home" value="{{ $login_texts->total_customers_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="accepted_customers_en" id="home" value="{{ $login_texts->accepted_customers_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="accepted_customers_it" id="home" value="{{ $login_texts->accepted_customers_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="rejected_customers_en" id="home" value="{{ $login_texts->rejected_customers_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="rejected_customers_it" id="home" value="{{ $login_texts->rejected_customers_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="total_customers_bill_en" id="home" value="{{ $login_texts->total_customers_bill_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="total_customers_bill_it" id="home" value="{{ $login_texts->total_customers_bill_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Profile</h3></div>
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_text_en" id="home" value="{{ $login_texts->profile_text_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_text_it" id="home" value="{{ $login_texts->profile_text_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_heading_en" id="home" value="{{ $login_texts->profile_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_heading_it" id="home" value="{{ $login_texts->profile_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_name_en" id="home" value="{{ $login_texts->profile_name_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_name_it" id="home" value="{{ $login_texts->profile_name_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_email_en" id="home" value="{{ $login_texts->profile_email_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_email_it" id="home" value="{{ $login_texts->profile_email_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_phone_en" id="home" value="{{ $login_texts->profile_phone_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_phone_it" id="home" value="{{ $login_texts->profile_phone_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_address_en" id="home" value="{{ $login_texts->profile_address_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_address_it" id="home" value="{{ $login_texts->profile_address_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_city_en" id="home" value="{{ $login_texts->profile_city_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_city_it" id="home" value="{{ $login_texts->profile_city_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_country_en" id="home" value="{{ $login_texts->profile_country_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_country_it" id="home" value="{{ $login_texts->profile_country_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="select_country_en" id="home" value="{{ $login_texts->select_country_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="select_country_it" id="home" value="{{ $login_texts->select_country_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_image_en" id="home" value="{{ $login_texts->profile_image_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_image_it" id="home" value="{{ $login_texts->profile_image_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_btn_en" id="home" value="{{ $login_texts->profile_btn_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_btn_it" id="home" value="{{ $login_texts->profile_btn_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Change Password</h3></div>
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="change_password_text_en" id="home" value="{{ $login_texts->change_password_text_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="change_password_text_it" id="home" value="{{ $login_texts->change_password_text_it }}">

                        </div>
                      </td>
                    </tr>
                    
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="old_password_en" id="home" value="{{ $login_texts->old_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="old_password_it" id="home" value="{{ $login_texts->old_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="new_password_en" id="home" value="{{ $login_texts->new_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="new_password_it" id="home" value="{{ $login_texts->new_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="confirm_password_en" id="home" value="{{ $login_texts->confirm_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="confirm_password_it" id="home" value="{{ $login_texts->confirm_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="password_submit_en" id="home" value="{{ $login_texts->password_submit_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="password_submit_it" id="home" value="{{ $login_texts->password_submit_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="logout_btn_en" id="home" value="{{ $login_texts->logout_btn_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="logout_btn_it" id="home" value="{{ $login_texts->logout_btn_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Forget Password</h3></div>
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="forget_password_heading_en" id="home" value="{{ $login_texts->forget_password_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="forget_password_heading_it" id="home" value="{{ $login_texts->forget_password_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="forget_password_email_en" id="home" value="{{ $login_texts->forget_password_email_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="forget_password_email_it" id="home" value="{{ $login_texts->forget_password_email_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="forget_password_recover_en" id="home" value="{{ $login_texts->forget_password_recover_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="forget_password_recover_it" id="home" value="{{ $login_texts->forget_password_recover_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="back_login_en" id="home" value="{{ $login_texts->back_login_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="back_login_it" id="home" value="{{ $login_texts->back_login_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Reset Password</h3></div>
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="reset_password_heading_en" id="home" value="{{ $login_texts->reset_password_heading_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="reset_password_heading_it" id="home" value="{{ $login_texts->reset_password_heading_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="reset_password_email_en" id="home" value="{{ $login_texts->reset_password_email_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="reset_password_email_it" id="home" value="{{ $login_texts->reset_password_email_it }}">

                        </div>
                      </td>
                    </tr>
                    
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="reset_new_password_en" id="home" value="{{ $login_texts->reset_new_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="reset_new_password_it" id="home" value="{{ $login_texts->reset_new_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="reset_confirm_password_en" id="home" value="{{ $login_texts->reset_confirm_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="reset_confirm_password_it" id="home" value="{{ $login_texts->reset_confirm_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="reset_submit_en" id="home" value="{{ $login_texts->reset_submit_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="reset_submit_it" id="home" value="{{ $login_texts->reset_submit_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="row">


                  <div class="col-12 trans_lng_btn">

                  <button class="btn btn-primary btn-dark float-right" name="submit" type="submit">Submit</button>

                  </div>

                </div>
              </form>
            </div>
            <div id="tab-4" class="form_tab" style="display: none;">
              <form method="POST" enctype="multipart/form-data" id="updateValidationTranslations" novalidate="novalidate">
                @csrf
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </tbody>
                </table>
                
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="enter_email_en" id="home" value="{{ $validation_translation->enter_email_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="enter_email_it" id="home" value="{{ $validation_translation->enter_email_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="valid_email_en" id="home" value="{{ $validation_translation->valid_email_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="valid_email_it" id="home" value="{{ $validation_translation->valid_email_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="enter_password_en" id="home" value="{{ $validation_translation->enter_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="enter_password_it" id="home" value="{{ $validation_translation->enter_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="incorrect_email_password_en" id="home" value="{{ $validation_translation->incorrect_email_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="incorrect_email_password_it" id="home" value="{{ $validation_translation->incorrect_email_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="profile_successful_en" id="home" value="{{ $validation_translation->profile_successful_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="profile_successful_it" id="home" value="{{ $validation_translation->profile_successful_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="old_password_val_en" id="home" value="{{ $validation_translation->old_password_val_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="old_password_val_it" id="home" value="{{ $validation_translation->old_password_val_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="new_password_val_en" id="home" value="{{ $validation_translation->new_password_val_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="new_password_val_it" id="home" value="{{ $validation_translation->new_password_val_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="new_password_val_length_en" id="home" value="{{ $validation_translation->new_password_val_length_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="new_password_val_length_it" id="home" value="{{ $validation_translation->new_password_val_length_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="confirm_password_val_en" id="home" value="{{ $validation_translation->confirm_password_val_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="confirm_password_val_it" id="home" value="{{ $validation_translation->confirm_password_val_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="match_confirm_password_en" id="home" value="{{ $validation_translation->match_confirm_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="match_confirm_password_it" id="home" value="{{ $validation_translation->match_confirm_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="wrong_password_en" id="home" value="{{ $validation_translation->wrong_password_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="wrong_password_it" id="home" value="{{ $validation_translation->wrong_password_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="password_updated_successful_en" id="home" value="{{ $validation_translation->password_updated_successful_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="password_updated_successful_it" id="home" value="{{ $validation_translation->password_updated_successful_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="forget_password_successful_en" id="home" value="{{ $validation_translation->forget_password_successful_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="forget_password_successful_it" id="home" value="{{ $validation_translation->forget_password_successful_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="forget_email_not_found_en" id="home" value="{{ $validation_translation->forget_email_not_found_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="forget_email_not_found_it" id="home" value="{{ $validation_translation->forget_email_not_found_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="password_changed_en" id="home" value="{{ $validation_translation->password_changed_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="password_changed_it" id="home" value="{{ $validation_translation->password_changed_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="invalid_token_en" id="home" value="{{ $validation_translation->invalid_token_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="invalid_token_it" id="home" value="{{ $validation_translation->invalid_token_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="link_expired_en" id="home" value="{{ $validation_translation->link_expired_en }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="link_expired_it" id="home" value="{{ $validation_translation->link_expired_it }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table> 
                
                <div class="row">


                  <div class="col-12 trans_lng_btn">

                  <button class="btn btn-primary btn-dark float-right" name="submit" type="submit">Submit</button>

                  </div>

                </div>
              </form>  
            </div>
            <div id="tab-5" class="form_tab" style="display: none;">
              <form method="POST" enctype="multipart/form-data" id="updateAddressTranslations" novalidate="novalidate">
                @csrf
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </tbody>
                </table>
                <?php $i = 1; ?>
                @foreach($address_data as $c_data)
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">{{ $i++ }}</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">
                          <input type="hidden" name="address_id[]" value="{{ $c_data->id }}">
                          <input type="text" class="form-control" name="address_name_en" id="home" value="{{ $c_data->address }}" disabled="">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="address_name_it[]" id="home" value="{{ $c_data->address_it }}">

                        </div>
                      </td>
                    </tr>
                    
                    
                  </tbody>
                </table> 
                @endforeach
                <div class="row">


                  <div class="col-12 trans_lng_btn">

                  <button class="btn btn-primary btn-dark float-right" name="submit" type="submit">Submit</button>

                  </div>

                </div>
              </form>  
            </div>
            <div id="tab-6" class="form_tab" style="display: none;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                  <tr>

                    <th>SNo.</th>

                    <th>Country Name</th>
                    
                    
                    <th>Action</th>

                  </tr>

                </thead>
                <tbody>
                  
                    @if (!$countries_data->isEmpty())

                      <?php $i = 1; ?>
                      @foreach($countries_data as $arr)
                        <tr id="country{{ $arr->id }}">
                          <td>{{ $i }}</td>
                          <td>{{ $arr->name }}</td>  


                            <td class="text-center py-0 align-middle">

                                <div class="btn-group btn-group-sm">

                                  <a href="{{url('/admin/edit_country_translations')}}/{{$arr->id}}" class="btn btn-info" style="margin-right: 3px;"><i class="fas fa-pencil-alt"></i></a>


                                </div>

                            </td>
                        </tr>  
                        <?php $i++; ?>
                      @endforeach
                      
                    @endif                        
                  
                </tbody>
              </table>
            </div>
              <div id="tab-7" class="form_tab" style="display: none;">
              <form method="POST" enctype="multipart/form-data" id="updateTeamTranslations" novalidate="novalidate">
                @csrf
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </tbody>
                </table>
                <?php $i = 1; ?>
                @foreach($ourteams as $teams)
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">{{ $i++ }}</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">
                          <input type="hidden" name="team_id[]" value="{{ $teams->id }}">
                          <input type="text" class="form-control" name="team_title_en" id="home" value="{{ $teams->page_title }}" disabled="">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="team_title_it[]" id="home" value="{{ $teams->page_title_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="team_subtitle_en" id="home" value="{{ $teams->sub_title }}" disabled="">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="team_subtitle_it[]" id="home" value="{{ $teams->sub_title_it }}">

                        </div>
                      </td>
                    </tr>
                    
                  </tbody>
                </table> 
                @endforeach
                <div class="row">


                  <div class="col-12">

                  <button class="btn btn-primary btn-dark float-right" name="submit" type="submit">Submit</button>

                  </div>

                </div>
              </form>  
            </div>
            <div id="tab-8" class="form_tab" style="display: none;">
              <form method="POST" enctype="multipart/form-data" id="updatePageTranslations" novalidate="novalidate">
                @csrf
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </tbody>
                </table>
                <?php $i = 1; ?>
                @foreach($pages as $p_data)
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">{{ $i++ }}</h3></div>
                <table class="table table-bordered table-striped">
                  
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">
                          <input type="hidden" name="page_id[]" value="{{ $p_data->id }}">
                          <input type="text" class="form-control" name="page_title_en" id="home" value="{{ $p_data->page_title }}" disabled="">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="page_title_it[]" id="home" value="{{ $p_data->page_title_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="page_subtitle_en" id="home" value="{{ $p_data->sub_title }}" disabled="">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="page_subtitle_it[]" id="home" value="{{ $p_data->sub_title_it }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="page_content_en[]" id="home" rows="5" disabled="">{{ $p_data->page_content }}</textarea>
                          

                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <textarea class="form-control" name="page_content_it[]" id="home" rows="5">{{ $p_data->page_content_it }}</textarea>
                          

                        </div>
                      </td>
                    </tr>
                    
                  </tbody>
                </table> 
                @endforeach
                <div class="row">


                  <div class="col-12">

                  <button class="btn btn-primary btn-dark float-right" name="submit" type="submit">Submit</button>

                  </div>

                </div>
              </form>  
            </div>
          </div>

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