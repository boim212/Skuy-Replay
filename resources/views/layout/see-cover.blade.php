<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Video Streamimg Website Template | Smarteyeapps.com</title>
    
        <link rel="shortcut icon" href="{{asset('replay/assets/images/fav.jpg') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('replay/assets/css/bootstrap.min.css')}}">
        <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('replay/assets/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('replay/assets/css/style.css')}}" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <style>
            .logo{
                font-family: 'Lobster', cursive;
                font-size: 46px;
            }
            .logo2{
                font-family: 'Lobster', cursive;
                font-size: 30px;
            }
        </style>
        @stack('styles')
    </head>
    <body>
        @section('navbar-cover')
        @include('layout.see.navbar-cover')
        @show

        @yield('content')

        @section('footer')
        @include('layout.see.footer')
        @show
        <script type="text/javascript" src="{{asset('replay/assets/js/jquery-3.2.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('replay/assets/js/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('replay/assets/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('replay/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('replay/assets/js/script.js')}}"></script>
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