@extends('layout.main')

@section('content')

<section>
    <div class="card">
        <div class="card-body">
            <h2>Customer</h2>
            <a href="" class="btn btn-primary mb-3">Tambah Customer</a>
            <table id="myTable" class="table">
                <thead>
                    <th>No. Reservasi</th>
                    <th>Customer</th>
                    <th>No. Telp</th>
                    <th>Total</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    <tr class="p-2">
                        <td>1</td>
                        <td>Coba</td>
                        <td>08222</td>
                        <td>100000</td>
                        <td><span class="alert alert-success p-2">Sukses</span></td>
                    </tr>
                    <tr class="p-2">
                        <td>1</td>
                        <td>Coba</td>
                        <td>08222</td>
                        <td>100000</td>
                        <td><span class="alert alert-success p-2">Sukses</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


@endsection
