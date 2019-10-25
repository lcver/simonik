@extends('layouts.app')

@section('contentHeader')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark"><a href="/superAdmin/dataGuru/"><i class="fas fa-chevron-left"></i></a> Tambah Data Guru</h1> -->
            <a href="{{ route('dataGuru.index') }}"><h4><i class="fas fa-chevron-left"></i> Kembali</h4></a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Guru</a></li>
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
                        <h3 class="card-title">Tambah data Guru</h3>
                        <div class="card-tools">
                            <button class="btn btn-tool" type="button" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                    <form role="form" method="POST" action="{{ route('dataGuru.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control" placeholder="nama" name="nama">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">NIP</label>
                                            <input type="text" class="form-control" placeholder="nip" name="nip">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Status Kepegawaian</label>
                                            <input type="text" class="form-control" placeholder="Status Kepegawaian" name="status_kepegawaian">
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
    </section>
@endsection
