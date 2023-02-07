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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Jurusan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                        <a href="{{ route('jurusan.create')}}" class="btn btn-md btn-success mb-3">
                            TAMBAH DATA
                        </a>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Kode Jurusan</th>
                      <th>Jurusan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($jurusan as $jrs)
                    <tr>
                      <td>{{ $jrs->kode_jurusan }}</td>
                      <td>{{ $jrs->jurusan }}</td>
                    
                      <td>
                         <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('jurusan.destroy', $jrs->id) }}" method="POST">
                                           
                            <a href="{{ route('jurusan.edit', $jrs->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                      </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Post belum tersedia.
                        </div>
                    @endforelse
                      
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->

@endsection