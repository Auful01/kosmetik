@extends('layout.main')
@section('content')
<div class="jumbotron elevation-3"  style="display: flex; justify-content: center; align-items: center;margin-top: -80px ; margin-left: -60px ; max-width: 108%; height: 400px; background-repeat: no-repeat; background-size: cover;background-image: url({{asset('images/jumbotron.png')}});">
    {{-- <div style="vertical-align: middle"> --}}
    {{-- </div> --}}
    <h1 class="display-4" align="center" >Schedule</h1>
</div>
<section class="pb-5 mt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center">
                <img src="{{asset('storage/' . $schedule->doctor->photo)}}" class="rounded img-fluid" style="height: 500px" alt="">
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
                <a  class="btn btn-warning btn-editJadwal" data-toggle="modal" data-target="#edit-jadwal" data-url="{{route('schedule.update', $schedule->id)}}" data-mostart="{{$schedule->monday_start}}" data-moend="{{$schedule->monday_end}}" data-tustart="{{$schedule->tuesday_start}}" data-tuend="{{$schedule->tuesday_end}}" data-wedstart="{{$schedule->wednesday_start}}" data-wedend="{{$schedule->wednesday_end}}" data-thrstart="{{$schedule->thursday_start}}" data-thrend="{{$schedule->thursday_end}}" data-frstart="{{$schedule->friday_start}}" data-frend="{{$schedule->friday_end}}"  data-id="{{$schedule->id}}">Edit Schedule</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('modal')
    {{-- SCHEDULE CREATE --}}
  <div class="modal fade" id="edit-jadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Atur Schedule</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" class="url" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="text" class="id" name="doctor_id" hidden>
              {{-- <input type="text" class="mostart" name="" id=""> --}}
              <div class="form-group">
                  <label for="">Senin</label>
                  <div class="row d-flex justify-content-around">
                      <input type="time" name="monday_start" class="form-control col-md-5 mostart">
                      <p class="col-md-1" align="center">-</p>
                      <input type="time" name="monday_end" class="form-control col-md-5 moend">
                  </div>
              </div>
              <div class="form-group">
                  <label for="">Selasa</label>
                  <div class="row d-flex justify-content-around">
                      <input type="time" name="tuesday_start" class="form-control col-md-5 tustart">
                      <p class="col-md-1" align="center">-</p>
                      <input type="time" name="tuesday_end" class="form-control col-md-5 tuend">
                  </div>
              </div>
              <div class="form-group">
                  <label for="">Rabu</label>
                  <div class="row d-flex justify-content-around">
                      <input type="time" name="wednesday_start" class="form-control col-md-5 wedstart">
                      <p class="col-md-1" align="center">-</p>
                      <input type="time" name="wednesday_end" class="form-control col-md-5 wedend">
                  </div>
              </div>
              <div class="form-group">
                  <label for="">Kamis</label>
                  <div class="row d-flex justify-content-around">
                      <input type="time" name="thursday_start" class="form-control col-md-5 thrstart">
                      <p class="col-md-1" align="center">-</p>
                      <input type="time" name="thursday_end" class="form-control col-md-5 thrend">
                  </div>
              </div>
              <div class="form-group">
                  <label for="">Jumat</label>
                  <div class="row d-flex justify-content-around">
                      <input type="time" name="friday_start" class="form-control col-md-5 frstart">
                      <p class="col-md-1" align="center">-</p>
                      <input type="time" name="friday_end" class="form-control col-md-5 frend">
                  </div>
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
