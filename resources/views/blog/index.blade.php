@extends('layout.app')
@section('content')
@if(Session::has('berhasil'))
<!-- <div id="flash" data-flash="{{Session::get('berhasil')}}"></div> -->
@endif


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Artikel Materi Kuliah</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/$')}}">Home</a></li>
        <li class="breadcrumb-item">Tambah Data Artikel</li>
      </ol>
    </div>
    
    <!-- mulai ambil di sini -->
    <!-- semester 1 -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Artikel Semester 1</h6>
          </div>
          <div class="card-body">  
            <form action="{{ url('/$-blog') }}" method="POST" enctype="multipart/form-data" class="form">
            {{ csrf_field() }}            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul ArtikelHelp"placeholder="Enter Judul Artikel">
              </div>
              <div class="form-group">
                <label for="select2Single">Pilih Semester</label>
                <select class="select2-single form-control" name="semester_id" id="select2Single">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $sem)
                        <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="select2SinglePlaceholder">Mata Kuliah</label>
                <select class="select2 form-control" name="matkul_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Matkul</option>
                    @foreach($mat1 as $mat)
                        <option value="{{ $mat->id }}" @if(old('matkul_id')==$mat->id ) selected="selected" @endif >{{ $mat->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="sampul">Gambar Sampul</label>
                <input type="file" name="sampul" class="form-control" id="sampul" accept="image/*">
              </div>
              <div class="form-group">
                  <label for="summernote1">Konten</label>
                  <textarea name="konten" class="form-control" id="summernote1" rows="10"></textarea>
                </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- akhir semester 1 -->
      <!-- semester 2 -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 2</h6>
          </div>
          <div class="card-body">  
          <form action="{{ url('/$-blog') }}" method="POST" enctype="multipart/form-data"class="form">
            {{ csrf_field() }}             <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul ArtikelHelp"placeholder="Enter Judul Artikel">
              </div>
              <div class="form-group">
                <label for="select2Single">Dosen</label>
                <select class="select2-single form-control" name="semester_id" id="select2Single">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $sem)
                        <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="select2SinglePlaceholder">Mata Kuliah</label>
                <select class="select2 form-control" name="matkul_id" id="select2SinglePlaceholder">
                    <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Matkul</option>
                    @foreach($mat2 as $mat)
                        <option value="{{ $mat->id }}" @if(old('matkul_id')==$mat->id ) selected="selected" @endif >{{ $mat->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="sampul">Gambar Sampul</label>
                <input type="file" name="sampul" class="form-control" id="sampul">
              </div>
              <div class="form-group">
                  <label for="summernote2">Konten</label>
                  <textarea name="konten" class="form-control" id="summernote2" rows="10"></textarea>
                </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- akhir semester 2 -->
    <!-- semester 3 -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 3</h6>
          </div>
          <div class="card-body">  
          <form action="{{ url('/$-blog') }}" method="POST" enctype="multipart/form-data" class="form">
            {{ csrf_field() }}              <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul ArtikelHelp"placeholder="Enter Judul Artikel">
              </div>
              <div class="form-group">
                <label for="select2Single">Dosen</label>
                <select class="select2-single form-control" name="semester_id" id="select2Single">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $sem)
                        <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="select2SinglePlaceholder">Mata Kuliah</label>
                <select class="select2 form-control" name="matkul_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Matkul</option>
                    @foreach($mat3 as $mat)
                        <option value="{{ $mat->id }}" @if(old('matkul_id')==$mat->id ) selected="selected" @endif >{{ $mat->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="sampul">Gambar Sampul</label>
                <input type="file" name="sampul" class="form-control" id="sampul">
              </div>
              <div class="form-group">
                  <label for="summernote3">Konten</label>
                  <textarea name="konten" class="form-control" id="summernote3" rows="10"></textarea>
                </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    <div class="row">
      <!-- akhir semester 3 -->
      <!-- semester 4 -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 4</h6>
          </div>
          <div class="card-body">  
          <form action="{{ url('/$-blog') }}" method="POST" enctype="multipart/form-data" class="form">
            {{ csrf_field() }}             <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul ArtikelHelp"placeholder="Enter Judul Artikel">
              </div>
              <div class="form-group">
                <label for="select2Single">Dosen</label>
                <select class="select2-single form-control" name="semester_id" id="select2Single">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $sem)
                        <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="select2SinglePlaceholder">Mata Kuliah</label>
                <select class="select2 form-control" name="matkul_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Matkul</option>
                    @foreach($mat4 as $mat)
                        <option value="{{ $mat->id }}" @if(old('matkul_id')==$mat->id ) selected="selected" @endif >{{ $mat->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="sampul">Gambar Sampul</label>
                <input type="file" name="sampul" class="form-control" id="sampul">
              </div>
              <div class="form-group">
                  <label for="summernote4">Konten</label>
                  <textarea name="konten" class="form-control" id="summernote4" rows="10"></textarea>
                </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir semester 4 -->
    <!-- semester 5 -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 5</h6>
          </div>
          <div class="card-body">  
          <form action="{{ url('/$-blog') }}" method="POST" enctype="multipart/form-data" class="form">
            {{ csrf_field() }}            
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul ArtikelHelp"placeholder="Enter Judul Artikel">
              </div>
              <div class="form-group">
                <label for="select2Single">Dosen</label>
                <select class="select2-single form-control" name="semester_id" id="select2Single">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $sem)
                        <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="select2SinglePlaceholder">Mata Kuliah</label>
                <select class="select2 form-control" name="matkul_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Matkul</option>
                    @foreach($mat5 as $mat)
                        <option value="{{ $mat->id }}" @if(old('matkul_id')==$mat->id ) selected="selected" @endif >{{ $mat->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="sampul">Gambar Sampul</label>
                <input type="file" name="sampul" class="form-control" id="sampul">
              </div>
              <div class="form-group">
                  <label for="summernote5">Konten</label>
                  <textarea name="konten" class="form-control" id="summernote5" rows="10"></textarea>
                </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    <div class="row">
      <!-- akhir semester 5 -->
      <!-- semester 6 -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 6</h6>
          </div>
          <div class="card-body">  
          <form action="{{ url('/$-blog') }}" method="POST" enctype="multipart/form-data" class="form">
            {{ csrf_field() }}             
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul ArtikelHelp"placeholder="Enter Judul Artikel">
              </div>
              <div class="form-group">
                <label for="select2Single">Dosen</label>
                <select class="select2-single form-control" name="semester_id" id="select2Single">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $sem)
                        <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="select2SinglePlaceholder">Mata Kuliah</label>
                <select class="select2 form-control" name="matkul_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Matkul</option>
                    @foreach($mat6 as $mat)
                        <option value="{{ $mat->id }}" @if(old('matkul_id')==$mat->id ) selected="selected" @endif >{{ $mat->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="sampul">Gambar Sampul</label>
                <input type="file" name="sampul" class="form-control" id="sampul">
              </div>
              <div class="form-group">
                  <label for="summernote6">Konten</label>
                  <textarea name="konten" class="form-control" id="summernote6" rows="10"></textarea>
                </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir semester 6 -->
    <!-- semester 7 -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 7</h6>
          </div>
          <div class="card-body">  
          <form action="{{ url('/$-blog') }}" method="POST" enctype="multipart/form-data" class="form">
            {{ csrf_field() }}              
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul ArtikelHelp"placeholder="Enter Judul Artikel">
              </div>
              <div class="form-group">
                <label for="select2Single">Dosen</label>
                <select class="select2-single form-control" name="semester_id" id="select2Single">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $sem)
                        <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="select2SinglePlaceholder">Mata Kuliah</label>
                <select class="select2 form-control" name="matkul_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Matkul</option>
                    @foreach($mat7 as $mat)
                        <option value="{{ $mat->id }}" @if(old('matkul_id')==$mat->id ) selected="selected" @endif >{{ $mat->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="sampul">Gambar Sampul</label>
                <input type="file" name="sampul" class="form-control" id="sampul">
              </div>
              <div class="form-group">
                  <label for="summernote7">Konten</label>
                  <textarea name="konten" class="form-control" id="summernote7" rows="10"></textarea>
                </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    <div class="row">
      <!-- akhir semester 7 -->
      <!-- semester 8 -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 8</h6>
          </div>
          <div class="card-body">  
          <form action="{{ url('/$-blog') }}" method="POST" enctype="multipart/form-data" class="form">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul ArtikelHelp"placeholder="Enter Judul Artikel">
              </div>
              <div class="form-group">
                <label for="select2Single">Dosen</label>
                <select class="select2-single form-control" name="semester_id" id="select2Single">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $sem)
                        <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="select2SinglePlaceholder">Mata Kuliah</label>
                <select class="select2 form-control" name="matkul_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Matkul</option>
                    @foreach($mat8 as $mat)
                        <option value="{{ $mat->id }}" @if(old('matkul_id')==$mat->id ) selected="selected" @endif >{{ $mat->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="sampul">Gambar Sampul</label>
                <input type="file" name="sampul" class="form-control" id="sampul">
              </div>
              <div class="form-group">
                  <label for="summernote8">Konten</label>
                  <textarea name="konten" class="form-control" id="summernote8" rows="10"></textarea>
                </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir semester 8 -->
    <!-- akhir -->
@endsection

@push('styles')
        <link rel="stylesheet" href=" {{ asset('summer/summernote.min.css') }}">
    @endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('summer/summernote.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(['#summernote1','#summernote2','#summernote3','#summernote4','#summernote5','#summernote6','#summernote7','#summernote8']).summernote({
                    toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'video']]
                ],
                height:400,
                popatmouse:true,
                });
            });
        </script>
@endpush

@push('scripts')
<script src="{{asset('sweet/sweetalert2.min.js')}}"></script>
<script>
    var flash = $('#flash').data('flash');
    if(flash){
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: flash,
        })
    }
</script>
@endpush