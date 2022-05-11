@extends('layout.see')
@section('content')

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Recent Videos {{$sms}}</h2>
            <ul>
                <li> <a href="/"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="/!<?= $semester_id; ?>"><i class="fas fa-angle-double-right"></i>Matkul</a></li>
                <li><i class="fas fa-angle-double-right"></i> {{$judul}}</li>
            </ul>
        </div>
    </div>
</div>

<!--####################### Latest Videos Starts Here ###################-->
<div class="latest-video latest-video container-fluid">
    <div class="container">
        <div class="row no-margin video-title">
            <h6>
                <i class="fas fa-book"></i>
                Latest Video Videos</h6>
        </div>
        <div class="video-row row">
            @foreach($rekaman as $rek)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->slug; ?>">
                    <div class="video-card">
                        <img src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="row details no-margin">
                            <p><h6>{{ $rek->judul}}</h6></p>
                        </div>
                        <div class="row details no-margin">
                            <div class="col-md-6 col-6 no-padding left">
                                <i class="far fa-user"></i>
                                <span>{{ $rek->matkul->dosen->name }}</span>
                                
                            </div>
                            <div class="col-md-6 col-6 no-padding right">
                                <i class="fas fa-graduation-cap"></i>
                                <span>{{ $rek->kelas }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection