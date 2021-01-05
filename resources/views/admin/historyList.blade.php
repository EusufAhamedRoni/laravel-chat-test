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
    <div class="col-sm-12 col-md-8 col-md-offset-2">
      <div class="panel b-primary bt-md">
        <div class="panel-content">
          <div class="row">
            <div class="col-xs-6"><h5>History</h5></div>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Member Name</th>
                  <th>Messages</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allHistory as $history)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ ucwords($history->user->name) }}</td>
                  <td>{{ ucwords($history->message) }}</td>
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
