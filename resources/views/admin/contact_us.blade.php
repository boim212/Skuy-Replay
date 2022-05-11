@extends('layout.see')
@section('content')

<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Get And Touch</h2>
            <ul>
                <li> <a href="/"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i>Contact Admin</li>
            </ul>
        </div>
    </div>
</div>


    <div style="margin-top:0px;" class="row no-margin" data-aos="zoom-out-up" data-aos-easing="linear" data-aos-duration="1500" data-aos-delay="300">
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                <div style="padding:20px" class="col-sm-7">
                    <div data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="100">
                        <h2 >Contact Form</h2> <br>
                    </div>
                    @if (session('success'))
                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        <strong>Success!</strong>{{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    @endif
                                
                    @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                    <strong>Error!</strong>{{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    @endforeach
                    </div>
                    @endif
                    <form action="/contact_us/send" method="post" >
                    @csrf
                        <div class="row cont-row">
                            <div  class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="100">
                                <label>Enter Name </label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                                <input type="text" placeholder="Enter Your Full Name" name="nama" class="form-control input-sm" >
                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama')}}
                                    </div>
                                @endif
                                <input class="form-control" type="hidden" name="subjek" value="Ada Pesan Dari Website Skuy-Replay Min">
                            </div>
                        </div>
                        <div  class="row cont-row" >
                            <div  class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="1000">
                                <label>Email Address </label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                                <input type="text" name="tujuan" placeholder="Enter Your Email Address" class="form-control input-sm"  >
                                @if($errors->has('tujuan'))
                                    <div class="text-danger">
                                        {{ $errors->first('tujuan')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="2000">
                                <label>Mobile Number</label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="2000">
                                <input type="text" name="telpon" placeholder="Enter Your Mobile Number" class="form-control input-sm"  >
                                @if($errors->has('telpon'))
                                    <div class="text-danger">
                                        {{ $errors->first('telpon')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="3000">
                                <label for="">Choose Admin</label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="3000">
                                <select name="alamat" class="form-control" id="alamat" >
                                    <option value="">Pilih Developer</option>
                                    <option value="fx.bima.yudha.pratama@gmail.com">Yudha Developer</option>
                                    <option value="akmkevin100@gmail.com">Andreas Developer</option>
                                </select>
                                @if($errors->has('alamat'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="5000">
                                <label>Enter Message</label><span>:</span>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="4000">
                                <textarea rows="5" name="pesan" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                                @if($errors->has('pesan'))
                                    <div class="text-danger">
                                        {{ $errors->first('pesan')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3">
                                <label></label>
                            </div>
                            <div class="col-sm-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="5000">
                                <button type="submit" name="Kirim" class="btn btn-danger btn-sm">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-5">
                    <div style="margin:50px" class="serv" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="1000">
                        <h2 style="margin-top:10px;">Address</h2>
                        Lampung Utara<br>
                        Balabus (141 District)<br>
                        Bandar Jaya<br>
                        Phone : 0831-60**-****<br>
                        Email: Yudha Smith<br>
                        Email: Kevin Smith<br>
                        Web:<a href="#" class="">Skuy-Replay.com</a><br>
                    </div>    
                </div>
            </div>
        </div>
    </div>  
@endsection