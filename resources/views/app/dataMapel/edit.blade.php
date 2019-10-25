@extends('layouts.app')

@section('contentHeader')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <a href="/superAdmin/dataSiswa/"><h1 class="m-0 text-dark"><i class="fas fa-chevron-left"></i> Tambah Data Siswa</h1></a> -->
                <a href="{{ route('dataMapel.index') }}">
                    <h4><i class="fas fa-chevron-left"></i> Kembali</h4>
                </a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Mapel</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit data Mata Pelajaran</h3>
                        <div class="card-tools">
                            <button class="btn btn-tool" type="button" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('dataMapel.update', $data->id) }}" method="POST">
                            <p><input class="form-control" name="id_mapel" type="hidden" value="{{ $data->id }}"></p>
                            @csrf @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Kode Mapel</label>
                                        <input type="text" name="kode_mapel" value="{{ $data->kode_mapel }}" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama Mata Pelajaran</label>
                                        <input type="text" name="nama_mapel" class="form-control" value="{{ $data->nama_mapel }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Jam Pelajaran</label>
                                            <input type="text" name="jampelajaran" class="form-control" value="{{ $data->jampelajaran }}" autocomplete="off">
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
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
