@extends('layout.app')
@section('content')

@if(Session::has('berhasil'))
<!-- <div id="notif" data-notif="{{Session::get('berhasil')}}"></div> -->
@endif

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Table Data Dosen</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/$')}}">Home</a></li>
        <li class="breadcrumb-item">Tambah Data</li>
        <li class="breadcrumb-item active" aria-current="page">Tabel Data Dosen</li>
      </ol>
    </div>
    
    <!-- Row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
            @if (Session::has('berhasil'))
              <div id="notif" data-notif="{{ Session::get('berhasil') }}"></div>
            @endif
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Semester</th>
                    <th>Nama Dosen</th>
                    <th>Create</th>
                    <th>Update</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                  <?php $i=1; ?>
                  @foreach($dosen as $dos)
                  <tr>
                      <td scope="row"><?= $i++; ?></td>
                      <td>{{ $dos->semester->name}}</td>
                      <td>{{ $dos->name }}</td>
                      <td>{{ date('d-m-Y', strtotime($dos->created_at)) }}</td>
                      <td>{{ date('d-m-Y', strtotime($dos->updated_at)) }}</td>
                      <td class="text-center" scope="row">
                          <button data-toggle="modal" data-target="#dosen-{{$dos->id}}" class="btn btn-out btn-round btn-success btn-square"><i class="icofont icofont-edit-alt"></i>Edit</button>
                          
                          <a href="{{url('/$-dosen',$dos->id)}}" class="btn btn-danger" id="hapus" data-nama="{{$dos->name}}">
                              <i class="fas fa-trash"></i>Hapus
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

    @foreach($dosen as $modalData)
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="dosen-{{ $modalData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Matkul Semester {{ $modalData->semester->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/$-dosen/{{$modalData->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <input type="hidden" name="semester_id" value="{{ old('semester_id',$modalData->semester_id) }}">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="name">Nama Mata Kuliah</label>
                            <div class="col-sm-8">
                                <input value="{{ old('name',$modalData->name) }}" type="text" name="name" class="form-control form-control-round @error('name') is-invalid @enderror">
                            </div>
                        </div>
                        <button type="submit" value="Simpan" class="btn btn-primary btn-round">Simpan Data</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
    

@push('styles')
    <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('sweet/sweetalert2.min.css')}}" type="text/css">

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
    <script src="{{asset('sweet/sweetalert2.min.js')}}"></script>
    <script>
      var notif = $('#notif').data('notif');
      if(notif){
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: notif,
            showConfirmButton: false,
            timer: 2500
        })
      }

      
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
          text: "Data Dosen Dengan Nama " +nama+ " Akan Di Hapus!",
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
              'Data Dosen Dengan '+nama+' Tidak Jadi Di Hapus :)',
              'error'
            )
          }
        })

      })
    </script>
  </script>
@endpush