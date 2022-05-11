@extends('layout.daftar')
@section('content')

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Recent Videos Semester 1 
                <i class="fas fa-angle-double-right"></i>Semester 8
            </h2>
            <ul>
                <li> <a href="/"><i class="fas fa-home"></i> Home</a></li>
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
                All Videos</h6>
        </div>
        <div class="video-row row">
            @foreach($rek1 as $rek)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->slug; ?>">
                    <div class="video-card">
                        <img src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="row details no-margin">
                            <h6>{{ $rek->judul}}</h6>
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
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p><h6>{{ $rek->semester->name}}</h6></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach($rek2 as $rek)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->judul; ?>">
                    <div class="video-card">
                        <img src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="row details no-margin">
                            <h6>{{ $rek->judul}}</h6>
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
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p><h6>{{ $rek->semester->name}}</h6></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach($rek3 as $rek)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->judul; ?>">
                    <div class="video-card">
                        <img src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="row details no-margin">
                            <h6>{{ $rek->judul}}</h6>
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
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p><h6>{{ $rek->semester->name}}</h6></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach($rek4 as $rek)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->judul; ?>">
                    <div class="video-card">
                        <img src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="row details no-margin">
                            <h6>{{ $rek->judul}}</h6>
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
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p><h6>{{ $rek->semester->name}}</h6></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach($rek5 as $rek)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->judul; ?>">
                    <div class="video-card">
                        <img src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="row details no-margin">
                            <h6>{{ $rek->judul}}</h6>
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
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p><h6>{{ $rek->semester->name}}</h6></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach($rek6 as $rek)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->judul; ?>">
                    <div class="video-card">
                        <img src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="row details no-margin">
                            <h6>{{ $rek->judul}}</h6>
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
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p><h6>{{ $rek->semester->name}}</h6></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach($rek7 as $rek)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->judul; ?>">
                    <div class="video-card">
                        <img src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="row details no-margin">
                            <h6>{{ $rek->judul}}</h6>
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
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p><h6>{{ $rek->semester->name}}</h6></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            @foreach($rek8 as $rek)
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->judul; ?>">
                    <div class="video-card">
                        <img src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="row details no-margin">
                            <h6>{{ $rek->judul}}</h6>
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
                        <hr>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p><h6>{{ $rek->semester->name}}</h6></p>
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