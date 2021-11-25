@extends('layout.main')

@section('content')

<section>
    <div class="card">
        <div class="card-body">
            <h2>Layanan Treatments</h2>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Treatments</a>
            <table id="myTable" class="table">
                <thead>
                    <th>No</th>
                    <th>Nama Treatments</th>
                    <th>Deskripsi</th>
                    <th>gambar</th>
                    <th>Harga</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr class="p-2">
                        <td>1</td>
                        <td>Coba</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta corrupti minus doloribus, esse, nobis repellat aperiam quae repudiandae, enim eligendi distinctio facere! Id exercitationem, rerum corporis quam eveniet asperiores laborum!</td>
                        <td><img src="https://placeimg.com/640/480/any" class="rounded" style="height: 100px" alt=""></td>
                        <td>Rp. 1.000.000</td>
                        <td><span class="alert alert-success p-2">Sukses</span></td>
                    </tr>
                    <tr class="p-2">
                        <td>1</td>
                        <td>Coba</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta corrupti minus doloribus, esse, nobis repellat aperiam quae repudiandae, enim eligendi distinctio facere! Id exercitationem, rerum corporis quam eveniet asperiores laborum!</td>
                        <td><img src="https://placeimg.com/640/480/any" class="rounded" style="height: 100px" alt=""></td>
                        <td>Rp. 1.000.000</td>
                        <td><span class="alert alert-success p-2">Sukses</span></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection

@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Treatment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="">Nama Treatment</label>
                  <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Kategori Treatment</label>
                <select name="" class="form-control" id="">
                    <option value="1">Coba</option>
                    <option value="1">Coba</option>
                    <option value="1">Coba</option>
                    <option value="1">Coba</option>
                    <option value="1">Coba</option>
                </select>
                {{-- <input type="text" name="name" class="form-control"> --}}
            </div>
              <div class="form-group">
                  <label for="">Deskripsi</label>
                  <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                  <label for="">Upload Foto</label>
                  <input type="file" name="photo" class="form-control">
              </div>
              <div class="form-group">
                  <label for="">Harga</label>
                  <input type="text" name="harga" class="form-control">
              </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
          </form>
        </div>
        {{-- <div class="modal-footer">

        </div> --}}
      </div>
    </div>
  </div>
@endsection
