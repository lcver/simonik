    <div class="card-body">
        <table class="table table-bordered">
        <thead>                  
            <tr>
            <th style="width: 10px">#</th>
            <th>Nama Pengawas</th>
            <th>Email</th>
            <th>Daftar Sekolah Binaan</th>
            <th style="width: 150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataPengawas as $res)
            <tr>
                <td>{{ ($dataPengawas->currentpage()-1) * $dataPengawas->perpage() + $loop->index + 1 }}</td>
                <td>{{ $res->name }}</td>
                <td>{{ $res->email }}</td>
                <td>
                    @php
                    $d = explode(', ', $res->id_data_sekolah);
                    $e = "";
                    @endphp

                    @foreach($sekolahs as $rs)
                        @if(in_array($rs->id,$d))
                            @php
                            $e .= "<span class='badge badge-primary'>".$rs->nama_sekolah."</span> ";
                            @endphp
                        @endif
                    @endforeach
                    
                    @if(strlen($e) > 200)
                        {!! substr($e,0,200) !!}
                        ....
                        </span>
                    @else
                        {!! $e !!}
                    @endif
                </td>
                <td nowrap>
                    <a href="{{ route('dataPengawas.show', $res->id) }}" class="btn btn-success btn-sm">Detail</a>

                    <a href="{{ route('dataPengawas.edit', $res->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" data-uri="{{ route('dataPengawas.destroy', $res->id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCModal">Hapus</a>

                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix float-right">
        {!! $dataPengawas->render() !!}
    </div>