@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Petugas</label>
                    <input type="text" class="form-control" name="nama_petugas" placeholder="Input Nama Petugas">
                    <label for="exampleInputEmail1">Jabatan Petugas</label>
                    <select type="text" name="jabatan_petugas" id="jurusan_petugas" class="form-control" placeholder="Input Jabatan Petugas">
                      <option disabled selected>Pilih Jabatan</option>
                          <option value="RPL">RPL</option>
                          <option value="TKJ">TKJ</option>
                          <option value="DPIB">DPIB</option>
                    </select>
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="text" class="form-control" name="no_telp_petugas" placeholder="Input No Telepon Petugas">
                    <label for="exampleInputEmail1">Alamat Petugas</label>
                    <input type="text" class="form-control" name="alamat_petugas" placeholder="Input Alamat Petugas">
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
@endsection