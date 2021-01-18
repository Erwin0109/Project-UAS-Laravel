@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row mt-5">
		<div class="col-md-8 mx-auto">
			<div class="card card-default">
				<div class="card-header bg-info">
					Ganti Password !!
				</div>
				<div class="card-body">
					User : {{$user->username}}
					<form action="{{url('setting')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Current Password</label>
							<input type="password" name="current" class="form-control">
						</div>
						<hr>
						<div class="form-group">
							<label for="" class="control-label">New Password</label>
							<input type="password" name="new" class="form-control">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Confirm Password</label>
							<input type="password" name="confirm" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-info"><i class="fa fa-save"></i> Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
