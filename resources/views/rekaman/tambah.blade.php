@extends('layout.app')
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Rekaman Kuliah</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/$')}}">Home</a></li>
        <li class="breadcrumb-item">Tambah Data Rekaman Kuliah</li>
      </ol>
    </div>
    
    <!-- mulai ambil di sini -->
    <!-- semester 1 -->
    <div class="row">
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 1</h6>
          </div>
          <div class="card-body">  
            <form action="/$1-rekaman" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="select2SinglePlaceholder">Pilih Semester</label>
                <select class="select2 form-control" value="1" name="semester_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                  @foreach($sms as $sem)
                      <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Rekaman</label>
                <input name="judul"  type="text" class="form-control" id="judul" aria-describedby="Judul RekamanHelp"placeholder="Enter Judul Rekaman">
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
                <label for="kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="kelas" aria-describedby="kelas RekamanHelp"placeholder="Enter Kelas">
              </div>
              <div class="form-group simple-date3" >
                <label for="decadeView">Tanggal Rekaman Upload</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input name="tanggal" data-provide="datepicker" type="text" class="form-control" id="decadeView" placeholder="Masukkan Tanggal Upload Video">
                  </div>
              </div>
              <div class="form-group">
                <label for="basic-url">Link Video Rekaman</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">url</span>
                  </div>
                  <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Link Rekaman Kuliah">
                </div>
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
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 2</h6>
          </div>
          <div class="card-body">  
            <form action="/$2-rekaman" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="select2SinglePlaceholder">Pilih Semester</label>
                <select class="select2 form-control" name="semester_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                  @foreach($sms as $sem)
                      <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Rekaman</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul RekamanHelp"placeholder="Enter Judul Rekaman">
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
                <label for="kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="kelas" aria-describedby="kelas RekamanHelp"placeholder="Enter Kelas">
              </div>
              <div class="form-group simple-date3" >
                <label for="decadeView">Tanggal Rekaman Upload</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input name="tanggal" data-provide="datepicker" type="text" class="form-control" id="decadeView" placeholder="Masukkan Tanggal Upload Video">
                  </div>
              </div>
              <div class="form-group">
                <label for="basic-url">Link Video Rekaman</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">url</span>
                  </div>
                  <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Link Rekaman Kuliah">
                </div>
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
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 3</h6>
          </div>
          <div class="card-body">  
            <form action="/$3-rekaman" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="select2SinglePlaceholder">Pilih Semester</label>
                <select class="select2 form-control" name="semester_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                  @foreach($sms as $sem)
                      <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Rekaman</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul RekamanHelp"placeholder="Enter Judul Rekaman">
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
                <label for="kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="kelas" aria-describedby="kelas RekamanHelp"placeholder="Enter Kelas">
              </div>
              <div class="form-group simple-date3" >
                <label for="decadeView">Tanggal Rekman Upload</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input name="tanggal" data-provide="datepicker" type="text" class="form-control" id="decadeView" placeholder="Masukkan Tanggal Upload Video">
                  </div>
              </div>
              <div class="form-group">
                <label for="basic-url">Link Video Rekaman</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">url</span>
                  </div>
                  <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Link Rekaman Kuliah">
                </div>
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
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 4</h6>
          </div>
          <div class="card-body">  
            <form action="/$4-rekaman" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="select2SinglePlaceholder">Pilih Semester</label>
                <select class="select2 form-control" name="semester_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                  @foreach($sms as $sem)
                      <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Rekaman</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul RekamanHelp"placeholder="Enter Judul Rekaman">
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
                <label for="kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="kelas" aria-describedby="kelas RekamanHelp"placeholder="Enter Kelas">
              </div>
              <div class="form-group simple-date3" >
                <label for="decadeView">Tanggal Rekaman Upload</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input name="tanggal" data-provide="datepicker" type="text" class="form-control" id="decadeView" placeholder="Masukkan Tanggal Upload Video">
                  </div>
              </div>
              <div class="form-group">
                <label for="basic-url">Link Video Rekaman</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">url</span>
                  </div>
                  <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Link Rekaman Kuliah">
                </div>
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
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 5</h6>
          </div>
          <div class="card-body">  
            <form action="/$5-rekaman" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="select2SinglePlaceholder">Pilih Semester</label>
                <select class="select2 form-control" name="semester_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                  @foreach($sms as $sem)
                      <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Rekaman</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul RekamanHelp"placeholder="Enter Judul Rekaman">
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
                <label for="kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="kelas" aria-describedby="kelas RekamanHelp"placeholder="Enter kelas">
              </div>
              <div class="form-group simple-date3" >
                <label for="decadeView">Tanggal Rekaman Upload</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input name="tanggal" data-provide="datepicker" type="text" class="form-control" id="decadeView" placeholder="Masukkan Tanggal Upload Video">
                  </div>
              </div>
              <div class="form-group">
                <label for="basic-url">Link Video Rekaman</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">url</span>
                  </div>
                  <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Link Rekaman Kuliah">
                </div>
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
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 6</h6>
          </div>
          <div class="card-body">  
            <form action="/$6-rekaman" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="select2SinglePlaceholder">Pilih Semester</label>
                <select class="select2 form-control" name="semester_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                  @foreach($sms as $sem)
                      <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Rekaman</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul RekamanHelp"placeholder="Enter Judul Rekaman">
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
                <label for="kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="kelas" aria-describedby="kelas RekamanHelp"placeholder="Enter Kelas">
              </div>
              <div class="form-group simple-date3" >
                <label for="decadeView">Tanggal Rekaman Upload</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input name="tanggal" data-provide="datepicker" type="text" class="form-control" id="decadeView" placeholder="Masukkan Tanggal Upload Video">
                  </div>
              </div>
              <div class="form-group">
                <label for="basic-url">Link Video Rekaman</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">url</span>
                  </div>
                  <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Link Rekaman Kuliah">
                </div>
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
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 7</h6>
          </div>
          <div class="card-body">  
            <form action="/$7-rekaman" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="select2SinglePlaceholder">Pilih Semester</label>
                <select class="select2 form-control" name="semester_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                  @foreach($sms as $sem)
                      <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Rekaman</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul RekamanHelp"placeholder="Enter Judul Rekaman">
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
                <label for="kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="kelas" aria-describedby="kelas RekamanHelp"placeholder="Enter Kelas">
              </div>
              <div class="form-group simple-date3" >
                <label for="decadeView">Tanggal Rekaman Upload</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input name="tanggal" data-provide="datepicker" type="text" class="form-control" id="decadeView" placeholder="Masukkan Tanggal Upload Video">
                  </div>
              </div>
              <div class="form-group">
                <label for="basic-url">Link Video Rekaman</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">url</span>
                  </div>
                  <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Link Rekaman Kuliah">
                </div>
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
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekaman Semester 8</h6>
          </div>
          <div class="card-body">  
            <form action="/$8-rekaman" method="POST" class="form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="select2SinglePlaceholder">Pilih Semester</label>
                <select class="select2 form-control" name="semester_id" id="select2SinglePlaceholder">
                  <option value="" @if( old('semester_id')=='' or old('semester_id')==0 ) selected="selected" @endif >Pilih Semester</option>
                  @foreach($sms as $sem)
                      <option value="{{ $sem->id }}" @if(old('semester_id')==$sem->id ) selected="selected" @endif >{{ $sem->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="judul">Judul Rekaman</label>
                <input name="judul" type="text" class="form-control" id="judul" aria-describedby="Judul RekamanHelp"placeholder="Enter Judul Rekaman">
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
                <label for="kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="kelas" aria-describedby="kelas RekamanHelp"placeholder="Enter Kelas">
              </div>
              <div class="form-group simple-date3" >
                <label for="decadeView">Tanggal Rekaman Upload</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input name="tanggal" data-provide="datepicker" type="text" class="form-control" id="decadeView" placeholder="Masukkan Tanggal Upload Video">
                  </div>
              </div>
              <div class="form-group">
                <label for="basic-url">Link Video Rekaman</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">url</span>
                  </div>
                  <input type="text" name="link" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Link Rekaman Kuliah">
                </div>
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
    <!-- Select2 -->
    <link href="{{asset('admin/vendor/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap DatePicker -->  
    <link href="{{asset('admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" >
@endpush

@push('scripts')
    <!-- Select2 -->
    <script src="{{asset('admin/vendor/select2/dist/js/select2.min.js')}}"></script>
    <!-- Bootstrap Datepicker -->
    <script src="{{asset('admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Javascript for this page -->
    <script>
        $(document).ready(function () {


        $('.select2-single').select2({
            placeholder="Pilih Nama Dosen"
        });

        // Select2 Single  with Placeholder
        $('.select2').select2({
            placeholder: "Pilih Nama Mata Kuliah",
            allowClear: true
        }); 

        // Select2 Multiple
        $('.select2-multiple').select2();

        
        $('.simple-date3 .input-group.date').datepicker({
            startView: 2,
            format: 'dd/mm/yyyy',        
            autoclose: true,     
            todayHighlight: true,   
            todayBtn: 'linked',
        });

        });
    </script>
@endpush