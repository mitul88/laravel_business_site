@extends('admin.layouts.app');

@section('main')
<div class="content container-fluid">
					
	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="page-title">Welcome Admin!</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item active">Dashboard</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Page Header -->

	<div class="row">
		<div class="col-xl-6 d-flex mx-auto">
			<div class="card flex-fill">
				<div class="card-header">
					<h4 class="card-title">Add new staff</h4>
				</div>
				<div class="card-body">

					@if($errors->any())

						<p class="alert alert-danger">{{ $errors->first() }} <button class="close" data-dismiss="alert"> &times; </button> </p>

				  	@endif

					<form action="{{route('staff.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Name</label>
							<div class="col-lg-9">
								<input name="name" type="text" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Email</label>
							<div class="col-lg-9">
								<input name="email" type="text" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Cell</label>
							<div class="col-lg-9">
								<input name="cell" type="text" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Department</label>
							<div class="col-lg-9">
								<select name="department" class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true">
									<option>{{null}}</option>
									<option value="Accounts">Accounts</option>
									<option value="Admin">Admin</option>
									<option value="IT">IT</option>
									<option value="Housekeeper">Housekeeper</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Location</label>
							<div class="col-lg-9">
								<select name="location" class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true">
									<option>{{null}}</option>
									<option value="Mohammadpur">Mohammadpur</option>
									<option value="Lalmatia">Lalmatia</option>
									<option value="Badda">Badda</option>
									<option value="Dhanmondi">Dhanmondi</option>
									<option value="Banani">Banani</option>
									<option value="Gulshan">Gulshan</option>
									<option value="Uttara">Uttara</option>
									<option value="Baridhara">Baridhara</option>
									<option value="Mirupur">Mirupur</option>
									<option value="Azimpur">Azimpur</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Blood Group</label>
							<div class="col-lg-9">
								<select name="bloodgroup" class="select select2-hidden-accessible form-control" tabindex="-1" aria-hidden="true">
									<option>{{null}}</option>
									<option value="A+">A+</option>
									<option value="O+">O+</option>
									<option value="B+">B+</option>
									<option value="AB+">AB+</option>
								</select>	
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Gender</label>
							<div class="col-lg-9">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="gender_male" value="male">
									<label class="form-check-label" for="gender_male">
									Male
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="gender_female" value="female">
									<label class="form-check-label" for="gender_female">
										Female
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Staff photo</label>
							<div class="col-lg-9">
								<input name="photo" type="file" class="form-control">
							</div>
						</div>
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</div>	
@endsection