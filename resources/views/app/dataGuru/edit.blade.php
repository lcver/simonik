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
                        <h3 class="card-title">Edit data Guru</h3>
                        <div class="card-tools">
                            <button class="btn btn-tool" type="button" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post" action="{{ route('dataGuru.update', $guru->id) }}">
                        @csrf
                            @method('PATCH')
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" placeholder="nama" name="nama" value="{{$guru->nama}}">
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">NIP</label>
                                        <input type="text" class="form-control" placeholder="nip" name="nip" value="{{$guru->nip}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Status Kepegawaian</label>
                                        <input type="text" class="form-control" placeholder="Status Kepegawaian" name="status_kepegawaian" value="{{$guru->status_kepegawaian}}">
                                    </div>
                                </div>
                                <!-- <div class="col-md-3 hidden">
                                    <label for="">Id</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div> -->
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" value="{{ $guru->nama }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">NIP</label>
                                        <input type="text" class="form-control" placeholder="NIP">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Jenis PTK</label>
                                        <input type="text" class="form-control" placeholder="Jenis PTK">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" class="form-control" placeholder="Status">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Agama</label>
                                        <select name="" id="" placeholder="Agama" class="form-control">
                                            <option value="Islam">Islam</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Katholik">Katholik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Alamat"></textarea>
                                    </div>
                                </div> -->
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
