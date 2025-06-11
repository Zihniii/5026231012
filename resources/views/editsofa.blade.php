@extends('template')

@section('content')
    <h3>Edit Data Sofa</h3>

    <a href="/sofa" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($sofa as $s)
        <form action="/sofa/updatesofa" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $s->ID }}">

            {{-- Merk Sofa --}}
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merk">
                    Merk Sofa
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="merk" placeholder="Masukkan Merk Sofa"
                        name="merk" value="{{ $s->merksofa }}" required="required">
                </div>
            </div>

            {{-- Harga Sofa --}}
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="harga">
                    Harga Sofa
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="harga" placeholder="Masukkan Harga" name="harga"
                        value="{{ $s->hargasofa }}" required="required" step="any">
                </div>
            </div>

            {{-- Ketersediaan (Availability) --}}
            <div class="form-group has-success">
                <label class="control-label col-sm-2">
                    Ketersediaan
                </label>
                <div class="col-sm-6">
                    <div class="radio">
                        <label>
                            <input type="radio" name="ketersediaan" id="ketersediaan_yes" value="1"
                                {{ $s->tersedia == 1 ? 'checked' : '' }} required> Ya (Tersedia)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ketersediaan" id="ketersediaan_no" value="0"
                                {{ $s->tersedia == 0 ? 'checked' : '' }}> Tidak (Tidak Tersedia)
                        </label>
                    </div>
                </div>
            </div>

            {{-- Berat --}}
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="berat">
                    Berat
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="berat" placeholder="Masukkan Berat" name="berat"
                        value="{{ $s->berat }}" required="required" step="any">
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>
            </div>
        </form>
    @endforeach
@endsection
