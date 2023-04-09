@extends('admin.master.admin_master')
@section('content')
@if (Session::has('message'))
    <div class="alert alert-success" >{{ Session::get('message') }}</div>    
@elseif (Session::has('error'))
    <div class="alert alert-danger" >{{ Session::get('error') }}</div>
@endif

<div class="container-fluid background">
    <div class="row">
        <div class="col-md-10">
                <form action="{{route('admin.change_password')}}" method="POST" class="form-horizontal" id="changePasswordForm" onsubmit="return(check())">
					{{ csrf_field() }}

                    <legend>Change Password</legend>
                    <div class="form-group">
					    <label for="current_password" class="col-sm-2 col-lg-12 control-label">Current password</label>
					    <div class="col-sm-5 col-lg-12">
					      <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password" required>
                            @error('current_password')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					    </div>
                    </div>
                    <div class="form-group">
                    <label for="new_password" class="col-sm-2 col-lg-12 control-label">New password</label>
                    <div class="col-sm-5 col-lg-12">
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" required>
                        @error('new_password')
                            <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="confirm_password" class="col-sm-2 col-lg-12 control-label">Confirm Password</label>
                    <div class="col-sm-5 col-lg-12">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>                    
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">					    	
                        <button type="submit" class="btn btn-primary"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes </button> 
                    </div>
                    </div>

				</form>

        </div>
    </div>
</div>
<script>
  function check()
  {
      a=changePasswordForm.new_password.value;
      b=changePasswordForm.confirm_password.value;
      if(a!=b)
      {
          alert("Passwords does not match");
          return false;
      }
      return true;
  }
</script>
@endsection	
