@extends('layouts.app')

@section('contentHeader')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Dokumen</h1>

            <!-- table upload -->
					
			<form action="{{ url('/guru/upload/proses') }}" method="post" enctype="multipart/form-data" class="bg-white">
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
			    	<td colspan="2"><input type="submit" value="upload Dokumen" class="btn btn-primary"></td>
			    </tr>
			  </tbody>
			</table>
			</form>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Guru</a></li>
            <li class="breadcrumb-item active">Index</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

