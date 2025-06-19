@extends('template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold"><i class="fas fa-snowflake mr-2"></i>Data Kulkas</h2>
        <a href="/kulkas/tambahkulkas" class="btn btn-primary rounded-pill shadow-sm">
            <i class="fas fa-plus-circle mr-2"></i>Tambah Kulkas Baru
        </a>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="/kulkas/carikulkas" method="GET" class="mb-0">
                <div class="input-group">
                    <input type="text" class="form-control" name="cari" placeholder="Cari berdasarkan merk kulkas...">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-info">
                            <i class="fas fa-search mr-1"></i> Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover bg-white shadow-sm rounded">
            <thead class="bg-info text-white">
                <tr>
                    <th>Merk Kulkas</th>
                    <th>Tersedia</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kulkas as $p)
                <tr>
                    <td>{{ $p->merkkulkas }}</td>
                    <td>
                        @if($p->tersedia == 1)
                            <span class="badge badge-success">Tersedia</span>
                        @else
                            <span class="badge badge-danger">Tidak Tersedia</span>
                        @endif
                    </td>
                    <td>Rp {{ number_format($p->hargakulkas, 0, ',', '.') }}</td>
                    <td>{{ $p->berat }} kg</td>
                    <td class="text-center">
                        <a href="/kulkas/editkulkas/{{ $p->ID }}" class="btn btn-sm btn-warning rounded-pill">
                            <i class="fas fa-edit mr-1"></i> Edit
                        </a>
                        <a href="/kulkas/hapuskulkas/{{ $p->ID }}" class="btn btn-sm btn-danger rounded-pill" onclick="return confirm('Yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash mr-1"></i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="d-flex justify-content-center mt-4">
        {{$kulkas->links()}}
    </div>
@endsection
