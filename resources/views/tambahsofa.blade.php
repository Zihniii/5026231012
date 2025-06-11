@extends('template')

@section('content')
    <h3>Data Sofa</h3>

    <a href="/sofa" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/sofa/storesofa" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="merk">
                Merk Sofa
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merk" placeholder="Masukkan Merk Sofa" name="merk"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="harga">
                Harga Sofa
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="harga" placeholder="Masukkan Harga" name="harga"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2">Tersedia?</label>
            <div class="col-sm-6">
                <label class="radio-inline">
                    <input type="radio" name="ketersediaan" value="1" required="required"> Ya
                </label>
                <label class="radio-inline">
                    <input type="radio" name="ketersediaan" value="0" required="required"> Tidak
                </label>
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="berat">
                Berat
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="berat" placeholder="Masukkan Berat" name="berat"
                    required="required" step="any">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
