@extends('admin.layouts.base')

@section('content')
<div class="content">
  <div class="content-header">
    <div class="leftside-content-header">
      <ul class="breadcrumbs">
        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="#">Forms</a></li>
        <li><a>Layouts</a></li>
      </ul>
    </div>
  </div>

  <div class="row animated fadeInUp">
    <div class="col-sm-12 col-md-8 col-md-offset-2">
      <div class="panel b-primary bt-md">
        <div class="panel-content">
          <div class="row">
            <div class="col-xs-6"><h5>User Edit Form</h5></div>
          </div>
          <div class="row">
            <div class="col-md-12">

              <form action="{{ route('updateUser', $edituser->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label for="text1" class="col-sm-2 control-label">User Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="text1" name="userName" value="{{ $edituser->name }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="text2" class="col-sm-2 control-label">User Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="text2" name="userEmail" value="{{ $edituser->email }}">
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type="button" value="Cancel" class="btn btn-primary btn-xs" onClick="window.location='{{ route('manageUserHistory') }}';"/>
                    <input type="submit" value="Update Skill" class="btn btn-primary btn-xs">
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
