@extends('layouts.app')

@section('contentHeader')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Kehadiran Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Mapel</a></li>
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


                        </h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <select class="form-control">
                                    <option value="0" checked>-Pilih Kelas</option>
                                    <option value="0">X</option>
                                    <option value="0">XI</option>
                                    <option value="0">XII</option>
                                </select>

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Hadir</th>
                                    <th>Sakit</th>
                                    <th>Izin</th>
                                    <th>Dispen</th>
                                    <th>Alpa</th>
                                    <th>Bolos</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <form action="" method="">
                                <tbody>
                                    <td>1</td>
                                    <td>10101010</td>
                                    <td>Syamil</td>
                                    <td><input type="radio" name="absen" value="hadir" class="text-primary" checked></td>
                                    <td><input type="radio" name="absen" value="sakit"></td>
                                    <td><input type="radio" name="absen" value="izin"></td>
                                    <td><input type="radio" name="absen" value="dispen"></td>
                                    <td><input type="radio" name="absen" value="alpa"></td>
                                    <td><input type="radio" name="absen" value="bolos"></td>
                                    <td><textarea name="keterangan" id="keterangan" cols="5" rows="1" class="form-control"></textarea></td>
                                </tbody>
                                <tr>
                                    <td colspan="10">

                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection