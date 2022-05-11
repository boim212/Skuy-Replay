@extends('layout.app')
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Rekaman Kuliah</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/$')}}">Home</a></li>
        <li class="breadcrumb-item">Tambah Data</li>
        <li class="breadcrumb-item active" aria-current="page">Tabel Rekaman Kuliah</li>
      </ol>
    </div>
    
    <!-- Row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Matkul</th>
                    <th>Dosen</th>
                    <th>Judul</th>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                    <?php $i=1; ?>
                    @foreach($rekaman as $rek)
                    <tr>
                        <td><?= $i++; ?></td>
                        <td>
                            @empty($rek->matkul->name)
                            <p>Tidak ada Matkul</p>
                            @else
                            {{ $rek->matkul->name }}
                            @endempty
                        </td>
                        <td>
                            @empty($rek->matkul->dosen->name)
                            <p>Tidak ada Dosen</p>
                            @else
                            {{ $rek->matkul->dosen->name }}
                            @endempty</td>
                        <td>{{ $rek->judul }}</td>
                        <td>{{ $rek->kelas }}</td>
                        <td>{{ date('d-m-Y', strtotime($rek->tanggal)) }}</td>
                        <td class="text-center"scope="row">
                            <a href="#">
                                <button data-toggle="modal" data-target="#rekaman-{{$rek->id}}" class="btn btn-out btn-round btn-success btn-square"><i class="icofont icofont-edit-alt"></i>Edit</button>
                            </a>
                            
                            <a href="{{url('/$-rekaman',[$rek->id,$rek->semester->name])}}" id="hapus" data-id="{{ $rek->id }}" data-nama="{{$rek->judul}}" data-semester="{{ $rek->semester }}">
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
    
    @foreach($rekaman as $modalData)
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="rekaman-{{ $modalData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Rekaman 
                        @empty($modalData->matkul->semester->name)
                        <p>?</p>
                        @else
                        {{ $modalData->matkul->semester->name}}
                        @endempty
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/$-rekaman/{{$modalData->id}}-@empty($modalData->matkul->semester->name) ?
                        @else
                        {{$modalData->matkul->semester->name}}
                        @endempty">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <fieldset disabled>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="disabledSelect">Semester</label>
                                <div class="col-sm-8">
                                    <select name="semester_id" class="form-control form-control-round" id="disabledSelect">
                                        <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                                        @foreach($sem as $sms)
                                        <option value="{{ $sms->id }}"@if(old('semester_id',$modalData->semester_id)== $sms->id) selected="selected" @endif>{{$sms->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="judul">Judul Rekaman Kuliah</label>
                            <div class="col-sm-8">
                                <input value="{{ old('judul',$modalData->judul) }}" type="text" name="judul" class="form-control form-control-round @error('judul') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Mata Kuliah</label>
                            <div class="col-sm-8">
                                <select name="matkul_id" class="form-control form-control-round">
                                    <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Mata Kuliah</option>
                                    @foreach($matkul as $mat)
                                    <option value="{{ $mat->id }}"@if(old('matkul',$modalData->matkul_id)== $mat->id) selected="selected" @endif>{{$mat->name}} + {{$mat->dosen->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="kelas">Kelas</label>
                            <div class="col-sm-8">
                                <input value="{{ old('kelas',$modalData->kelas) }}" type="text" name="kelas" class="form-control form-control-round @error('kelas') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="form-group row simple-date3">
                            <label class="col-sm-4 col-form-label" for="decadeView">Tanggal Upload</label>
                            <div class="col-sm-8 input-group">
                                <input value="{{ old('tanggal',date('d-m-Y', strtotime($modalData->tanggal)) ) }}" data-provide="datepicker" type="text" name="tanggal" id="decadeView" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="link">Link Rekaman</label>
                            <div class="col-sm-8">
                                <input value="{{ old('link',$modalData->link) }}" type="text" name="link" class="form-control form-control-round @error('link') is-invalid @enderror">
                            </div>
                        </div>
                        <button type="submit" value="Simpan" class="btn btn-primary btn-round">Simpan Data</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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
            text: "Data Rekaman Dengan Judul " +nama+ " Akan Di Hapus!",
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
                    'Data Rekaman Dengan  Judul'+nama+' Tidak Jadi Di Hapus :)',
                    'error'
                    )
                }
            })
        })
    </script>
</script>
@endpush


@push('scripts')
    <!-- Bootstrap Datepicker -->
    <script src="{{asset('admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Javascript for this page -->
    <script>
        $(document).ready(function () {

        $('.simple-date3 .date').datepicker({
            startView: 2,
            format: 'dd/mm/yyyy',        
            autoclose: true,     
            todayHighlight: true,   
            todayBtn: 'linked',
        });

        });
    </script>
@endpush