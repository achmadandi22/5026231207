@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Data Nilai</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('nilai.tambah') }}" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>NRP</th>
                        <th>Nilai Angka</th>
                        <th>SKS</th>
                        <th>Nilai Huruf</th>
                        <th>Bobot</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nilai as $n)
                    <tr>
                        <td>{{ $n->id }}</td>
                        <td>{{ $n->normorindukmahasiswa }}</td>
                        <td>{{ $n->nilaiangka }}</td>
                        <td>{{ $n->sks }}</td>
                        <td>
                            @php
                                $nilaiHuruf = '';
                                if ($n->nilaiangka <= 40) {
                                    $nilaiHuruf = 'D';
                                } elseif ($n->nilaiangka <= 60) {
                                    $nilaiHuruf = 'C';
                                } elseif ($n->nilaiangka <= 80) {
                                    $nilaiHuruf = 'B';
                                } else {
                                    $nilaiHuruf = 'A';
                                }
                            @endphp
                            {{ $nilaiHuruf }}
                            <small>( * Lihat konversi dibawah )</small>
                        </td>
                        <td>{{ $n->nilaiangka * $n->sks }}</td>
                        <td>
                            <a href="{{ route('nilai.hapus', $n->id)
}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda
yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h5>Konversi dari nilai Angka ke Huruf</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nilai Angka</th>
                        <th>Nilai Huruf</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><= 40</td>
                        <td>D</td>
                    </tr>
                    <tr>
                        <td>41 <= NA <= 60</td>
                        <td>C</td>
                    </tr>
                    <tr>
                        <td>61 <= NA <= 80</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>>= 81</td>
                        <td>A</td>
                     </tr>
                </tbody>
            </table>
        </div>
     </div>
</div>
@endsection



