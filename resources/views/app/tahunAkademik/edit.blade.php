@extends('layouts.app')

@section('contentHeader')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <a href="/superAdmin/dataSiswa/"><h1 class="m-0 text-dark"><i class="fas fa-chevron-left"></i> Tambah Data Siswa</h1></a> -->
                <a href="{{route ('tahunAkademik.index') }}">
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

                        <form action="{{ route('tahunAkademik.update', $data->id) }}" method="POST">
                            @csrf @method('PUT')
                            <input type="hidden" name="id" class="form-control" value="{{ $data->id }}">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nama_tahun_akademik">Tahun Akademik</label>
                                        <input type="text" name="nama_tahun_akademik" class="form-control" autocomplete="off" value="{{ $data->nama_tahun_akademik }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" autocomplete="off" value="{{ $data->keterangan }}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
