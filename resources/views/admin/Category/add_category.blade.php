@extends('admin.layout.layout')



@section('title', 'User - Profile')



@section('current_page_css')

@endsection



@section('current_page_js')

<script type="text/javascript">
 // Start pages

$("#addCategoryForm").validate({
  debug: false,
  rules: {
    cat_name: {
        required: true,
    },
    cat_name_it: {
        required: true,
    }

  },
  messages:{
    cat_name: {
        required: "Please enter the category name in English",
    },
    cat_name_it: {
        required: "Please enter the category name in Italian",
    }
  },
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    // alert(site_url);
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/submit_category',
      data: formData,
      success: function (response) {
        console.log(response);
        if (response.status == 'success') {
          // $("#register_form")[0].reset();
          // success_noti(response.msg);
          // setTimeout(function(){window.location.reload()},1000);
          success_noti(response.msg);
          setTimeout(function(){window.location.href=site_url+"/admin/show_category"},1000);
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

            <h1>Add Category</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Add Category</li>

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

              <form  method="POST" enctype="multipart/form-data" id="addCategoryForm">

                @csrf

                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">

                      <label>Category Name(English)</label>

                      <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Enter Category Name(English)">

                    </div>

                  </div>
                  <div class="col-md-6">

                    <div class="form-group">

                      <label>Category Name(Italian)</label>

                      <input type="text" class="form-control" name="cat_name_it" id="cat_name_it" placeholder="Enter Category Name(Italian)">

                    </div>

                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-primary btn-dark" name="submit" type="submit" style="margin-top: 31px;">Submit</button>
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