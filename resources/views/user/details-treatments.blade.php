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
<section class="mb-5 mt-5">
    <h1 align="center" class="pb-5">Detail Treatment</h1>
    <div class="row d-flex justify-content-around">
        <div class="col-md-5 " >
            <div class="text-center">
                <img src="https://placeimg.com/640/480/any" class="rounded" style="height: 400px" alt="">
            </div>
            <h3 align="center">Price</h3>
            <h1 align="center" style="font-weight: 600">Rp. 1.999.000</h1>
        </div>
        <div class="col-md-5">
            <h1>Photo Contouring HIFU Cheek Treatment</h1>
            <br>
            <p>Kombinasi Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut earum asperiores a tempore autem praesentium fuga dolore corporis, consectetur aliquid debitis eius, quisquam ducimus maiores cupiditate labore ipsum, rem veritatis?</p>
            <br>
            <p>Selain mencerahkan treatment ini berfungsi untuk:</p>
            <ul>
                <li>Mengurangi hiperpigmentasi kulit dilapisan dalam</li>
                <li>Mengurangi hiperpigmentasi kulit dilapisan dalam</li>
                <li>Mengurangi hiperpigmentasi kulit dilapisan dalam</li>
                <li>Mengurangi hiperpigmentasi kulit dilapisan dalam</li>
            </ul>

            <br>
            <br>
            <a href="" class="btn btn-warning">Reservasi</a>
        </div>
    </div>
</section>
@endsection
