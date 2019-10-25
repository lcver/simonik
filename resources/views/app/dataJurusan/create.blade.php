@extends('layouts.app')

@section('contentHeader')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark"><a href="/superAdmin/dataGuru/"><i class="fas fa-chevron-left"></i></a> Tambah Data Guru</h1> -->
            <a href="/superAdmin/dataGuru"><h4><i class="fas fa-chevron-left"></i> Kembali</h4></a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Jurusan</a></li>
            <li class="breadcrumb-item active">Create</li>
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
                        <h3 class="card-title">Tambah Data Jurusan</h3>
                        <div class="card-tools">
                            <button class="btn btn-tool" type="button" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-xl-6">
                                <label>Pilih Jurusan</label>
                                <select class="form-control" name="id_kota" required>
                                    <option value="">&mdash;</option>
                                    @foreach ($jurusans as $jurusan)
                                        <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-xl-6">
                                <label>Pilih Sekolah</label>
                                <select class="form-control" name="id_kota" required>
                                    <option value="">&mdash;</option>
                                    @foreach ($sekolahs as $sekolah)
                                        <option value="{{$sekolah->id}}">{{$sekolah->nama_sekolah}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
    </section>
@endsection
