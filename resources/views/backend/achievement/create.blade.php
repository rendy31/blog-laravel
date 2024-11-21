@extends('layouts.app')
@section('content')
    <div class="pcoded-content">
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Tambah Achievement</h5>
                                        {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                                    </div>
                                    <div class="card-block">
                                        
                                        <form action="{{ route('achievement.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group @error('nim') has-danger @enderror row">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                        class="form-control form-control-sm @error('nim') form-control-danger @enderror"
                                                        id="colFormLabelSm" name="nim" value="{{ old('nim') }}"
                                                        required>
                                                    @error('nim')
                                                        <span class="col-form-label">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group @error('nama') has-danger @enderror row">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                        class="form-control form-control-sm @error('nama') form-control-danger @enderror"
                                                        id="colFormLabelSm" name="nama" value="{{ old('nama') }}"
                                                        required>
                                                    @error('nama')
                                                        <span class="col-form-label">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group @error('penyelenggara') has-danger @enderror row">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-2 col-form-label col-form-label-sm">Penyelenggara</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                        class="form-control form-control-sm @error('penyelenggara') form-control-danger @enderror"
                                                        id="colFormLabelSm" name="penyelenggara"
                                                        value="{{ old('penyelenggara') }}" required>
                                                    @error('penyelenggara')
                                                        <span class="col-form-label">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group @error('event') has-danger @enderror row">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-2 col-form-label col-form-label-sm">Nama Event</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control @error('event') form-control-danger @enderror" name="event" rows="3"
                                                        required>{{ old('event') }}</textarea>
                                                    @error('event')
                                                        <span class="col-form-label">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group @error('tempat') has-danger @enderror row">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-2 col-form-label col-form-label-sm">Tempat</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control @error('tempat') form-control-danger @enderror" name="tempat" rows="3" required>{{ old('tempat') }}</textarea>
                                                    @error('tempat')
                                                        <span class="col-form-label">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                                <div class="form-group col-sm-4">
                                                    {{-- TANGGAL MULAI --}}
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <input type="date" class="form-control" name="tglMulai" value="{{old('tglMulai')}}">
                                                        </div>
                                                    </div>
                                                    {{-- AKHIR TANGGAL MULAI --}}
                                                </div>
                                                <div class="col-sm-1 ">
                                                    sampai 
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    {{-- TANGGAL MULAI --}}
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <input type="date" class="form-control" name="tglAkhir" value="{{old('tglAkhir')}}">
                                                        </div>
                                                    </div>
                                                    {{-- AKHIR TANGGAL MULAI --}}
                                                </div>


                                            </div>
                                            <div class="form-group @error('namaPenghargaan') has-danger @enderror row">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-2 col-form-label col-form-label-sm">Nama Penghargaan</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                        class="form-control form-control-sm @error('namaPenghargaan') form-control-danger @enderror"
                                                        id="colFormLabelSm" name="namaPenghargaan"
                                                        value="{{ old('namaPenghargaan') }}" required>
                                                    @error('namaPenghargaan')
                                                        <span class="col-form-label">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group @error('peringkat') has-danger @enderror row">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-2 col-form-label col-form-label-sm">Peringkat</label>
                                                <div class="col-sm-4">
                                                    <select name="peringkat" class="form-control">
                                                        <option selected>:. Pilih Peringkat .:</option>
                                                        <option value="Juara 1">Juara 1</option>
                                                        <option value="Juara 2">Juara 2</option>
                                                        <option value="Juara 3">Juara 3</option>
                                                        <option value="Juara Harapan">Juara Harapan</option>
                                                        <option value="Juara Harapan 1">Juara Harapan 1</option>
                                                        <option value="Juara Harapan 2">Juara Harapan 2</option>
                                                        <option value="Juara Harapan 3">Juara Harapan 3</option>
                                                    </select>
                                                    @error('peringkat')
                                                        <span class="col-form-label">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group @error('level') has-danger @enderror row">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-2 col-form-label col-form-label-sm">Level</label>
                                                <div class="col-sm-4">
                                                    <select name="level" class="form-control">
                                                        <option selected>:. Pilih Level Prestasi .:</option>
                                                        <option value="regional">Regional</option>
                                                        <option value="provinsi">Provinsi</option>
                                                        <option value="nasional">Nasional</option>
                                                        <option value="internasional">Internasional</option>
                                                    </select>
                                                    @error('level')
                                                        <span class="col-form-label">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group @error('file') has-danger @enderror row">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-2 col-form-label col-form-label-sm">File</label>
                                                <div class="col-sm-10">
                                                    <input type="file"
                                                        class="form-control form-control-sm @error('file') form-control-danger @enderror"
                                                        id="colFormLabelSm" name="file">
                                                        <span class="font-italic">File ini WAJIB format pdf, jika ada sertifikat dan beberapa dokumentasi kegiatan bisa dijadikan satu file pdf baru di upload</span>
                                                    @error('file')
                                                        <span class="col-form-label">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-mat waves-effect waves-light btn-info">simpan</button>
                                            <a href="{{ route('achievement.index') }}"
                                                class="btn btn-sm btn-mat waves-effect waves-light btn-secondary" >Batal & Kembali</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection