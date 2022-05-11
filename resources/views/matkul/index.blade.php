@extends('layout.app')
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Mata Kuliah</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/$')}}">Home</a></li>
        <li class="breadcrumb-item">Tambah Data Mata Kuliah</li>
      </ol>
    </div>
    
    <!-- mulai ambil di sini -->
    <!-- semester 1 -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mata Kuliah Semester 1</h6>
          </div>
          <div class="card-body">  
            <form action="{{url('/$-MatDos-mat')}}" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="semester_id">Semester</label>
                <select name="semester_id" id="semester_id" class="form-control @error('semester_id') is-invalid @enderror">
                    <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $semester)
                        <option value="{{ $semester->id}}" @if(old('semester_id')== $semester->id) selected="selected" @endif>{{$semester->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dosen_id">Nama Dosen</label>
                <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                    <option value="" @if( old('dosen_id')=='' or old('dosen_id')==0 ) selected="selected" @endif >Pilih Nama Dosen</option>
                    @foreach($dos1 as $dosen)
                        <option value="{{ $dosen->id}}" @if(old('dosen_id')== $dosen->id) selected="selected" @endif>{{$dosen->semester->name}} + {{$dosen->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group pb-3">
                <label >Nama Mata Kuliah</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="MatkulRekamanHelp"placeholder="Enter Mata Kuliah Rekaman">
                @error('name')
                <span class="text-danger @error('name') is-invalid @enderror" tabindex="0"data-trigger="focus" title="Dismissible popover" data-content="{{$message}}">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- akhir semester 1 -->
      <!-- semester 2 -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mata Kuliah Semester 2</h6>
          </div>
          <div class="card-body">  
            <form action="{{url('/$-MatDos-mat')}}" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="semester_id">Semester</label>
                <select name="semester_id" id="semester_id" class="form-control @error('semester_id') is-invalid @enderror">
                    <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $semester)
                        <option value="{{ $semester->id}}" @if(old('semester_id')== $semester->id) selected="selected" @endif>{{$semester->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dosen_id">Nama Dosen</label>
                <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                    <option value="" @if( old('dosen_id')=='' or old('dosen_id')==0 ) selected="selected" @endif >Pilih Nama Dosen</option>
                    @foreach($dos2 as $dosen)
                        <option value="{{ $dosen->id}}" @if(old('dosen_id')== $dosen->id) selected="selected" @endif>{{$dosen->semester->name}} + {{$dosen->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group pb-3">
                <label >Nama Mata Kuliah</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="MatkulRekamanHelp"placeholder="Enter Mata Kuliah Rekaman">
                @error('name')
                <span class="text-danger @error('name') is-invalid @enderror" tabindex="0"data-trigger="focus" title="Dismissible popover" data-content="{{$message}}">{{$message}}</span>
                @enderror
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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mata Kuliah Semester 3</h6>
          </div>
          <div class="card-body">  
            <form action="{{url('/$-MatDos-mat')}}" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="semester_id">Semester</label>
                <select name="semester_id" id="semester_id" class="form-control @error('semester_id') is-invalid @enderror">
                    <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $semester)
                        <option value="{{ $semester->id}}" @if(old('semester_id')== $semester->id) selected="selected" @endif>{{$semester->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dosen_id">Nama Dosen</label>
                <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                    <option value="" @if( old('dosen_id')=='' or old('dosen_id')==0 ) selected="selected" @endif >Pilih Nama Dosen</option>
                    @foreach($dos3 as $dosen)
                        <option value="{{ $dosen->id}}" @if(old('dosen_id')== $dosen->id) selected="selected" @endif>{{$dosen->semester->name}} + {{$dosen->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group pb-3">
                <label >Nama Mata Kuliah</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="MatkulRekamanHelp"placeholder="Enter Mata Kuliah Rekaman">
                @error('name')
                <span class="text-danger @error('name') is-invalid @enderror" tabindex="0"data-trigger="focus" title="Dismissible popover" data-content="{{$message}}">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- akhir semester 3 -->
      <!-- semester 4 -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mata Kuliah Semester 4</h6>
          </div>
          <div class="card-body">  
            <form action="{{url('/$-MatDos-mat')}}" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="semester_id">Semester</label>
                <select name="semester_id" id="semester_id" class="form-control @error('semester_id') is-invalid @enderror">
                    <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $semester)
                        <option value="{{ $semester->id}}" @if(old('semester_id')== $semester->id) selected="selected" @endif>{{$semester->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dosen_id">Nama Dosen</label>
                <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                    <option value="" @if( old('dosen_id')=='' or old('dosen_id')==0 ) selected="selected" @endif >Pilih Nama Dosen</option>
                    @foreach($dos4 as $dosen)
                        <option value="{{ $dosen->id}}" @if(old('dosen_id')== $dosen->id) selected="selected" @endif>{{$dosen->semester->name}} + {{$dosen->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group pb-3">
                <label >Nama Mata Kuliah</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="MatkulRekamanHelp"placeholder="Enter Mata Kuliah Rekaman">
                @error('name')
                <span class="text-danger @error('name') is-invalid @enderror" tabindex="0"data-trigger="focus" title="Dismissible popover" data-content="{{$message}}">{{$message}}</span>
                @enderror
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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mata Kuliah Semester 5</h6>
          </div>
          <div class="card-body">  
            <form action="{{url('/$-MatDos-mat')}}" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="semester_id">Semester</label>
                <select name="semester_id" id="semester_id" class="form-control @error('semester_id') is-invalid @enderror">
                    <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $semester)
                        <option value="{{ $semester->id}}" @if(old('semester_id')== $semester->id) selected="selected" @endif>{{$semester->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dosen_id">Nama Dosen</label>
                <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                    <option value="" @if( old('dosen_id')=='' or old('dosen_id')==0 ) selected="selected" @endif >Pilih Nama Dosen</option>
                    @foreach($dos5 as $dosen)
                        <option value="{{ $dosen->id}}" @if(old('dosen_id')== $dosen->id) selected="selected" @endif>{{$dosen->semester->name}} + {{$dosen->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group pb-3">
                <label >Nama Mata Kuliah</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="MatkulRekamanHelp"placeholder="Enter Mata Kuliah Rekaman">
                @error('name')
                <span class="text-danger @error('name') is-invalid @enderror" tabindex="0"data-trigger="focus" title="Dismissible popover" data-content="{{$message}}">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- akhir semester 5 -->
      <!-- semester 6 -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mata Kuliah Semester 6</h6>
          </div>
          <div class="card-body">  
            <form action="{{url('/$-MatDos-mat')}}" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="semester_id">Semester</label>
                <select name="semester_id" id="semester_id" class="form-control @error('semester_id') is-invalid @enderror">
                    <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $semester)
                        <option value="{{ $semester->id}}" @if(old('semester_id')== $semester->id) selected="selected" @endif>{{$semester->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dosen_id">Nama Dosen</label>
                <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                    <option value="" @if( old('dosen_id')=='' or old('dosen_id')==0 ) selected="selected" @endif >Pilih Nama Dosen</option>
                    @foreach($dos6 as $dosen)
                        <option value="{{ $dosen->id}}" @if(old('dosen_id')== $dosen->id) selected="selected" @endif>{{$dosen->semester->name}} + {{$dosen->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group pb-3">
                <label >Nama Mata Kuliah</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="MatkulRekamanHelp"placeholder="Enter Mata Kuliah Rekaman">
                @error('name')
                <span class="text-danger @error('name') is-invalid @enderror" tabindex="0"data-trigger="focus" title="Dismissible popover" data-content="{{$message}}">{{$message}}</span>
                @enderror
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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mata Kuliah Semester 7</h6>
          </div>
          <div class="card-body">  
            <form action="{{url('/$-MatDos-mat')}}" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="semester_id">Semester</label>
                <select name="semester_id" id="semester_id" class="form-control @error('semester_id') is-invalid @enderror">
                    <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $semester)
                        <option value="{{ $semester->id}}" @if(old('semester_id')== $semester->id) selected="selected" @endif>{{$semester->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dosen_id">Nama Dosen</label>
                <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                    <option value="" @if( old('dosen_id')=='' or old('dosen_id')==0 ) selected="selected" @endif >Pilih Nama Dosen</option>
                    @foreach($dos7 as $dosen)
                        <option value="{{ $dosen->id}}" @if(old('dosen_id')== $dosen->id) selected="selected" @endif>{{$dosen->semester->name}} + {{$dosen->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group pb-3">
                <label >Nama Mata Kuliah</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="MatkulRekamanHelp"placeholder="Enter Mata Kuliah Rekaman">
                @error('name')
                <span class="text-danger @error('name') is-invalid @enderror" tabindex="0"data-trigger="focus" title="Dismissible popover" data-content="{{$message}}">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <button type="submit button" class="btn btn-outline-primary btn-block">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- akhir semester 7 -->
      <!-- semester 8 -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mata Kuliah Semester 8</h6>
          </div>
          <div class="card-body">  
            <form action="{{url('/$-MatDos-mat')}}" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="semester_id">Semester</label>
                <select name="semester_id" id="semester_id" class="form-control @error('semester_id') is-invalid @enderror">
                    <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $semester)
                        <option value="{{ $semester->id}}" @if(old('semester_id')== $semester->id) selected="selected" @endif>{{$semester->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="dosen_id">Nama Dosen</label>
                <select name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror">
                    <option value="" @if( old('dosen_id')=='' or old('dosen_id')==0 ) selected="selected" @endif >Pilih Nama Dosen</option>
                    @foreach($dos8 as $dosen)
                        <option value="{{ $dosen->id}}" @if(old('dosen_id')== $dosen->id) selected="selected" @endif>{{$dosen->semester->name}} + {{$dosen->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group pb-3">
                <label >Nama Mata Kuliah</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="MatkulRekamanHelp"placeholder="Enter Mata Kuliah Rekaman">
                @error('name')
                <span class="text-danger @error('name') is-invalid @enderror" tabindex="0"data-trigger="focus" title="Dismissible popover" data-content="{{$message}}">{{$message}}</span>
                @enderror
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