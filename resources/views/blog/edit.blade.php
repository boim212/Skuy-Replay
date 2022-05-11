@extends('layout.app')
@section('content')

@if(Session::has('berhasil'))
<!-- <div id="flash" data-flash="{{Session::get('berhasil')}}"></div> -->
@endif

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Artikel Materi Kuliah</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/$')}}">Home</a></li>
            <li class="breadcrumb-item">Edit Data Artikel</li>
        </ol>
    </div>
    
    <!-- mulai ambil di sini -->
    <!-- semester 1 -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Artikel {{$blog->semester->name}}</h6>
                </div>
                <div class="card-body">  
                    <form method="post" action="{{ url('/$-blog/update',$blog->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="semester_id" value="{{ old('semester_id',$blog->semester_id) }}">
                    <p><h6>Gambar Sampul</h6><img src="{{ asset('storage/'.$blog->sampul)}}" class="img-thumbnail @error('sampul') is-invalid @enderror" accept="image/*" width="500" alt=""></p>
                    <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                        <input name="judul" value="{{ old('judul',$blog->judul) }}" type="text" class="form-control" id="judul" aria-describedby="Judul ArtikelHelp"placeholder="Enter Judul Artikel">
                    </div>
                    <div class="form-group">
                        <label for="select2SinglePlaceholder">Mata Kuliah</label>
                        <select class="select2 form-control" name="matkul_id" id="select2SinglePlaceholder">
                            <option value="" @if( old('matkul_id')=='' or old('matkul_id')==0 ) selected="selected" @endif >Pilih Mata Kuliah</option>
                            @foreach($mats as $mat)
                            <option value="{{ $mat->id }}"@if(old('matkul',$blog->matkul_id)== $mat->id) selected="selected" @endif>{{$mat->name}} + {{$mat->dosen->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sampul">Gambar Sampul</label>
                        <input type="file" name="sampul" class="form-control" accept="image/">
                        @error('file')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="summernote1">Konten</label>
                        <textarea name="konten" class="form-control" id="summernote" value="{{ old('konten',$blog->konten) }}" rows="10">{{ $blog->konten }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
        <link rel="stylesheet" href=" {{ asset('summer/summernote.min.css') }}">
    @endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('summer/summernote.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#summernote').summernote({
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