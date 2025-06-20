@extends('template')
@section('content')
<div class="container mt-4">
 <h2>Tambah Data Nilai</h2>

 <div class="card">
 <div class="card-header">
 Form Tambah Data
 </div>
 <div class="card-body">
 <form method="post" action="{{ route('nilai.store') }}">
 @csrf

 <div class="form-group row mb-3">
 <label for="normorinduksiswa" class="col-sm-2
col-form-label">NRP</label>
 <div class="col-sm-10">
 <input type="text" class="form-control
@error('normorinduksiswa') is-invalid @enderror" id="normorinduksiswa"
name="normorinduksiswa" value="{{ old('normorinduksiswa') }}"
maxlength="5">
 @error('normorinduksiswa')
 <div class="invalid-feedback">{{ $message
}}</div>
 @enderror
 </div>
 </div>

 <div class="form-group row mb-3">
 <label for="nilaiangka" class="col-sm-2
col-form-label">Nilai Angka</label>
 <div class="col-sm-10">
 <input type="number" class="form-control
@error('nilaiangka') is-invalid @enderror" id="nilaiangka"
name="nilaiangka" value="{{ old('nilaiangka') }}">
 @error('nilaiangka')
 <div class="invalid-feedback">{{ $message
}}</div>
 @enderror
 </div>
 </div>

 <div class="form-group row mb-3">
 <label for="sks" class="col-sm-2
col-form-label">SKS</label>
 <div class="col-sm-10">
 <input type="number" class="form-control
@error('sks') is-invalid @enderror" id="sks" name="sks" value="{{
old('sks') }}">
 @error('sks')
 <div class="invalid-feedback">{{ $message
}}</div>
 @enderror
 </div>
 </div>

 <div class="form-group row">
 <div class="col-sm-10 offset-sm-2">
 <button type="submit" class="btn
btn-primary">Simpan</button>
 <a href="{{ route('nilai.index') }}" class="btn
btn-secondary">Kembali</a>
 </div>
 </div>
 </form>
 </div>
 </div>
</div>
@endsection
