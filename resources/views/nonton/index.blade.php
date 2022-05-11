@extends('layout.see-cover')
@section('content')

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Pilih Semester</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
            </ul>
        </div>
    </div>
</div>

<!--####################### Category Starts Here ###################-->

<section class="sesion-type">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="single-sess">
                    <img src="{{asset('replay/assets/images/session/1.jpg')}}" alt="">
                    <p><i class="fas fa-book"></i> Semester 1</p>
                    <a href="/!1" class="btn btn-danger mb-4">View More</a></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-sess">
                    <img src="{{asset('replay/assets/images/session/2.jpg')}}" alt="">
                    <p><i class="fas fa-book"></i> Semester 2</p>
                    <a href="/!2" class="btn btn-danger mb-4">View More</a></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-sess">
                    <img src="{{asset('replay/assets/images/session/3.jpg')}}" alt="">
                    <p><i class="fas fa-book"></i> Semester 3</p>
                    <a href="/!3" class="btn btn-danger mb-4">View More</a></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-sess">
                    <img src="{{asset('replay/assets/images/session/4.jpg')}}" alt="">
                    <p><i class="fas fa-book"></i> Semester 4</p>
                    <a href="/!4" class="btn btn-danger mb-4">View More</a></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-sess">
                    <img src="{{asset('replay/assets/images/session/5.jpg')}}" alt="">
                    <p><i class="fas fa-book"></i> Semester 5</p>
                    <a href="/!5" class="btn btn-danger mb-4">View More</a></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-sess">
                    <img src="{{asset('replay/assets/images/session/6.jpg')}}" alt="">
                    <p><i class="fas fa-book"></i> Semester 6</p>
                    <a href="/!6" class="btn btn-danger mb-4">View More</a></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-sess">
                    <img src="{{asset('replay/assets/images/session/7.jpg')}}" alt="">
                    <p><i class="fas fa-book"></i> Semester 7</p>
                    <a href="/!7" class="btn btn-danger mb-4">View More</a></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-sess">
                    <img src="{{asset('replay/assets/images/session/8.jpg')}}" alt="">
                    <p><i class="fas fa-book"></i> Semester 8</p>
                    <a href="/!8" class="btn btn-danger mb-4">View More</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

    
        

@endsection