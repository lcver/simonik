    <div class="card-body">
        <table class="table table-bordered">
        <thead>                  
            <tr>
            <th style="width: 10px">#</th>
            <th>Wilayah</th>
            <th>Kode Sekolah</th>
            <th>Nama Sekolah</th>
            <th style="width: 150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sekolahs as $res)
            <tr>
                <td>{{ ($sekolahs->currentpage()-1) * $sekolahs->perpage() + $loop->index + 1 }}</td>
                <td>{{ $res->kota->nama_kota }}</td>
                <td>
                    <span class="badge badge-primary">{{ $res->kode_sekolah }}</span>
                </td>
                <td>
                    {{ $res->nama_sekolah }}
                </td>
                <td nowrap>
                    <a href="{{ route('dataSekolah.show', $res->id_sekolah) }}" class="btn btn-success btn-sm">Detail</a>
                    <a href="{{ route('dataSekolah.edit', $res->id_sekolah) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('dataSekolah.destroy', $res->id_sekolah) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCModal">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix float-right">
        {!! $sekolahs->render() !!}
    </div>