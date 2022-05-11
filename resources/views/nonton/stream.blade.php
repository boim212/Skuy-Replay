@extends('layout.see')
@section('content')

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>{{$rekaman->judul}}</h2>
            <ul>
                <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="/!<?= $rekaman->matkul->semester_id; ?>"><i class="fas fa-angle-double-right"></i>{{$rekaman->matkul->name}}</a></li>
                <li><i class="fas fa-angle-double-right"></i>{{$rekaman->judul}}</li>
            </ul>
        </div>
    </div>
</div>
    
<!--####################### Video Blog Starts Here ###################-->
<div class="container-fluid video-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-8">
                <div class="row no-margin video-cover">
                    <iframe  height="415" src="https://www.youtube.com/embed/{{$rekaman->link_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>
                            <i class="far fa-user"></i><span>{{$rekaman->matkul->dosen->name}}</span> | <i class="fas fa-graduation-cap"></i><span>{{$rekaman->kelas}}</span> | <span>{{$rekaman->matkul->name}}</span>
                        </p>
                        <p>
                            <small>Published on {{$rekaman->tanggal}}</small>
                        </p>
                </div>      
                <p></p>
            </div>
        </div>
        
        <hr id="rekaman_lainnya">
        <div class="row">
            <div class="col-md-12">
                <div class="row no-margin video-title">
                    <hr>
                    <h6><i class="fas fa-book"></i> Related Videos In {{$rekaman->matkul->semester->name}}</h6>
                </div> 
            </div>
            @foreach($data as $rek)
            <div class="col-md-4">
                <a href="/!<?= $rek->matkul->semester_id; ?>/stream/<?= $rek->id; ?>/<?= $rek->slug; ?>">
                    <div class="contri-bghy">
                        <div class="image">
                            <img style="width:125px; height: px;" src="https://img.youtube.com/vi/{{$rek->link_id}}/hqdefault.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h5>{{ $rek->judul}}</h5>
                            <span>{{ $rek->matkul->dosen->name}}</span><br>
                            <span>{{ $rek->matkul->name}}</h6><br>
                            <span>Posted on: {{$rek->tanggal}}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection