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
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Semester;
use Illuminate\Support\Str; 

class RekamanController extends Controller
{
    public function index(){

        $dos1 = Dosen::where('semester_id','1')->get()->count();
        $dos2 = Dosen::where('semester_id','2')->get()->count();
        $dos3 = Dosen::where('semester_id','3')->get()->count();
        $dos4 = Dosen::where('semester_id','4')->get()->count();
        $dos5 = Dosen::where('semester_id','5')->get()->count();
        $dos6 = Dosen::where('semester_id','6')->get()->count();
        $dos7 = Dosen::where('semester_id','7')->get()->count();
        $dos8 = Dosen::where('semester_id','8')->get()->count();

        $mat1 = Matkul::where('semester_id','1')->get()->count();
        $mat2 = Matkul::where('semester_id','2')->get()->count();
        $mat3 = Matkul::where('semester_id','3')->get()->count();
        $mat4 = Matkul::where('semester_id','4')->get()->count();
        $mat5 = Matkul::where('semester_id','5')->get()->count();
        $mat6 = Matkul::where('semester_id','6')->get()->count();
        $mat7 = Matkul::where('semester_id','7')->get()->count();
        $mat8 = Matkul::where('semester_id','8')->get()->count();

        
        $rek1 = Rekaman1::get()->count();
        $rek2 = Rekaman2::get()->count();
        $rek3 = Rekaman3::get()->count();
        $rek4 = Rekaman4::get()->count();
        $rek5 = Rekaman5::get()->count();
        $rek6 = Rekaman6::get()->count();
        $rek7 = Rekaman7::get()->count();
        $rek8 = Rekaman8::get()->count();

        $judul ="Dashboard || Skuy-Replay";
        return view('rekaman.index',compact('judul','rek1','rek2','rek3','rek4','rek5','rek6','rek7','rek8','dos1','dos2','dos3','dos4','dos5','dos6','dos7','dos8','mat1','mat2','mat3','mat4','mat5','mat6','mat7','mat8'));
        // return view('rekaman.index',compact('judul'));
    }

    public function rekaman()
    {
        $judul ="Dashboard Rekaman || Skuy-Replay";
        $sms = Semester::get();
        $dos1 = Dosen::where('semester_id','1')->get();
        $dos2 = Dosen::where('semester_id','2')->get();
        $dos3 = Dosen::where('semester_id','3')->get();
        $dos4 = Dosen::where('semester_id','4')->get();
        $dos5 = Dosen::where('semester_id','5')->get();
        $dos6 = Dosen::where('semester_id','6')->get();
        $dos7 = Dosen::where('semester_id','7')->get();
        $dos8 = Dosen::where('semester_id','8')->get();

        $mat1 = Matkul::where('semester_id','1')->get();
        $mat2 = Matkul::where('semester_id','2')->get();
        $mat3 = Matkul::where('semester_id','3')->get();
        $mat4 = Matkul::where('semester_id','4')->get();
        $mat5 = Matkul::where('semester_id','5')->get();
        $mat6 = Matkul::where('semester_id','6')->get();
        $mat7 = Matkul::where('semester_id','7')->get();
        $mat8 = Matkul::where('semester_id','8')->get();
        return view('rekaman.tambah',compact('judul','sms',['dos1','dos2','dos3','dos4','dos5','dos6','dos7','dos8','mat1','mat2','mat3','mat4','mat5','mat6','mat7','mat8']));
    }

    public function simpan1(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required|unique:rekaman1s',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman = Rekaman1::create([
            'semester_id' => $request->semester_id,
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Tambahkan');
    }

    public function simpan2(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required|unique:rekaman2s',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman = Rekaman2::create([
            'semester_id' => $request->semester_id,
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Tambahkan');
    }

    public function simpan3(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required|unique:rekaman3s',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman = Rekaman3::create([
            'semester_id' => $request->semester_id,
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Tambahkan');
    }

    public function simpan4(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required|unique:rekaman4s',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman = Rekaman4::create([
            'semester_id' => $request->semester_id,
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Tambahkan');
    }

    public function simpan5(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required|unique:rekaman5s',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman = Rekaman5::create([
            'semester_id' => $request->semester_id,
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Tambahkan');
    }

    public function simpan6(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required|unique:rekaman6s',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman = Rekaman6::create([
            'semester_id' => $request->semester_id,
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Tambahkan');
    }

    public function simpan7(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required|unique:rekaman7s',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman = Rekaman7::create([
            'semester_id' => $request->semester_id,
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Tambahkan');
    }

    public function simpan8(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required|unique:rekaman8s',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman = Rekaman8::create([
            'semester_id' => $request->semester_id,
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Tambahkan');
    }
    public function tampil1()
    {
        $matkul = "Matkul";

        $sem = Semester::all();
        $dosen = Dosen::where('semester_id','1')->get();
        $matkul= Matkul::where('semester_id','1')->get();
        // if ($df != null) {
        //     $df ="Rekaman"
        // }
        // $matkul = "Matkul";
        // dd($df);
        $rekaman = Rekaman1::get();
        $judul = "Rekaman Semester 1 || Skuy-Replay";

        return view('rekaman.table',compact('judul','sem','rekaman',['matkul','dosen']));
    }

    public function tampil2()
    {
        $sem = Semester::all();
        $dosen = Dosen::where('semester_id','2')->get();
        $matkul= Matkul::where('semester_id','2')->get();
        $rekaman = Rekaman2::get();
        $judul = "Rekaman Semester 2 || Skuy-Replay";

        return view('rekaman.table',compact('judul','sem','rekaman',['matkul','dosen']));
    }

