@extends('layouts.app_modern', ['title' => 'Data Poli'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Poli</div>
                    <div class="card-body">
                        <div class="row mb-3 mt-3">
                            <div class="col-md-6 h3">
                                Data poli
                            </div>
                        <div class="col-md-6">
                            <a href="/poli/create" class="btn btn-primary btn-sm float-end">Tambah Poli</a>
                        </div>
                    </div>
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><center>No Poli</center></th>
                                    <th><center>Nama</center></th>
                                    <th><center>Biaya</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poli as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no_poli }}</td>
                                        <td>
                                            {{ $item->nama }}
                                        </td>
                                        <td>{{ Number::Currency($item->biaya, 'Rp. ') }}</td>
                                        <td>
                                            <a href="/poli/{{ $item->id }}/edit" class="btn btn-warning btn-sm ml-2">
                                                Edit
                                            </a>
                                            <form action="/poli/{{ $item->id }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm ml-2"
                                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                @foreach ($poli as $item)
@endforeach
                            </tbody>
                        </table>
                        {!! $poli->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
