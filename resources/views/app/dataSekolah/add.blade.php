@extends('layouts.app')

@section('contentHeader')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Tambah Data Sekolah</h1> -->
            <a href="{{ route('dataSekolah.index') }}"><h4><i class="fas fa-chevron-left"></i> Kembali</h4></a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Sekolah</a></li>
            <li class="breadcrumb-item active">Tambah</li>
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
                        <!-- <a href="{{ route('dataSekolah.index') }}" class="btn btn-light text-info btn-sm">Kembali</a> -->
                        <h3 class="card-title">Tambah data Sekolah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('dataSekolah.store') }}">
                        @csrf
                        <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Wilayah</label>
                                    <select class="form-control select2" name="id_kota" required>
                                        <option value="">&mdash;</option>
                                        @foreach($kotas as $res)
                                        <option value="{{ $res->id }}">{{ $res->nama_kota }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Kode Sekolah</label>
                                    <input type="text" class="form-control" placeholder="Kode Sekolah" name="kode_sekolah" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>NPSN Sekolah</label>
                                    <input type="text" class="form-control" placeholder="NPSN Sekolah" name="npsn_sekolah" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Kurikulum</label>
                                    <input type="text" class="form-control" placeholder="Kurikulum" name="kurikulum" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nama Sekolah</label>
                                    <input type="text" class="form-control" placeholder="Nama Sekolah" name="nama_sekolah" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Kepala Sekolah</label>
                                    <input type="text" class="form-control" placeholder="Kepala Sekolah" name="kepala_sekolah" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    <label>Alamat Sekolah</label>
                                    <textarea name="alamat_sekolah" class="form-control" required placeholder="Alamat Sekolah"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" required>
                                <label class="form-check-label">Konfirmasi data!</label>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
    </div><!-- /.container-fluid -->
    </section>
@endsection
