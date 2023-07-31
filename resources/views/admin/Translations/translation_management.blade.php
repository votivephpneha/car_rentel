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
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Menus</h3></div> 
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu1_en" id="home" value="{{ $translations_en->Menu1 }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu1_it" id="home" value="{{ $translations_it->Menu1 }}">

                        </div>
                      </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu2_en" id="home" value="{{ $translations_en->Menu2 }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="Menu2_it" id="home" value="{{ $translations_it->Menu2 }}">

                        </div>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Home Banner</h3></div> 
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="pickup_location_en" id="home" value="{{ $translations_en->pickup_location_text }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="pickup_location_it" id="home" value="{{ $translations_it->pickup_location_text }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="dropoff_location_en" id="home" value="{{ $translations_en->drop_off_location }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="dropoff_location_it" id="home" value="{{ $translations_it->drop_off_location }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="pickup_date_en" id="home" value="{{ $translations_en->pickup_date }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="pickup_date_it" id="home" value="{{ $translations_it->pickup_date }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="dropoff_date_en" id="home" value="{{ $translations_en->dropoff_date }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="dropoff_date_it" id="home" value="{{ $translations_it->dropoff_date }}">

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="book_btn_en" id="home" value="{{ $translations_en->book_btn }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="book_btn_it" id="home" value="{{ $translations_it->book_btn }}">

                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-header" style="width: 100%; margin-bottom: 20px;"><h3 class="card-title">Brand Section</h3></div> 
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>English Text</th>
                      <th>Italian Text</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_section_heading_en" id="home" value="{{ $translations_en->brand_section_heading }}">

                        </div>
                      </td>
                      <td>
                        <div class="form-group">

                          <input type="text" class="form-control" name="brand_section_heading_it" id="home" value="{{ $translations_it->brand_section_heading }}">

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