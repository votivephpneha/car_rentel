@extends('admin.layout.layout')



@section('title', 'Pages')



@section('current_page_css')

@endsection



@section('current_page_js')

<script type="text/javascript">
 // Start pages

$("#pageUpdateAdmin_form").validate({
  debug: false,
  rules: {
    pagetitle: {
        required: true,
    },
 
    content: {
      required: true,
    },

  },
  submitHandler: function (form) {
    var site_url = $("#baseUrl").val();
    var formData = $(form).serialize();
    $(form).ajaxSubmit({
      type: 'POST',
      url: site_url + '/admin/page_update',
      data: formData,
      success: function (response) {
        // console.log(response);
        if (response.status == 'success') {
          // $("#register_form")[0].reset();
          success_noti(response.msg);
          // setTimeout(function(){window.location.reload()},1000);
          setTimeout(function(){window.location.href=site_url+"/admin/content_management"},1000);
        } else {
          error_noti(response.msg);
        }

      }
    });
    // event.preventDefault();
  }
});
</script>

// End pages 

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

            <h1>Update Page</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Update Page</li>

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

          <div class="card-header">

            <h3 class="card-title">Page Form</h3>



            <!-- <div class="card-tools">

              <button type="button" class="btn btn-tool" data-card-widget="collapse">

                <i class="fas fa-minus"></i>

              </button>

              <button type="button" class="btn btn-tool" data-card-widget="remove">

                <i class="fas fa-times"></i>

              </button>

            </div> -->

          </div>



          <!-- /.card-header -->

          <div class="card-body">

              <form  method="POST" action="{{url('admin/page_update')}}" enctype="multipart/form-data">


                <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />

                <input type="hidden" name="user_id" id="user_id" value="{{(!empty($page_info->id) ? $page_info->id : '')}}" />

                

                <div class="row">

                  <div class="col-md-6">

                    <div class="form-group">

                      <label>Title(English)</label>

                      <input type="text" class="form-control" name="pagetitle" id="pagetitle" placeholder="Enter Page Title"  value="{{(!empty($page_info->page_title) ? $page_info->page_title : '')}}">

                    </div>

                  </div>


                  <div class="col-md-6">

                    <div class="form-group">

                      <label>SubTitle(English)</label>

                      <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Enter Sub Title" value="{{(!empty($page_info->sub_title) ? $page_info->sub_title : '')}}">

                    </div>

                  </div>


                  <div class="col-md-12">

                    <div class="form-group">

                      <label>Content(English)</label>

                      <textarea id="summernote" class="ckeditor form-control" name="content">{{(!empty($page_info->page_content) ? $page_info->page_content : '')}}</textarea>

                    </div>

                  </div>
                  <div class="col-md-6">

                    <div class="form-group">

                      <label>Title(Italian)</label>

                      <input type="text" class="form-control" name="pagetitle_it" id="pagetitle" placeholder="Enter Title" value="{{(!empty($page_info->page_title_it) ? $page_info->page_title_it : '')}}">

                    </div>

                  </div>

                  <!-- <div class="col-md-6">

                    <div class="form-group">

                      <label>Customer Last Name</label>

                      <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Customer Last Name">

                    </div>

                  </div> -->



                  <div class="col-md-6">

                    <div class="form-group">

                      <label>SubTitle(Italian)</label>

                      <input type="text" class="form-control" name="subtitle_it" id="subtitle" placeholder="Enter Sub Title" autocomplete="" value="{{(!empty($page_info->sub_title_it) ? $page_info->sub_title_it : '')}}">

                    </div>

                  </div>

                  <div class="col-md-12">

                    <div class="form-group">

                      <label>Content(Italian)</label>
            
            <textarea id="summernote1" class=" ckeditor form-control" name="content_it">{{(!empty($page_info->page_content_it) ? $page_info->page_content_it : '')}}</textarea>

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