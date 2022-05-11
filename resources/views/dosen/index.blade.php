@extends('layout.app')
@section('content')



<!-- Container Fluid-->
<div class="container-fluid pb-lg-5 mb-5" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Dosen</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/$')}}">Home</a></li>
        <li class="breadcrumb-item">Tambah Data Dosen</li>
      </ol>
    </div>
    
    <!-- mulai ambil di sini -->
    <!-- semester 1 -->
    <div class="row pb-5 mb-5">
      <div class="col-lg-12 mb-5">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Dosen Semester 1 - Semester 8</h6>
          </div>
          
          <div class="card-body">  
            <form action="{{url('/$-MatDos-dos')}}" method="POST" class="form">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="semester_id">Semester</label>
                <select name="semester_id" id="semester_id" class="form-control @error('semester_id') is-invalid @enderror">
                    <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                    @foreach($sms as $semester)
                        <option value="{{ $semester->id}}" @if(old('semesteregori_id')== $semester->id) selected="selected" @endif>{{$semester->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="namaDosen">Nama Dosen</label>
                <input name="name" type="text" class="form-control" id="namaDosen" aria-describedby="DosenRekamanHelp"placeholder="Enter Nama Dosen">
                @error('name')
                <span class="text-danger" tabindex="0"data-trigger="focus" title="Dismissible popover" data-content="{{$message}}">{{$message}}</span>
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
@endsection

@push('scripts')

      
@endpush