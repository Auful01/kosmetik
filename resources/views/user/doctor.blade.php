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
    <h1 align="center" class="mb-5">Meet Our Treatment Specialists</h1>
    <div class="row d-flex justify-content-around">
        @foreach ($doctor as $d)
        <div class="col-md-3">
            <div class="text-center"><img src="{{asset('storage/'. $d->photo)}}" style="height: 300px" alt=""></div>
            <small class="text-muted">Dokter {{$d->specialist}}</small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex est veritatis doloremque corrupti voluptatum a, cumque, perferendis tempore nihil amet vel. Modi, enim ipsam fugiat molestias deleniti vel sit quis?</p>
            <a href="{{route('doctor-consul.show', $d->id)}}" class="btn btn-warning" >Konsultasi</a>
        </div>
        @endforeach

    </div>

        {{-- <div class="col-md-3">
            <img src="https://placeimg.com/640/480/any" style="height: 300px" alt="">
            <small class="text-muted">Dokter Kulit</small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex est veritatis doloremque corrupti voluptatum a, cumque, perferendis tempore nihil amet vel. Modi, enim ipsam fugiat molestias deleniti vel sit quis?</p>
            <a href="" class="btn btn-warning" >Konsultasi</a>
        </div>
        <div class="col-md-3">
            <img src="https://placeimg.com/640/480/any" style="height: 300px" alt="">
            <small class="text-muted">Dokter Kulit</small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex est veritatis doloremque corrupti voluptatum a, cumque, perferendis tempore nihil amet vel. Modi, enim ipsam fugiat molestias deleniti vel sit quis?</p>
            <a href="" class="btn btn-warning" >Konsultasi</a>
        </div>
    </div> --}}
</section>
@endsection
