@extends('admin.layout.layout')



@section('title', 'User - Profile')



@section('current_page_css')

@endsection



@section('current_page_js')

<script type="text/javascript">
 // Start pages

$("#editCarsForm").validate({
  debug: false,
  rules: {
    title: {
        required: true,
    },
    sub_title: {
      required: true,
    },
    
    no_of_day: {
      required: true,
    },
    no_of_seats: {
      required: true,
    },
    no_of_km: {
      required: true,
    },
    price: {
      required: true,
    }

  },
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/update_cars',
      data: formData,
      success: function (response) {
        console.log(response);
        if (response.status == 'success') {
          // $("#register_form")[0].reset();
          // success_noti(response.msg);
          // setTimeout(function(){window.location.reload()},1000);
          success_noti(response.msg);
          setTimeout(function(){window.location.href=site_url+"/admin/car_management"},1000);
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
    image.onchange = evt => {
      const [file] = image.files
      if (file) {
        vehicle_img.src = URL.createObjectURL(file)
      }
    }
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

            <h1>Edit Cars</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Edit Cars</li>

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

            <h3 class="card-title">Categories Form</h3>


          </div> -->



          <!-- /.card-header -->

          <div class="card-body">

              <form  method="POST" enctype="multipart/form-data" id="editCarsForm">

                @csrf

                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">

                      <label>Title</label>
                      <input type="hidden" name="car_id" value="{{ $car_list->id }}">
                      <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" value="{{ $car_list->title }}">

                    </div>

                  </div>

                  <div class="col-md-6">

                  <div class="form-group">

                  <label>Sub Title</label>
            
                 <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{ $car_list->sub_title }}">

                  </div>

                  </div>

                  <div class="col-md-6">

                  <div class="form-group">

                  <label>Image</label>
            
                 <input type="file" class="form-control" name="image" id="image">
                 <div class="car_image"><br>
                   <img src="{{ url('public/uploads/cars') }}/{{ $car_list->image }}" id="vehicle_img" style="width:100px">
                 </div>
                  </div>

                  </div>
                  <div class="col-md-6">

                  <div class="form-group">

                  <label>No of day</label>
            
                 <select class="form-control" name="no_of_day" id="no_of_day">
                    <option>Select</option>
                    <option <?php if($car_list->no_of_day == '1 Day'){ echo 'selected'; } ?>>1 Day</option>
                    <option <?php if($car_list->no_of_day == '3+ Day'){ echo 'selected'; } ?>>3+ Day</option>
                    <option <?php if($car_list->no_of_day == '7+ Day'){ echo 'selected'; } ?>>7+ Day</option>
                    <option <?php if($car_list->no_of_day == '30+ Day'){ echo 'selected'; } ?>>30+ Day</option>
                  </select>
                  </div>

                  </div>
                  <div class="col-md-6">

                  <div class="form-group">

                  <label>No of seats</label>
            
                 <input type="text" class="form-control" name="no_of_seats" id="no_of_seats" value="{{ $car_list->no_of_seats }}">

                  </div>

                  </div>

                  <div class="col-md-6">

                  <div class="form-group">

                  <label>No of Kilometer</label>
                  <select class="form-control" name="no_of_km" id="no_of_km">
                    <option>Select</option>
                    <option <?php if($car_list->no_of_km == 'Unlimited'){ echo 'selected'; } ?>>Unlimited</option>
                  </select>
                 

                  </div>

                  </div>
                  <div class="col-md-6">

                  <div class="form-group">

                  <label>Price(in $)</label>
            
                 <input type="text" class="form-control" name="price" id="price" value="{{ $car_list->price }}">

                  </div>

                  </div>

                  <div class="col-md-6">

                  <div class="form-group">

                  <label>Total Price(in $)</label>
            
                 <input type="text" class="form-control" name="total_price" id="total_price" value="{{ $car_list->total_price }}">

                  </div>

                  </div>

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