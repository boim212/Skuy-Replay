@extends('layout.app')
@section('content')
@if(Session::has('berhasil'))
<div id="flash" data-flash="{{Session::get('berhasil')}}"></div>
@endif

@if(Session::has('user'))
<div id="user" data-user="{{Session::get('user')}}"></div>
@endif

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </div>
    
    <div class="row mb-3">
      <!-- rekamana 1 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Rekaman</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rek1}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 1</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-video fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- rekamana 2 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Rekaman</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rek2}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 2</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-video fa-2x text-danger"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- rekamana 3 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Rekaman</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rek3}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 3</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-video fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- rekamana 4 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Rekaman</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rek4}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 4</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-video fa-2x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- rekamana 5 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Rekaman</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rek5}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 5</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-video fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- rekamana 6 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Rekaman</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rek6}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 6</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-video fa-2x text-danger"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- rekamana 7 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Rekaman</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rek7}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 7</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-video fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- rekamana 8 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Rekaman</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$rek8}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 8</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-video fa-2x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Dosen 1 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Dosen</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$dos1}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 1</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Dosen 2 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Dosen</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$dos2}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 2</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Dosen 3 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Dosen</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$dos3}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 3</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Dosen 4 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Dosen</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$dos4}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 4</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Dosen 5 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Dosen</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$dos5}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 5</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Dosen 6 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Dosen</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$dos6}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 6</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Dosen 7 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Dosen</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$dos7}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 7</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Dosen 8 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Dosen</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$dos8}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 8</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Matkul 1 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mata Kuliah</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mat1}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 1</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Matkul 2 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mata Kuliah</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mat2}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 2</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Matkul 3 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mata Kuliah</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mat3}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 3</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Matkul 4 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mata Kuliah</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mat4}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 4</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Matkul 5 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mata Kuliah</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mat5}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 5</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Matkul 6 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mata Kuliah</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mat6}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 6</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Matkul 7 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mata Kuliah</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mat7}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 7</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Matkul 8 Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mata Kuliah</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mat8}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2">
                  <span>Semester 8</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

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

    var user = $('#user').data('user');
    if(user){
        Swal.fire({
            position: 'top-end',
            title: user,
            width: 1000,
            showClass: {
                popup: 'animate__animated animate__fadeInRight'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutRight'
            }
        }) -->
        <!-- // Swal.fire({
        //     icon: 'success',
        //     title: 'Success',
        //     text: user,
        // }) -->
    <!-- }
</script> -->
@endpush