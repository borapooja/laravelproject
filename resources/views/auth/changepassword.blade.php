@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Change password</div>
        <div class="panel-body">
          @if (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif
          <form class="form-horizontal" method="POST" action="/changePassword">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
              <label for="current-password" class="col-md-4 control-label">Current Password :</label>
              <div class="col-md-6">
                <input id="current-password" type="password" class="form-control" name="current-password" placeholder="Current Password" required>
                @if ($errors->has('current-password'))
                <span class="help-block">
                  <strong>{{ $errors->first('current-password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
              <label for="new-password" class="col-md-4 control-label">New Password :</label>
              <div class="col-md-6">
                <input id="new-password" type="password" class="form-control" name="new-password" placeholder="Enter New Password" required>
                @if ($errors->has('new-password'))
                <span class="help-block">
                  <strong>{{ $errors->first('new-password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="new-password-confirm" class="col-md-4 control-label">Confirm Password :</label>
              <div class="col-md-6">
                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" placeholder="Confirm Password" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success">
                  Update
                </button>
                <a href="/home">
                  <button type="button" class="btn btn-default">
                    Cancel
                  </button>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
