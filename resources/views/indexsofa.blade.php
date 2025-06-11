@extends('template')

@section('content')
    <h3>Data Sofa</h3>

    <a href="/sofa/tambahsofa" class="btn btn-primary"> + Tambah Sofa Baru</a>

    <p>Cari Data Sofa :</p>
    <form action="/sofa/carisofa" method="GET">
        <input type="text" name="cari" placeholder="Cari Sofa .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk Sofa</th>
            <th>Harga Sofa</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sofa as $s)
            <tr>
                <td>{{ $s->merksofa }}</td>
                <td>{{ $s->hargasofa }}</td>
                <td>{{ $s->tersedia }}</td>
                <td>{{ $s->berat }}</td>
                <td>
                    <a href="/sofa/editsofa/{{ $s->ID }}" class="btn btn-success">Edit</a>

                    <a href="/sofa/hapussofa/{{ $s->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $sofa->links() }}
@endsection
