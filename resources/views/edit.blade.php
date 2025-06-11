@extends('template')

@section('content')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            {{-- Hidden ID for updating the correct record --}}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

            {{-- Nama Pegawai --}}
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="nama">
                    Nama
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nama" placeholder="Masukkan Nama Lengkap"
                        name="nama" value="{{ $p->pegawai_nama }}" required="required">
                </div>
            </div>

            {{-- Jabatan Pegawai --}}
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="jabatan">
                    Jabatan
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan"
                        value="{{ $p->pegawai_jabatan }}" required="required">
                </div>
            </div>

            {{-- Umur Pegawai --}}
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="umur">
                    Umur
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="umur" placeholder="Masukkan Umur" name="umur"
                        value="{{ $p->pegawai_umur }}" required="required">
                </div>
            </div>

            {{-- Alamat Pegawai --}}
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="alamat">
                    Alamat
                </label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap" name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>
            </div>
        </form>
    @endforeach
@endsection
