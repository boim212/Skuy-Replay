<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rekaman1;
use App\Models\Rekaman2;
use App\Models\Rekaman3;
use App\Models\Rekaman4;
use App\Models\Rekaman5;
use App\Models\Rekaman6;
use App\Models\Rekaman7;
use App\Models\Rekaman8;
use App\Models\Semester;
use App\Models\Dosen;
use App\Models\Matkul;

class LihatController extends Controller
{
    public function index()
    {
        return view('nonton.index');
    }

    public function sms1()
    {
        $foto = "replay/assets/images/session/1.jpg";
        $mat = Semester::find(1);
        $matkul = $mat->matkul;
        $semester_id = $mat->id;
        return view('nonton.matkul',compact('matkul','semester_id'),['foto'=> $foto]);
    }

    public function sms2()
    {
        $foto = "replay/assets/images/session/2.jpg";
        $mat = Semester::find(2);
        $matkul = $mat->matkul;
        $semester_id = $mat->id;
        return view('nonton.matkul',compact('matkul','semester_id'),['foto'=> $foto]);
    }

    public function sms3()
    {
        $foto = "replay/assets/images/session/3.jpg";
        $mat = Semester::find(3);
        $matkul = $mat->matkul;
        $semester_id = $mat->id;
        return view('nonton.matkul',compact('matkul','semester_id'),['foto'=> $foto]);
    }

    public function sms4()
    {
        $foto = "replay/assets/images/session/4.jpg";
        $mat = Semester::find(4);
        $matkul = $mat->matkul;
        $semester_id = $mat->id;
        return view('nonton.matkul',compact('matkul','semester_id'),['foto'=> $foto]);
    }

    public function sms5()
    {
        $foto = "replay/assets/images/session/5.jpg";
        $mat = Semester::find(5);
        $matkul = $mat->matkul;
        $semester_id = $mat->id;
        return view('nonton.matkul',compact('matkul','semester_id'),['foto'=> $foto]);
    }

    public function sms6()
    {
        $foto = "replay/assets/images/session/6.jpg";
        $mat = Semester::find(6);
        $matkul = $mat->matkul;
        $semester_id = $mat->id;
        return view('nonton.matkul',compact('matkul','semester_id'),['foto'=> $foto]);
    }

    public function sms7()
    {
        $foto = "replay/assets/images/session/7.jpg";
        $mat = Semester::find(7);
        $matkul = $mat->matkul;
        $semester_id = $mat->id;
        return view('nonton.matkul',compact('matkul','semester_id'),['foto'=> $foto]);
    }

    public function sms8()
    {
        $foto = "replay/assets/images/session/8.jpg";
        $mat = Semester::find(8);
        $matkul = $mat->matkul;
        $semester_id = $mat->id;
        return view('nonton.matkul',compact('matkul','semester_id'),['foto'=> $foto]);
    }

    public function matkul1($id)
    {
        $mat = Matkul::find($id); 
        $rekaman = $mat->rekaman1;
        $judul = $mat->name;
        $semester_id = $mat->semester_id;
        $sms = $mat->semester->name;
        return view('nonton.video',compact('rekaman','sms'),['judul'=>$judul,'semester_id'=>$semester_id]);
    }

    public function matkul2($id)
    {
        $mat = Matkul::find($id); 
        $rekaman = $mat->rekaman2;
        $judul = $mat->name;
        $semester_id = $mat->semester_id;
        $sms = $mat->semester->name;
        return view('nonton.video',compact('rekaman','sms'),['judul'=>$judul,'semester_id'=>$semester_id]);
    }

    public function matkul3($id)
    {
        $mat = Matkul::find($id); 
        $rekaman = $mat->rekaman3;
        $judul = $mat->name;
        $semester_id = $mat->semester_id;
        $sms = $mat->semester->name;
        return view('nonton.video',compact('rekaman','sms'),['judul'=>$judul,'semester_id'=>$semester_id]);
    }

    public function matkul4($id)
    {
        $mat = Matkul::find($id); 
        $rekaman = $mat->rekaman4;
        $judul = $mat->name;
        $semester_id = $mat->semester_id;
        $sms = $mat->semester->name;
        return view('nonton.video',compact('rekaman','sms'),['judul'=>$judul,'semester_id'=>$semester_id]);
    }

