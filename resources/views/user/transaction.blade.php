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
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Tanggal Reservasi</th>
                    <th>Waktu Reservasi</th>
                    <th>Harga</th>
                    <th>Konfirmasi</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($order as $o)

                    <tr class="p-2">
                        <td>1</td>
                        <td>{{$o->doctor->name}}</td>
                        <td>{{$o->doctor->specialist}}</td>
                        <td>{{$o->date}}</td>
                        <td>{{$o->time}}</td>
                        <td>{{$o->total}}</td>
                        <td><select name="confirm" id="">
                            <option value="0">Belum Dikonfirmasi</option>
                            <option value="1">Dikonfirmasi</option>
                        </select></td>
                        <td>
                            @if ($o->status == 0)
                                <span class="alert alert-danger">Dibatalkan</span>
                            @elseif ($o->status == 1)
                                <span class="alert alert-info">Diproses</span>
                            @else
                            <span class="alert alert-success">Selesai</span>
                            @endif
                        </td>
                    </tr>

                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
