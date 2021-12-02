@extends('layout.main')

@section('content')
<section>
    <div class="card">
        <div class="card-body">
            <h2>Transaksi Konsultasi</h2>
            {{-- <a href="" class="mb-2 btn btn-primary">Tambah Dokter</a> --}}
            <table id="myTable" class="table">
                <thead>
                    <th>No.</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Tanggal Konsul</th>
                    <th>Waktu Konsul</th>
                    <th>Harga</th>
                    <th>Konfirmasi</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($consult as $c)

                    <tr class="p-2">
                        <td>1</td>
                        <td>{{$c->doctor->name}}</td>
                        <td>{{$c->doctor->specialist}}</td>
                        <td>{{$c->date}}</td>
                        <td>{{$c->time}}</td>
                        <td>{{$c->doctor->price}}</td>
                        <td><select name="confirm" class="form-control" id="">
                            <option value="0">Belum Dikonfirmasi</option>
                            <option value="1">Dikonfirmasi</option>
                        </select></td>
                        <td>
                            @if ($c->status == 0)
                                <span class="alert alert-danger">Dibatalkan</span>
                            @elseif ($c->status == 1)
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
