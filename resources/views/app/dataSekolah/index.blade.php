@extends('layouts.app')

@section('contentHeader')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Sekolah</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Sekolah</a></li>
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
                            <a href="{{ route('dataSekolah.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
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
                    <div id="presultData">
                        @include('app.dataSekolah.presult')
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
    </div><!-- /.container-fluid -->
    </section>

    @if(session('alertDestroy'))
        <script>
            $(document).Toasts('create', {
                title: 'Info',
                autohide: true,
                delay: 2000,
                class: 'bg-success',
                position: 'bottomRight',
                body: 'Berhasil Menghapus Data Sekolah <b>{{ session("alertDestroy") }}</b>'
            })
        </script>
    @elseif(session('alertCreate'))
        <script>
            $(document).Toasts('create', {
                title: 'Info',
                autohide: true,
                delay: 2000,
                class: 'bg-success',
                position: 'bottomRight',
                body: 'Berhasil Menambah Data Sekolah <b>{{ session("alertCreate") }}</b>'
            })
        </script>
    @elseif(session('alertUpdate'))
        <script>
            $(document).Toasts('create', {
                title: 'Info',
                autohide: true,
                delay: 2000,
                class: 'bg-success',
                position: 'bottomRight',
                body: 'Berhasil Memperbarui Data Sekolah <b>{{ session("alertUpdate") }}</b>'
            })
        </script>
    @endif
@endsection
