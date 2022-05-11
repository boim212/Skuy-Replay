@extends('layout.app')
@section('content')
@if(Session::has('berhasil'))
<div id="flash" data-flash="{{Session::get('berhasil')}}"></div>
@endif


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Blog Materi Kuliah {{ $judulTable }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/$')}}">Home</a></li>
            <li class="breadcrumb-item">Tambah Data</li>
            <li class="breadcrumb-item active" aria-current="page">Table Data Artikel</li>
        </ol>
    </div>
    
    <!-- Row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Matkul</th>
                    <th>Sampul</th>
                    <th>Konten</th>
                    <th class="text-center" scope="row">Edit</th>
                    <th class="text-center" scope="row">Delete</th>
                </tr>
              </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($blogs as $blog)
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td>{{ $blog->judul }}</td>
                        <td>{{ $blog->matkul->name}}</td>
                        <td><img src="{{ asset('storage/'.$blog->sampul) }}" alt="sampul" width="100"></td>
                        <td>{!! Str::limit(strip_tags($blog->konten),10) !!}</td>
                        <td class="text-center"scope="row">
                            <a href="{{ url('/$-blog/edit',[$blog->id,$blog->semester->name] ) }}">
                                <button class="btn btn-out btn-round btn-success btn-square">
                                    <i class="icofont icofont-edit-alt"></i>Edit</button>
                            </a>
                        </td>
                        <td class="text-center" scope="row">
                            <a href="{{url('/$-blog/delete',[$blog->id,$blog->semester->name])}}" id="hapus" data-id="{{ $blog->id }}" data-sms="{{ $blog->semester}}" data-nama="{{$blog->judul}}">
                                <button class="btn btn-out btn-round btn-danger btn-square">
                                <i class="icofont icofont-trash"></i>Hapus</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
            
@endsection

@push('styles')
    <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
@endpush


@push('scripts')
  <script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('sweet/sweetalert2.min.js')}}"></script>

    <script>
      $(document).on('click','#hapus',function(e){
        e.preventDefault();

        var link = $(this).attr('href');
        var nama = $(this).attr('data-nama');

        Swal.fire({
          title: 'Apakah Anda Yakin?',
          text: "Data Artikel Materi Dengan Judul " +nama+ " Akan Di Hapus!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#00a65a',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
          if (result.isConfirmed) {
              window.location = link;
          }
          else if (result.dismiss){
            Swal.fire(
              'Cancelled',
              'Data Artikel Materi Dengan Judul '+nama+' Tidak Jadi Di Hapus :)',
              'error'
            )
          }
        })

      })
    </script>
  </script>
@endpush
