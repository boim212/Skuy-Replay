@extends('layout.auth')
@section('content')

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="{{asset('img/logo.jpg')}}" style="width: 100px; hight: 100px; border-radius:50%" alt="logo.png">
                    <h1 class="h4 text-gray-900 mb-4">Sending Email | Administrator</h1>
                  </div>
                  @if(session('errors'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Something it's wrong:
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                      <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                  </div>
                  @endif
                  @if (Session::has('success'))
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>
                  @endif
                  @if (Session::has('error'))
                  <div class="alert alert-danger">
                      {{ Session::get('error') }}
                  </div>
                  @endif
                  <form class="user" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                    <button type="submit button" class="btn btn-primary btn-block">Sending Email</button>
                    </div>
                    <hr>
                  </form>
                  <div class="text-center">
                      <a class="font-weight-bold small" href="{{ route('login') }}">Sudah Ingat Kata Sandi Anda!</a>
                      <small class="text-gray-900" id="clock"></small>
                      <small class="text-gray-900" id="date"></small>
                    </div>
                    <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
<script type="text/javascript">
		function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
                a_p = "AM";
            } else {
                a_p = "PM";
            }
            if (curr_hour == 0) {
                curr_hour = 12;
            }
            if (curr_hour > 12) {
                curr_hour = curr_hour - 12;
            }
            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);
         document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }

		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
</script>

<script type='text/javascript'>
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			var hasil = (thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
      document.getElementById('date').innerHTML= hasil;
		</script>
@endpush