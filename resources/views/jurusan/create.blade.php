@extends('master')

@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Jurusan</h1>
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
                <h3 class="card-title">Form Jurusan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
              <form  action="{{ route('jurusan.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_jurusan">Kode Jurusan</label>
                    <input name="kode_jurusan" type="text" class="form-control" id="kode_jurusan">
                     <!-- error message untuk title -->
                    @error('kode_jurusan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input name="jurusan" type="text" class="form-control" id="jurusan">
                    <!-- error message untuk title -->
                    @error('jurusan')
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