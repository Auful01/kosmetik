@extends('layout.main')

@section('content')
<section>
    <div class="jumbotron"  style="display: flex; justify-content: center; align-items: center;margin-top: -80px ; margin-left: -60px ; max-width: 108%; height: 400px; background-repeat: no-repeat; background-size: cover;background-image: url({{asset('images/jumbotron.png')}});">
        {{-- <div style="vertical-align: middle"> --}}
        {{-- </div> --}}
        <h1 class="display-4" align="center" >Consultation</h1>

      </div>
    <div class="card">
        <div class="card-body">
            <h2>Transaksi Konsultasi</h2>
            {{-- <a href="" class="mb-2 btn btn-primary">Tambah Dokter</a> --}}
            <table id="myTable" class="table">
                <thead>
                    <th>No.</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Pasien</th>
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
                        <td>{{$c->user->name}}</td>
                        <td>{{$c->date}}</td>
                        <td>{{$c->time}}</td>
                        <td>{{$c->doctor->price}}</td>
                        <td><select name="status" class="form-control status" data-id="{{$c->id}}" id="">
                            <option value="0">Dibatalkan</option>
                            <option value="1">Diproses</option>
                            <option value="2">Selesai</option>
                        </select></td>
                        <td>
                            @if ($c->confirm == 0)
                                <span class="alert alert-danger">Dibatalkan</span>
                            @elseif ($c->confirm == 1)
                                <span class="alert alert-info">Unconfirmed</span>
                            @else
                            <span class="alert alert-success">Confirmed</span>
                            @endif
                        </td>
                    </tr>

                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.status').on('change', function () {
        var id = $(this).data('id')
        var status = $(this).val();
        console.log(id,status);
        $.ajax({
            url : 'consult-status',
            type : 'GET',
            dataType : 'JSON',
            data : {
                "id" : id,
                "status" : status
            },
            success: function data(data){
                console.log(data.success);
            }
        })
    })
</script>
@endsection
