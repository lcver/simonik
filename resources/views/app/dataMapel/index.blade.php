@extends('layouts.app')

@section('contentHeader')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Mata Pelajaran</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Mapel</a></li>
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
                            <a href="{{ url('admin/dataMapel/create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                            <a href="{{ url('') }}" class="btn btn-success btn-sm">Tambah data dengan Excel</a>
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
                        <table class="table table-bordered">
                        <thead>
                            <tr>

                            <th>Kode Mapel</th>
                            <th>Nama Mapel</th>
                            <th>Jam Pelajaran</th>
                            <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($data_mapel as $p)

                            <tr>

                                <td>{{ $p->kode_mapel }}</td>
                                <td>{{ $p->nama_mapel }}</td>
                                <td>{{ $p->jampelajaran }}</td>

                                <td>
                                    <a href="{{ route('dataMapel.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('dataMapel.destroy', $p->id) }}" method="POST">
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        @csrf
                                        @method('DELETE')

                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
    </section>
@endsection
