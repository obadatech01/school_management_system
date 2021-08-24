@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
  <div class="container-full">
    <!-- Main content -->
    <section class="content">

        <!-- Basic Forms -->
            <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Manage Profile</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                <div class="col">
                    <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-12">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>User Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="text" value="{{$editData->name}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div><!-- /end col md 6 -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>User Email <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" value="{{$editData->email}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div><!-- /end col md 6 -->
                            </div><!-- /end row -->
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>User Mobile <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="mobile" value="{{$editData->mobile}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div><!-- /end col md 6 -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>User Address <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="address" value="{{$editData->address}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div><!-- /end col md 6 -->
                            </div><!-- /end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>User Gender <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="gender" id="select" required class="form-control">
                                                <option value="" selected disabled>Select Gender</option>
                                                <option value="Male" {{($editData->gender == 'Male' ? 'selected' : '')}}>Male</option>
                                                <option value="Female" {{($editData->gender == 'Female' ? 'selected' : '')}}>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- /end col md 6 -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Profile Image <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="controls">
                                            <img id="showImage" src="{{(!empty($editData->image)) ? url('upload/user_images/'.$editData->image) : url('upload/no_image.jpg')}}" style="width:100px;height:100px;border:1px solid #000;" />
                                        </div>
                                    </div>
                                </div><!-- /end col md 6 -->
                            </div><!-- /end row -->

                        <div class="text-xs-right">
                            <input type="submit" value="Update" class="btn btn-rounded btn-info mb-5">
                        </div>
                    </form>

                </div>
                <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection