@extends('admin.layout.layout')

@section('title', 'User - Profile')

@section('current_page_css')

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

<style>

  .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }

</style>

@endsection


@section('current_page_js')

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script type="text/javascript">

  function deleteConfirmation(id) {

    toastDelete.fire({

    }).then(function(e) {

      if (e.value === true) {

          // alert(id);

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({

          type: 'POST',

          url: "{{url('/admin/delete_help')}}",

          data: {

            user_id: id,

            _token: CSRF_TOKEN

          },

          dataType: 'JSON',

          success: function(results) {

            $("#row" + id).remove();

            // console.log(results);

            success_noti(results.msg);

          }

        });

      } else {

        e.dismiss;

      }

    }, function(dismiss) {

      return false;

    })

  }

</script>

<script>

  $('.toggle-class').on('change', function() {

    var status = $(this).prop('checked') == true ? 1 : 0; 

    var user_id = $(this).data('id');

    $.ajax({

      type: "GET",

      dataType: "json",

      url: "<?php echo url('/admin/change_help_status'); ?>",

      data: {'status': status, 'user_id': user_id},

      success: function(data){

        success_noti(data.success);

      },

      error: function(errorData) {

        console.log(errorData);

        alert('Please refresh page and try again!');

      }

    });

  })

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

                        <h1>Help Notification List</h1>

                    </div>

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Help Notification</a></li>

                            <li class="breadcrumb-item active">Help Notification List</li>

                        </ol>

                    </div>

                </div>

            </div><!-- /.container-fluid -->

        </section>

                       @if(session()->has('message'))
           <div class="alert alert-success">
              {{ session()->get('message') }}
           </div>
           @endif

        <!-- Main content -->

        <section class="content">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-12">

                        <div class="row">

                        <div class="col-md-11"></div>


                        </div>


                        <div class="card">

                            <!-- <div class="card-header">

                                    <h3 class="card-title">DataTable</h3>

                                  </div> -->

                            <!-- /.card-header -->

                            <div class="card-body">

                                <table id="example" class="table table-bordered table-striped">

                                    <thead>

                                        <tr>

                                            <th>SNo.</th>

                                            <th>Email</th>

                                            <th>Message</th>

                                            <th>Status</th>

                                            <th>Action</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        @if (!$pageList->isEmpty())

                                            <?php $i = 1; ?>

                                            @foreach ($pageList as $arr)

                                                <tr id="row{{ $arr->id }}">

                                                    <td>{{ $i }}</td>

                                                    <td>{{ $arr->email }}</td>

                                                    <td>{{ $arr->message }}</td>


                                                    <td class="project-state">

                                                        <input  type="checkbox" class="toggle-class" data-id="{{$arr->id}}" data-toggle="toggle" data-style="slow" data-onstyle="success" data-size="small" data-on="Active" data-off="InActive" {{ $arr->status ? 'checked' : '' }}>

                                                    </td>

                                                    <td class="text-right py-0 align-middle">

                                                        <div class="btn-group btn-group-sm">

                                                            <!--<a href="{{url('/admin/edit_newsletter')}}/{{$arr->id}}" class="btn btn-info" style="margin-right: 3px;"><i class="fas fa-pencil-alt"></i></a>-->

                                                            <a href="javascript:void(0)" onclick="deleteConfirmation('<?php echo $arr->id; ?>');" class="btn btn-danger" style="margin-right: 3px;"><i class="fas fa-trash"  alt="user" title="user"></i></a>


                                                        </div>

                                                    </td>

                                                    

                                                </tr>

                                                <?php $i++; ?>

                                            @endforeach



                                        @endif

                                    </tbody>

                                </table>

                            </div>

                            <!-- /.card-body -->

                        </div>

                        <!-- /.card -->

                    </div>

                    <!-- /.col -->

                </div>

                <!-- /.row -->

            </div>

            <!-- /.container-fluid -->

        </section>

        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->



@endsection
