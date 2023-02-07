@extends('master')

@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-md-12">
           
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
              <form  action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input name="nim" type="text" class="form-control" id="nim">
                     <!-- error message untuk title -->
                    @error('nim')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap">
                    <!-- error message untuk title -->
                    @error('nama_lengkap')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    
                    <select name="jurusan" class="form-control" id="jurusan">
                        

                            @forelse ($jurusan as $jrs)
                                 <option value="{{ $jrs->id}}">{{ $jrs->jurusan}}</option>
                            @empty
                                <option value="">Empty</option>
                            @endforelse
                        </select>
                     <!-- error message untuk title -->
                    @error('jurusan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir">
                     <!-- error message untuk title -->
                    @error('tempat_lahir')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="tanggal_lahir" data-target-input="nearest">
                        <input name="tanggal_lahir" type="text" class="form-control datetimepicker-input" data-target="#tanggal_lahir"/>
                        <div class="input-group-append" data-target="#tanggal_lahir" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="alamat_lengkap">Alamat Lengkap</label>
                    <input name="alamat_lengkap" type="text" class="form-control" id="alamat_lengkap">
                     <!-- error message untuk title -->
                    @error('alamat_lengkap')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->

@endsection