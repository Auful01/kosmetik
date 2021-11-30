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
        <h2 align="center">Semua Treatments</h2>


        <div class="row d-flex justify-content-around">
        @foreach ($treatment as $t)

            <div class="col-md-2">
                <div class="card" style="width: 18rem;background: rgb(255, 207, 117)">
                    <img class="card-img-top rounded" src="https://placeimg.com/640/480/any" alt="Card image cap">
                    <div class="card-body">
                      <h3 class="">{{$t->name}}</h3>
                      <hr>
                      <p class="card-text">{{$t->description}}</p>
                      <a href="{{route('detail-treatment',$t->id)}}" class="btn btn-warning w-100" ><i class="fas fa-shopping-cart"></i>&nbsp; Detail</a>
                    </div>
                  </div>
            </div>

        @endforeach

            <div class="col-md-2">
                <div class="card" style="width: 18rem;background: rgb(255, 207, 117)">
                    <img class="card-img-top rounded" src="https://placeimg.com/640/480/any"  alt="Card image cap">
                    <div class="card-body">
                      <h3 class="">Card title</h3>
                      <hr>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-warning w-100" ><i class="fas fa-shopping-cart"></i>&nbsp; Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-2">
                <div class="card" style="width: 18rem;background: rgb(255, 207, 117)">
                    <img class="card-img-top rounded" src="https://placeimg.com/640/480/any"  alt="Card image cap">
                    <div class="card-body">
                      <h3 class="">Card title</h3>
                      <hr>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-warning w-100" ><i class="fas fa-shopping-cart"></i>&nbsp; Detail</a>
                    </div>
                  </div>
            </div>
        </div>
    </section>
@endsection
