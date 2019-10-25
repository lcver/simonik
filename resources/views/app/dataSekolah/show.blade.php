@extends('layouts.app')

@section('contentHeader')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Detail Data Sekolah</h1> -->
            <a href="{{route('dataSekolah.index')}}"><h4><i class="fas fa-chevron-left"></i> Kembali</h4></a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Sekolah</a></li>
            <li class="breadcrumb-item active">Detail</li>
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
                        <h3 class="card-title">Edit data Sekolah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Wilayah</label>
                                {{--<!-- <p>{{ $d->kota->nama_kota }}</p> --> --}}
                                <p>{{ $sekolahs->kota->nama_kota }}</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Kode Sekolah</label>
                                {{-- <!-- <p>{{ $d->kode_sekolah }}</p> --> --}}
                                <p>{{ $sekolahs->kode_sekolah }}</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>NPSN Sekolah</label>
                                {{-- <!-- <p>{{ $d->npsn_sekolah }}</p> --> --}}
                                <p>{{ $sekolahs->npsn_sekolah }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Kurikulum</label>
                                {{-- <!-- <p>{{ $d->kurikulum }}</p> --> --}}
                                <p>{{ $sekolahs->kurikulum }}</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                {{-- <!-- <p>{{ $d->nama_sekolah }}</p> --> --}}
                                <p>{{ $sekolahs->nama_sekolah }}</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Kepala Sekolah</label>
                                {{-- <!-- <p>{{ $d->kepala_sekolah }}</p> --> --}}
                                <p>{{ $sekolahs->kepala_sekolah }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <label>Alamat Sekolah</label>
                                {{-- <!-- <p>{{ $d->alamat_sekolah }}</p> --> --}}
                                <p>{{ $sekolahs->alamat_sekolah }}</p>
                            </div>
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
