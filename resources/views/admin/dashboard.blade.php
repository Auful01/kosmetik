@extends('layout.main')

@section('content')
<section>
    <div class="row d-flex justify-content-around">
        <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>

    </div>
</section>
<section>
    <div class="card">
        <div class="card-body">
            <h2>Riwayat Reservasi Baru</h2>
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
