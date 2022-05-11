@extends('layout.app')
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Table Data Mata Kuliah</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/$')}}">Home</a></li>
            <li class="breadcrumb-item">Tambah Data</li>
            <li class="breadcrumb-item active" aria-current="page">Table Data Matkul</li>
        </ol>
    </div>
    
    <!-- Row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Mata Kuliah</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Semester</th>
                    <th>Nama</th>
                    <th>Nama Dosen</th>
                    <th></th>
                </tr>
              </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($matkul as $mat)
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td>{{ $mat->semester->name}}</td>
                        <td>{{ $mat->name }}</td>
                        <td>@empty ($mat->dosen->name)
                            <p>?</p>
                        @else
                        {{ ($mat->dosen->name) }}
                        @endempty</td>
                        <td class="text-center"scope="row">
                            <a href="#">
                                <button data-toggle="modal" data-target="#matkul-{{$mat->id}}" class="btn btn-out btn-round btn-success btn-square">
                                    <i class="icofont icofont-edit-alt"></i>Edit</button>
                            </a>
                            <a href="{{url('/$-matkul',$mat->id) }}" id="hapus" data-nama="{{$mat->name}}">
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
    
    @foreach($matkul as $modalData)
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="matkul-{{ $modalData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Matkul Semester {{ $modalData->semester->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/$-matkul/{{$modalData->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <input type="hidden" name="semester_id" value="{{ old('semester_id',$modalData->semester_id) }}">
                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="dosen_id">Nama Dosen</label>
                            <div class="col-sm-8" for="dosen_id">
                                <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                                    <option value="" @if( old('dosen_id')=='' or old('dosen_id')==0 ) selected="selected" @endif >Pilih Nama Dosen</option>
                                    @foreach($dos as $dosen)
                                        <option value="{{ $dosen->id}}" @if(old('dosen_id',$modalData->dosen_id)== $modalData->dosen_id) selected="selected" @endif>{{$dosen->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
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
                        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).on('click','#hapus',function(e){
            e.preventDefault();
            var link = $(this).attr('href');
            var nama = $(this).attr('data-nama');
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Mata Kuliah " +nama+ " Akan Di Hapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00a65a',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
                else if (result.dismiss){
                    Swal.fire(
                    'Cancelled',
                    'Data Mata Kuliah Dengan '+nama+' Tidak Jadi Di Hapus :)',
                    'error'
                    )
                }
            })
        })
    </script>
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
<!-- <script src="{{asset('sweet/sweetalert2.min.js')}}"></script>
<script>
    var flash = $('#flash').data('flash');
    if(flash){
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: flash,
        })
    }
</script> -->
@endpush