    public function matkul5($id)
    {
        $mat = Matkul::find($id); 
        $rekaman = $mat->rekaman5;
        $judul = $mat->name;
        $semester_id = $mat->semester_id;
        $sms = $mat->semester->name;
        return view('nonton.video',compact('rekaman','sms'),['judul'=>$judul,'semester_id'=>$semester_id]);
    }

    public function matkul6($id)
    {
        $mat = Matkul::find($id); 
        $rekaman = $mat->rekaman6;
        $judul = $mat->name;
        $semester_id = $mat->semester_id;
        $sms = $mat->semester->name;
        return view('nonton.video',compact('rekaman','sms'),['judul'=>$judul,'semester_id'=>$semester_id]);
    }

    public function matkul7($id)
    {
        $mat = Matkul::find($id); 
        $rekaman = $mat->rekaman7;
        $judul = $mat->name;
        $semester_id = $mat->semester_id;
        $sms = $mat->semester->name;
        return view('nonton.video',compact('rekaman','sms'),['judul'=>$judul,'semester_id'=>$semester_id]);
    }

    public function matkul8($id)
    {
        $mat = Matkul::find($id); 
        $rekaman = $mat->rekaman8;
        $judul = $mat->name;
        $semester_id = $mat->semester_id;
        $sms = $mat->semester->name;
        return view('nonton.video',compact('rekaman','sms'),['judul'=>$judul,'semester_id'=>$semester_id]);
    }

    public function stream1($id)
    {
        $rekaman = Rekaman1::find($id);
        $semester_id = $rekaman->matkul->semester_id;
        // dd($rekaman);
        $data = Rekaman1::all();
        return view('nonton.stream',compact('rekaman','data','semester_id'));
    }

    public function stream2($id)
    {
        $rekaman = Rekaman2::find($id);
        $semester_id = $rekaman->matkul->semester_id;
        // dd($rekaman);
        $data = Rekaman2::all();
        return view('nonton.stream',compact('rekaman','data','semester_id'));
    }

    public function stream3($id)
    {
        $rekaman = Rekaman3::find($id);
        $semester_id = $rekaman->matkul->semester_id;
        // dd($rekaman);
        $data = Rekaman3::all();
        return view('nonton.stream',compact('rekaman','data','semester_id'));
    }

    public function stream4($id)
    {
        $rekaman = Rekaman4::find($id);
        $semester_id = $rekaman->matkul->semester_id;
        // dd($rekaman);
        $data = Rekaman4::all();
        return view('nonton.stream',compact('rekaman','data','semester_id'));
    }

    public function stream5($id)
    {
        $rekaman = Rekaman5::find($id);
        $semester_id = $rekaman->matkul->semester_id;
        // dd($rekaman);
        $data = Rekaman5::all();
        return view('nonton.stream',compact('rekaman','data','semester_id'));
    }

    public function stream6($id)
    {
        $rekaman = Rekaman6::find($id);
        $semester_id = $rekaman->matkul->semester_id;
        // dd($rekaman);
        $data = Rekaman6::all();
        return view('nonton.stream',compact('rekaman','data','semester_id'));
    }

    public function stream7($id)
    {
        $rekaman = Rekaman7::find($id);
        $semester_id = $rekaman->matkul->semester_id;
        // dd($rekaman);
        $data = Rekaman7::all();
        return view('nonton.stream',compact('rekaman','data','semester_id'));
    }

    public function stream8($id)
    {
        $rekaman = Rekaman8::find($id);
        $semester_id = $rekaman->matkul->semester_id;
        // dd($rekaman);
        $data = Rekaman8::all();
        return view('nonton.stream',compact('rekaman','data','semester_id'));
    }

    public function video()
    {
        $rek1 = Rekaman1::get();
        $rek2 = Rekaman2::get();
        $rek3 = Rekaman3::get();
        $rek4 = Rekaman4::get();
        $rek5 = Rekaman5::get();
        $rek6 = Rekaman6::get();
        $rek7 = Rekaman7::get();
        $rek8 = Rekaman8::get();

        return view('daftar.video',compact('rek1','rek2','rek3','rek4','rek5','rek6','rek7','rek8'));
    }
}
