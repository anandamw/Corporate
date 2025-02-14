@extends('layouts.template')



@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-xs mb-4">


                <div class="card-body px-0 py-0">
                    <div class=" p-5">
                        <form action="/surat-masuk/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <!-- No Surat -->
                                <div class="col-md-6">
                                    <label for="no_surat" class="form-label">No Surat</label>
                                    <input type="text" class="form-control" id="no_surat" name="no_surat"
                                        value="{{ old('no_surat') }}" placeholder="Masukkan No Surat" required>
                                    @error('no_surat')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Pengirim -->
                                <div class="col-md-6">
                                    <label for="pengirim" class="form-label">Pengirim</label>
                                    <input type="text" class="form-control" id="pengirim" name="pengirim"
                                        value="{{ old('pengirim') }}" placeholder="Masukkan Nama Pengirim" required>
                                    @error('pengirim')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Perihal -->
                                <div class="col-12">
                                    <label for="perihal" class="form-label">Perihal</label>
                                    <input type="text" class="form-control" id="perihal" name="perihal"
                                        value="{{ old('perihal') }}" placeholder="Masukkan Perihal Surat" required>
                                    @error('perihal')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tanggal Masuk -->
                                <div class="col-md-6">
                                    <label for="tgl_masuk" class="form-label">Tanggal Masuk Surat</label>
                                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                                        value="{{ old('tgl_masuk') }}" required>
                                    @error('tgl_masuk')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tanggal Batas Akhir -->
                                <div class="col-md-6">
                                    <label for="tgl_keluar" class="form-label">Tanggal Batas Akhir</label>
                                    <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar"
                                        value="{{ old('tgl_keluar') }}" placeholder="Masukkan Tanggal Batas Akhir">
                                    @error('tgl_keluar')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Pengelola -->
                                <div class="col-12">
                                    <label for="user_id" class="form-label">Pengelola</label>
                                    <select name="user_id" class="form-select">
                                        <option selected disabled>Pilih Pengelola</option>
                                        @foreach ($users as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('user_id') == $item->id ? 'selected' : '' }}>
                                                {{ $item->role }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status">
                                        <option value="verifikasi" {{ old('status') == 'verifikasi' ? 'selected' : '' }}>
                                            Verifikasi</option>
                                        <option value="setuju" {{ old('status') == 'setuju' ? 'selected' : '' }}>Setuju
                                        </option>
                                        <option value="ditolak" {{ old('status') == 'ditolak' ? 'selected' : '' }}>Ditolak
                                        </option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- File Surat -->
                                <div class="col-md-6">
                                    <label for="file_surat" class="form-label">File Surat</label>
                                    <input type="file" class="form-control" id="file_surat" name="file_surat" required>
                                    @error('file_surat')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tombol Submit -->
                                <div class="col-12 text-start mt-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/surat-masuk" class="btn btn-secondary">Batal</a>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
