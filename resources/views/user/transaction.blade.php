@extends('layout.main')

@section('content')
<section>
    <div class="card">
        <div class="card-body">
            <h2>Transaksi</h2>
            {{-- <a href="" class="mb-2 btn btn-primary">Tambah Dokter</a> --}}
            <table id="myTable" class="table">
                <thead>
                    <th>No.</th>
                    <th>Nama Customer</th>
                    <th>Jenis Reservasi</th>
                    <th>Tanggal Reservasi</th>
                    <th>Waktu Reservasi</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr class="p-2">
                        <td>1</td>
                        <td>Coba</td>
                        <td>coba</td>
                        <td>coba</td>
                        <td>coba</td>
                        <td><span class="alert alert-success p-2">Sukses</span></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
