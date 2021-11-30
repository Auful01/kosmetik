@extends('layout.main')

@section('content')
<section>
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>
</section>
<section>
    <div class="row">
        <div class="col-md-6">
            <div class="text-center">
                <img src="https://placeimg.com/640/480/any" class="rounded" alt="">
            </div>
        </div>
        <div class="col-md-5">
            <h1>{{$schedule->doctor->name}}</h1>
            <small><span class="alert alert-warning p-1 text-muted" >Specialist Dokter {{$schedule->doctor->specialist}}</span></small>
            <br>
            <br>
            <h3>Jadwal yang tersedia</h3>
            <div class="row d-flex justify-content-start" >
                <div class="col-md-3">
                    <h3>Senin</h3>
                </div>
                <div class="col-md-9">
                    <h3>: {{$schedule->monday_start}} - {{$schedule->monday_end}}</h3>
                </div>
                <div class="col-md-3">
                    <h3>Selasa</h3>
                </div>
                <div class="col-md-9">
                    <h3>: {{$schedule->tuesday_start}} - {{$schedule->tuesday_end}}</h3>
                </div>
                <div class="col-md-3">
                    <h3>Rabu</h3>
                </div>
                <div class="col-md-9">
                    <h3>: {{$schedule->wednesday_start}} - {{$schedule->wednesday_end}}</h3>
                </div>
                <div class="col-md-3">
                    <h3>Kamis</h3>
                </div>
                <div class="col-md-9">
                    <h3>: {{$schedule->thursday_start}} - {{$schedule->thursday_end}}</h3>
                </div>
                <div class="col-md-3">
                    <h3>Jumat</h3>
                </div>
                <div class="col-md-9">
                    <h3>: {{$schedule->friday_start}} - {{$schedule->friday_end}}</h3>
                </div>
                <br>
                <a href="" data-toggle="modal" data-target="#order-jadwal" data-harga="{{$schedule->doctor->price}}" class="btn btn-warning btn-order">Konsultasi</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('modal')
<div class="modal fade" id="order-jadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('order.store')}}" method="POST">
                @csrf
                <input type="text" value="{{Request::segment(2)}}" name="doctor_id" hidden>
                <div class="form-group">
                    <label for="">Hari</label>
                    <input type="date" class="form-control" name="date" id="date1">
                </div>
                <div class="form-group">
                    <label for="">Jam</label>
                    <input type="time" class="form-control" name="time" id="">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="price" class="price form-control" id="" disabled>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
        {{-- <div class="modal-footer">

        </div> --}}
      </div>
    </div>
  </div>
@endsection
