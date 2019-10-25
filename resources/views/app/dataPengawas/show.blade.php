@extends('layouts.app')

@section('contentHeader')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Data Pengawas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Pengawas</a></li>
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
                        <a href="{{ route('dataPengawas.index') }}" class="btn btn-light text-info btn-sm">Kembali</a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Nama Pengawas</label>
                                <p>{{ $d->name }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Email</label>
                                <p>{{ $d->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Daftar Sekolah Binaan</label>
                                <ul>
                                    @php
                                        $de = explode(', ', $d->id_data_sekolah);
                                    @endphp
                                    @foreach($sekolahs as $res)

                                        @if(in_array($res->id,$de))
                                            <li>
                                                <div>{{ $res->nama_sekolah }}</div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        @php
                            $df = $d->created_at;
                            $t = $df->format('Y-m-d');
                        @endphp
                        @include('_____FUNCTION.tanggal-indo')
                        <div class="col-12">
                           <i>Bergabung pada tanggal
                            <span class="color-danger">{{ tgl_indo($t) }}</span>
                           </i>
                        </div>
                    </div>
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
        $('#btnChangePw').click(function(e){
            e.preventDefault()
            $('#pwWrapper').show("slow")
            $(this).hide()
            $('#btnClosePw').show()
        })
        $('#btnClosePw').click(function(e){
            e.preventDefault()
            $('#pwWrapper').slideUp("slow")
            $(this).hide()
            $('#btnChangePw').show()
            $('#passwordInput').val('')
        })

    </script>
@endsection
