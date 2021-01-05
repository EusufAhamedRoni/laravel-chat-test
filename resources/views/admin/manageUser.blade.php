@extends('admin.layouts.base')

@section('content')
<div class="content">
  <div class="content-header">
    <div class="leftside-content-header">
      <ul class="breadcrumbs">
        <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">Tables</a></li>
        <li><a>Responsive</a></li>
      </ul>
    </div>
  </div>

  <div class="row animated fadeInRight">
    <div class="col-sm-12">
      <div class="panel b-primary bt-md">
        <div class="panel-content">
          <div class="row">
            <div class="col-xs-6"><h5>Manage User</h5></div>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>Is_Admin</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allUser as $users)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $users->name }}</td>
                  <td>{{ $users->email }}</td>
                  <td>
                    <input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="NO" id="isAdminUser" data-size="mini" data-id="{{ $users->id }}" {{ $users->is_admin == 1 ? 'checked':'' }}>
                  </td>
                  <td>
                    <a href="{{ route('editUser', $users->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="{{ route('deleteUser', $users->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  $('body').on('change', '#isAdminUser', function(){
    var id = $(this).attr('data-id');
    if(this.checked){
      var is_admin = 1;
    }
    else{
      var is_admin = 0;
    }

    $.ajax({
      url: 'userstatus/'+id+'/'+is_admin,
      method: 'get',
      success: function(result){
        console.log(result);
      }
    });
  });
</script>
@endpush
