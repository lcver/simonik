@extends('layouts.app')

@section('contentHeader')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Data Dokumen</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Data Dokumen</a></li>
					<li class="breadcrumb-item active">Index</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
@endsection

@section('mainContent')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<a href="{{ route('dataPengawas.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
						</h3>
						<div class="card-tools">
							<div class="input-group input-group-sm" style="width: 200px;">
								<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

								<div class="input-group-append">
									<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<form action="{{ route('dokumenGuruPost') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}

							<table class="table">
								<thead class="thead-dark">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Dokumen</th>
										<th scope="col">Pilih</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>RPP</td>
										<td><input type="file" name="rpp"></td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Silabus</td>
										<td><input type="file" name="silabus"></td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Prota</td>
										<td><input type="file" name="prota"></td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Prosem</td>
										<td><input type="file" name="prosem"></td>
									</tr>
									<tr>
										<th></th>
										<td><input type="submit" value="upload Dokumen" class="btn btn-primary"></td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
	</div><!-- /.container-fluid -->
</section>
@endsection