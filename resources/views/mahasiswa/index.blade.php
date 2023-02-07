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
            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title">Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <a href="{{ route('mahasiswa.create')}}" class="btn btn-md btn-success mb-3">
                    TAMBAH DATA
                    </a>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama Lengkap</th>
                      <th>Jurusan</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal lahir</th>
                      <th>Alamat lengkap</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($mahasiswa as $mhs)
                    <tr>
                      <td>{{ $mhs->nim }}</td>
                      <td>{{ $mhs->nama_lengkap }}</td>
                      <td>{{ $mhs->jurusan->jurusan }}</td>
                      <td>{{ $mhs->tempat_lahir }}</td>
                      <td>{{ $mhs->tanggal_lahir }}</td>
                      <td>{{ $mhs->alamat_lengkap }}</td>
                      <td>Edit | Hapus</td>
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