<!-- /.card-header -->
<div class="card-body">
                        <table class="table table-bordered">
                        <thead>                  
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Status Kepegawaian</th>
                            <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td>1</td>
                                <td>Lucky Adhitya</td>
                                <td>1092</td>
                                <td>Aktif</td>
                                <td>Islam</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr> -->
                            @foreach($guru as $d)
                            <tr>
                                <td>{{ ($guru->currentpage()-1) * $guru->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->nip }}</td>
                                <td>{{ $d->status_kepegawaian }}</td>
                                <td>
                                    <a href="{{ route('dataGuru.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" data-uri="{{ route('dataGuru.destroy', $d->id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCModal">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- <tr>
                                <td>1</td>
                                <td>Jakarta Utara 1</td>
                                <td>
                                    <span class="badge badge-primary">032222</span>
                                </td>
                                <td>
                                    SMK Negeri 10 Jakarta
                                </td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr> -->
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {!! $guru->render() !!}
                    </div>