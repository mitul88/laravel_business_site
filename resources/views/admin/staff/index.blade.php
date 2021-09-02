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

	<!-- data table -->

	<div class="row">
		<div class="col-sm-12 col-lg-10 mx-auto">

			<a href="" class="btn btn-sm btn-dark px-3 mb-2 font-weight-bold">ADD NEW STAFF</a>
			<a href="" class="btn btn-sm btn-outline-danger px-3 mb-2 font-weight-bold">TRASH LIST<i class="fas fa-recycle ml-2"></i></a>

			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Staff List</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table mb-0">
							<thead>
								<tr>
									<th>SL</th>
									<th>Name</th>
									<th>Date of Join</th>
									<th>Department</th>
									<th>Blood</th>
									<th>Photo</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>John</td>
									<td>Doe</td>
									<td>john@example.com</td>
									<td>john@example.com</td>
									<td><img src="" alt="" style="width:50px;height:50px"></td>
									<td>
										<a href="" class="btn btn-success"><i class="far fa-eye"></i></a>
										<a href="" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
										<a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
					@include('admin.layouts.pagination')
				</div>
			</div>
		</div>
	</div>
	
</div>	
@endsection