<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Skuy-Replay | Tempat Replay Terbaik</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('replay/aset2/assets/favicon.ico')}}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('replay/aset2/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand">Skuy-Replay | Tempat Replay Terbaik</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/!-Artikel">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8"> 
                    <!-- Nested row for non-featured blog posts-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Semua Artikel Materi Berdasarkan Mata Kuliah {{$judulMat->name}}</h1>
                            <hr>
                        </header>
                    </article>
                    <div class="row">
                        @foreach($blog as $blogs)
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ asset('public/storage/'.$blogs->sampul) }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$blogs->created_at->diffForHumans()}}</div>
                                    <h2 class="card-title h4">{{$blogs->judul}}</h2>
                                    <p class="card-text">{!! Str::limit(strip_tags($blogs->konten),100) !!}</p>
                                    <a class="btn btn-primary" href="{{url('/reading-artikel-materi',[$blogs->id,$blogs->matkul->name,$blogs->slug])}}">Read more →</a>
                                </div>
                                <div class="card-footer">
                                    Published On {{$blogs->created_at->format("d F, Y")}}
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($matkul as $mat)
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-2">
                                        <li class="py-2"><a href="{{url('/!-Artikel-Mata-Kuliah',[$mat->id,Str::slug($mat->name )]) }}">{{$mat->name}}</a></li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Note : for brokuhh</div>
                        <div class="card-body text-danger">Untuk Mata Kuliah Yang Tidak Ada Postingannya Harap Bersabar Karna Admin Belum Membuat Postingan Di Mata Kuliah Tersebut</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('replay/aset2/js/scripts.js')}}"></script>
    </body>
</html>
