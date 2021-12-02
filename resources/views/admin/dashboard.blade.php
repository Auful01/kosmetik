@extends('layout.main')

@section('content')
<section>
    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$treatment}}</h3>

              <p>Treatment</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$dokter}}<sup style="font-size: 20px">%</sup></h3>

              <p>Doctor</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{$consult}}</h3>

              <p>Consultation</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{$reserv}}</h3>

              <p>Reservation</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

</section>
<section>
    <div class="card">
        <div class="card-body">
            <h2>Riwayat Reservasi Baru</h2>
            <table id="myTable" class="table">
                <thead>
                    <th>No.</th>
                    <th>Nama Treatment</th>
                    <th>Jenis Treatment</th>
                    <th>Tanggal Reservasi</th>
                    <th>Waktu Reservasi</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Konfirmasi</th>
                </thead>
                <tbody>
                    @foreach ($reservasi as $r)

                    <tr class="p-2">
                        <td>1</td>
                        <td>{{$r->treatment->name}}</td>
                        <td>{{$r->treatment->category->category}}</td>
                        <td>{{$r->date}}</td>
                        <td>{{$r->time}}</td>
                        <td>{{$r->treatment->price}}</td>
                        <td><select name="confirm" class="form-control" id="">
                            <option value="0">Dibatalkan</option>
                            <option value="1">Proses</option>
                            <option value="2">Selesai</option>
                        </select></td>
                        <td>
                            @if ($r->confirm == 0)
                                <span class="alert alert-danger">Belum dikonfirmasi</span>
                            @elseif ($r->status == 1)
                                <span class="alert alert-info">Dikonfirmasi</span>
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
