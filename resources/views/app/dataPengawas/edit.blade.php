@extends('layouts.app')

@section('contentHeader')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark">Edit Data Pengawas</h1> -->
                <a href="{{ route('dataMapel.index') }}">
                    <h4><i class="fas fa-chevron-left"></i> Kembali</h4>
                </a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Pengawas</a></li>
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
                        <!-- <a href="{{ route('dataPengawas.index') }}" class="btn btn-light text-info btn-sm">Kembali</a> -->
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('dataPengawas.update', $d->id) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Mengawas Sekolah</label>
                                        <select class="select2" name="id_data_sekolah[]" multiple="multiple" data-placeholder="Mengawas Sekolah" style="width: 100%;">
                                            <option value="">&mdash;</option>
                                            @php
                                            $de = explode(', ', $d->id_data_sekolah);
                                            @endphp
                                            @foreach($sekolahs as $res)

                                            @if(in_array($res->id,$de))
                                            <option value="{{ $res->id }}" selected>{{ $res->nama_sekolah }}</option>
                                            @else
                                            <option value="{{ $res->id }}">{{ $res->nama_sekolah }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Nama Pengawas</label>
                                        <input type="text" class="form-control" placeholder="Nama Pengawas" name="name" required value="{{ $d->name }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="Email" name="email" required value="{{ $d->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <button id="btnChangePw" class="btn btn-warning btn-sm">Ganti Password</button>
                                    <button id="btnClosePw" class="btn btn-danger btn-sm">Batal</button>
                                    <div id="pwWrapper" class="form-group">
                                        <label>Password</label>
                                        <input id="passwordInput" type="text" class="form-control" placeholder="Password" name="password">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" required>
                                <label class="form-check-label">Konfirmasi data!</label>
                            </div>
                            <br>
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
<script>
    $('#btnClosePw').hide()
    $('#pwWrapper').hide()
    $('#btnChangePw').click(function(e) {
        e.preventDefault()
        $('#pwWrapper').show("slow")
        $(this).hide()
        $('#btnClosePw').show()
    })
    $('#btnClosePw').click(function(e) {
        e.preventDefault()
        $('#pwWrapper').slideUp("slow")
        $(this).hide()
        $('#btnChangePw').show()
        $('#passwordInput').val('')
    })
</script>
@endsection