<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="{{asset('img/logo.jpg')}}" style="border-radius:50%;" rel="icon">
        <title>{{$judul}}</title>
        <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/css/ruang-admin.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('sweet/sweetalert2.min.css')}}" type="text/css">
        @stack('styles')
    </head>
    <body id="page-top">
      <div id="wrapper">
        @section('sidebar')
        @include('layout.inc.sidebar')
        @show

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
        @section('header')
        @include('layout.inc.header')
        @show
        @if (Session::has('berhasil'))
          <div id="notif" data-notif="{{ Session::get('berhasil') }}"></div>
          @endif
        @yield('content')
        </div>
        <!---Container Fluid-->
      </div>
        @section('footer')
        @include('layout.inc.footer')
        @show

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        
        <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('admin/js/ruang-admin.min.js')}}"></script>
        <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>  

        <script src="{{asset('sweet/sweetalert2.min.js')}}"></script>
        <script type="text/javascript">
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
        


        @stack('scripts')
    </body>

</html>