    public function tampil3()
    {
        $sem = Semester::all();
        $dosen = Dosen::where('semester_id','3')->get();
        $matkul= Matkul::where('semester_id','3')->get();
        $rekaman = Rekaman3::get();
        $judul = "Rekaman Semester 3 || Skuy-Replay";

        return view('rekaman.table',compact('judul','sem','rekaman',['matkul','dosen']));
    }

    public function tampil4()
    {
        $sem = Semester::all();
        $dosen = Dosen::where('semester_id','4')->get();
        $matkul= Matkul::where('semester_id','4')->get();
        $rekaman = Rekaman4::get();
        $judul = "Rekaman Semester 4 || Skuy-Replay";

        return view('rekaman.table',compact('judul','sem','rekaman',['matkul','dosen']));
    }

    public function tampil5()
    {
        $sem = Semester::all();
        $dosen = Dosen::where('semester_id','5')->get();
        $matkul= Matkul::where('semester_id','5')->get();
        $rekaman = Rekaman5::get();
        $judul = "Rekaman Semester V || Skuy-Replay";

        return view('rekaman.table',compact('judul','sem','rekaman',['matkul','dosen']));
    }

    public function tampil6()
    {
        $sem = Semester::all();
        $dosen = Dosen::where('semester_id','6')->get();
        $matkul= Matkul::where('semester_id','6')->get();
        $rekaman = Rekaman6::get();
        $judul = "Rekaman Semester 6 || Skuy-Replay";

        return view('rekaman.table',compact('judul','sem','rekaman',['matkul','dosen']));
    }

    public function tampil7()
    {
        $sem = Semester::all();
        $dosen = Dosen::where('semester_id','7')->get();
        $matkul= Matkul::where('semester_id','7')->get();
        $rekaman = Rekaman7::get();
        $judul = "Rekaman Semester 7 || Skuy-Replay";

        return view('rekaman.table',compact('judul','sem','rekaman',['matkul','dosen']));
    }

    public function tampil8()
    {
        $sem = Semester::all();
        $dosen = Dosen::where('semester_id','8')->get();
        $matkul= Matkul::where('semester_id','8')->get();
        $rekaman = Rekaman8::get();
        $judul = "Rekaman Semester 8 || Skuy-Replay";

        return view('rekaman.table',compact('judul','sem','rekaman',['matkul','dosen']));
    }

    public function update1(Request $request, $id)
    {
        $rules=[
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);


        $rekaman = Rekaman1::whereId($id)->first();

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman->update([
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Ubah');
    }

    public function update2(Request $request, $id)
    {
        $rules=[
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $rekaman = Rekaman2::whereId($id)->first();

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman->update([
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Ubah');
    }

    public function update3(Request $request, $id)
    {
        $rules=[
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $rekaman = Rekaman3::whereId($id)->first();

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman->update([
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Ubah');
    }

    public function update4(Request $request, $id)
    {
        $rules=[
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $rekaman = Rekaman4::whereId($id)->first();

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman->update([
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Ubah');
    }

    public function update5(Request $request, $id)
    {
        $rules=[
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $rekaman = Rekaman5::whereId($id)->first();

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman->update([
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Ubah');
    }

    public function update6(Request $request, $id)
    {
        $rules=[
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $rekaman = Rekaman6::whereId($id)->first();

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman->update([
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Ubah');
    }

    public function update7(Request $request, $id)
    {
        $rules=[
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $rekaman = Rekaman7::whereId($id)->first();

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman->update([
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Ubah');
    }

    public function update8(Request $request, $id)
    {
        $rules=[
            'matkul_id' => 'required',
            'judul' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Ada',
        ];
        $this->validate($request,$rules,$message);

        $rekaman = Rekaman8::whereId($id)->first();

        $kalimat = $request->link;
        $link_id = substr($kalimat,17);

        $rekaman->update([
            'matkul_id' => $request->matkul_id,
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'link_id' => $link_id,
        ]);
        return back()->with('berhasil','Data Rekaman Kuliah Sudah Di Ubah');
    }

    public function delete1($id)
    {
        $rekaman = Rekaman1::find($id);
        $rekaman->delete();
        return redirect()->back()->with('berhasil',' Data Rekaman Kuliah Telah Di Hapus');
    }

    public function delete2($id)
    {
        $rekaman = Rekaman2::find($id);
        $rekaman->delete();
        return redirect()->back()->with('berhasil',' Data Rekaman Kuliah Telah Di Hapus');
    }

    public function delete3($id)
    {
        $rekaman = Rekaman3::find($id);
        $rekaman->delete();
        return redirect()->back()->with('berhasil',' Data Rekaman Kuliah Telah Di Hapus');
    }

    public function delete4($id)
    {
        $rekaman = Rekaman4::find($id);
        $rekaman->delete();
        return redirect()->back()->with('berhasil',' Data Rekaman Kuliah Telah Di Hapus');
    }

    public function delete5($id)
    {
        $rekaman = Rekaman5::find($id);
        $rekaman->delete();
        return redirect()->back()->with('berhasil',' Data Rekaman Kuliah Telah Di Hapus');
    }

    public function delete6($id)
    {
        $rekaman = Rekaman6::find($id);
        $rekaman->delete();
        return redirect()->back()->with('berhasil',' Data Rekaman Kuliah Telah Di Hapus');
    }

    public function delete7($id)
    {
        $rekaman = Rekaman7::find($id);
        $rekaman->delete();
        return redirect()->back()->with('berhasil',' Data Rekaman Kuliah Telah Di Hapus');
    }

    public function delete8($id)
    {
        $rekaman = Rekaman8::find($id);
        $rekaman->delete();
        return redirect()->back()->with('berhasil',' Data Rekaman Kuliah Telah Di Hapus');
    }
}
