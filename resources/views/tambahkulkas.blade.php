@extends('template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold"><i class="fas fa-snowflake mr-2"></i>Tambah Kulkas Baru</h2>
        <a href="/kulkas" class="btn btn-info rounded-pill shadow-sm">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/kulkas/storekulkas" method="post">
                {{ csrf_field() }}
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="merkkulkas">
                        <i class="fas fa-tag mr-2"></i>Merk Kulkas
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control"
                            type="text"
                            id="merkkulkas"
                            placeholder="Masukkan Merk Kulkas"
                            name="merkkulkas" required="required">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="harga">
                        <i class="fas fa-money-bill-wave mr-2"></i>Harga
                    </label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input class="form-control"
                                type="number"
                                id="harga"
                                placeholder="Masukkan Harga"
                                min="0"
                                max="999999999"
                                name="harga" required="required">
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="tersedia">
                        <i class="fas fa-check-circle mr-2"></i>Ketersediaan
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" id="tersedia" name="tersedia" required="required">
                            <option value="" disabled selected>-- Pilih Ketersediaan --</option>
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="berat">
                        <i class="fas fa-weight mr-2"></i>Berat
                    </label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input class="form-control"
                                type="number"
                                step="0.1"
                                id="berat"
                                placeholder="Masukkan Berat Kulkas"
                                name="berat" required="required">
                            <div class="input-group-append">
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success rounded-pill px-5 shadow-sm">
                        <i class="fas fa-save mr-2"></i>Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
