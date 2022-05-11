<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\Matkul;
use App\Models\Dosen;

class MatkulController extends Controller
{
    public function index()
    {
        $sms = Semester::get();

        $dos1 = Dosen::where('semester_id','1')->get();
        $dos2 = Dosen::where('semester_id','2')->get();
        $dos3 = Dosen::where('semester_id','3')->get();
        $dos4 = Dosen::where('semester_id','4')->get();
        $dos5 = Dosen::where('semester_id','5')->get();
        $dos6 = Dosen::where('semester_id','6')->get();
        $dos7 = Dosen::where('semester_id','7')->get();
        $dos8 = Dosen::where('semester_id','8')->get();

        $judul ="Mata Kuliah || Skuy-Replay";
        
        return view('matkul.index',compact('judul','sms','dos1','dos2','dos3','dos4','dos5','dos6','dos7','dos8'));
    }

    public function simpan(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'dosen_id' => 'required',
            'name' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
        ];
        $this->validate($request,$rules,$message);

        $matkul = Matkul::create([
            'semester_id' => $request->semester_id,
            'dosen_id' => $request->dosen_id,
            'name' => $request->name,
        ]);

        return back()->with('berhasil','Data Mata Kuliah Sudah Di Tambahkan');
    }

    public function update(Request $request, $id)
    {
        $rules=[
            'semester_id' => 'required',
            'dosen_id' => 'required',
            'name' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
        ];
        $this->validate($request,$rules,$message);
        
        $matkul = Matkul::whereId($id)->first();
        $matkul->update([
            'semester_id' => $request->semester_id,
            'dosen_id' => $request->dosen_id,
            'name' => $request->name,
        ]);
        return back()->with('berhasil','Data Mata Kuliah Sudah Di Ubah');
    }

    public function tampil1()
    {
        $semester = Semester::get();
        $matkul = Matkul::where('semester_id','1')->get();
        $dos = Dosen::where('semester_id','1')->get();
        $judul = "Matkul Semester 1 || Skuy-Replay";
        return view('matkul.table',compact('judul','matkul','semester','dos'));
    }

    public function tampil2()
    {
        $semester = Semester::get();
        $matkul = Matkul::where('semester_id','2')->get();
        $dos = Dosen::where('semester_id','2')->get();
        $judul = "Matkul Semester 2 || Skuy-Replay";
        return view('matkul.table',compact('judul','matkul','semester','dos'));
    }
    public function tampil3()
    {
        $semester = Semester::get();
        $matkul = Matkul::where('semester_id','3')->get();
        $dos = Dosen::where('semester_id','3')->get();
        $judul = "Matkul Semester 3 || Skuy-Replay";
        return view('matkul.table',compact('judul','matkul','semester','dos'));
    }
    public function tampil4()
    {
        $semester = Semester::get();
        $matkul = Matkul::where('semester_id','4')->get();
        $dos = Dosen::where('semester_id','4')->get();
        $judul = "Matkul Semester 4 || Skuy-Replay";
        return view('matkul.table',compact('judul','matkul','semester','dos'));
    }
    public function tampil5()
    {
        $semester = Semester::get();
        $matkul = Matkul::where('semester_id','5')->get();
        $dos = Dosen::where('semester_id','5')->get();
        $judul = "Matkul Semester 5 || Skuy-Replay";
        return view('matkul.table',compact('judul','matkul','semester','dos'));
    }
    public function tampil6()
    {
        $semester = Semester::get();
        $matkul = Matkul::where('semester_id','6')->get();
        $dos = Dosen::where('semester_id','6')->get();
        $judul = "Matkul Semester 6 || Skuy-Replay";
        return view('matkul.table',compact('judul','matkul','semester','dos'));
    }
    public function tampil7()
    {
        $semester = Semester::get();
        $matkul = Matkul::where('semester_id','7')->get();
        $dos = Dosen::where('semester_id','7')->get();
        $judul = "Matkul Semester 7 || Skuy-Replay";
        return view('matkul.table',compact('judul','matkul','semester','dos'));
    }
    public function tampil8()
    {
        $semester = Semester::get();
        $matkul = Matkul::where('semester_id','8')->get();
        $dos = Dosen::where('semester_id','8')->get();
        $judul = "Matkul Semester 8 || Skuy-Replay";
        return view('matkul.table',compact('judul','matkul','semester','dos'));
    }

    public function delete($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete();
        return redirect()->back()->with('berhasil',' Data Mata Kuliah Telah Di Hapus');
    }
}
