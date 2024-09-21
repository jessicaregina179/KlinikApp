<div>
    @extends('layouts.app', ['title' => 'Data Pasien'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Pasien</div>
                    <div class="card-body">
                        <h3>Data pasien</h3>
                        <div class="row mb-3 mt-3">
                        <div class="col-md-6">
                            <a href="/pasien/create" class="btn btn-primary btn-sm">Tambah Pasien</a>
                        </div>
                    </div>
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><center>NO</center></th>
                                    <th><center>No Pasien</center></th>
                                    <th><center>Nama</center></th>
                                    <th><center>Jenis Kelamin</center></th>
                                    <th><center>Umur</center></th>
                                    <th><center>Foto</center></th>
                                    <th><center>Alamat</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasien as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no_pasien }}</td>
                                        <td>
                                            {{ $item->nama }}
                                        </td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->umur }}</td>
                                        {{$foto=$item->foto ? $item->foto : '0.png'}}
                                        <td><img src="/storage/images{{ $item->foto }}" alt="foto" height="30 px"></td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>
                                            <a href="?m=resources/views/edit&id='.$r['id'].'">Edit</a> 
                                            <a href="?m=resources/views/delete&id='.$r['id'].'"  onclick="return confirm(\'Yakin pasien akan dihapus?\')">Hapus</a>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $pasien->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
