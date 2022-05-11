@extends('layout.see')
@section('content')

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Pilih Mata Kuliah</h2>
            <ul>
                <li> <a href="/"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Mata Kuliah</li>
            </ul>
        </div>
    </div>
</div>

<!--####################### Category Starts Here ###################-->

<section class="sesion-type">
    <div class="container">
        <div class="row text-center">
            @foreach($matkul as $mat)
            <div class="col-md-3 col-sm-6">
                <div class="single-sess">
                    <img src="<?= $foto; ?>" alt="">
                    <p><i class="fas fa-book"></i> {{ $mat->name }}</p>
                    <a href="/!<?= $mat->semester_id; ?>/<?= $mat->id; ?>-<?= Str::slug($mat->name); ?>" class="btn btn-danger mb-4">View More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

    
        

@endsection