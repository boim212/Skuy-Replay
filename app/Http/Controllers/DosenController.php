<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Semester;

class DosenController extends Controller
{
    public function index()
    {
        $sms =Semester::all();
        $judul ="Dosen || Skuy-Replay";
        return view('dosen.index',compact('judul','sms'));
    }

    public function simpan(Request $request)
    {
        $rules=[
            'semester_id' => 'required',
            'name' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
        ];
        $this->validate($request,$rules,$message);

        $dosen = Dosen::create([
            'semester_id' => $request->semester_id,
            'name' => $request->name,
        ]);

        return back()->with('berhasil','Data Dosen Sudah Di Tambahkan');
    }

    public function update(Request $request,$id)
    {
        $rules=[
            'semester_id' => 'required',
            'name' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
        ];
        $this->validate($request,$rules,$message);
        
        $dosen = Dosen::whereId($id)->first();
        $dosen->update([
            'semester_id' => $request->semester_id,
            'name' => $request->name,
        ]);
        // return back()->with('berhasil','Data Postingan Sudah Di Ubah');
        return back()->with('berhasil','Data Dosen Sudah Di Ubah');
    }

    public function tampil1()
    {
        $semester = Semester::get();
        $dosen = Dosen::where('semester_id','1')->get();
        $judul = "Dosen Semester 1 || Skuy-Replay";
        return view('dosen.table',compact('judul','dosen','semester'));
    }

    public function tampil2()
    {
        $semester = Semester::get();
        $dosen = Dosen::where('semester_id','2')->get();
        $judul = "Dosen Semester 2 || Skuy-Replay";
        return view('dosen.table',compact('judul',['dosen','semester']));
    }
    public function tampil3()
    {
        $semester = Semester::get();
        $dosen = Dosen::where('semester_id','3')->get();
        $judul = "Dosen Semester 3 || Skuy-Replay";
        return view('dosen.table',compact('judul',['dosen','semester']));
    }
    public function tampil4()
    {
        $semester = Semester::get();
        $dosen = Dosen::where('semester_id','4')->get();
        $judul = "Dosen Semester 4 || Skuy-Replay";
        return view('dosen.table',compact('judul',['dosen','semester']));
    }
    public function tampil5()
    {
        $semester = Semester::get();
        $dosen = Dosen::where('semester_id','5')->get();
        $judul = "Dosen Semester 5 || Skuy-Replay";
        return view('dosen.table',compact('judul',['dosen','semester']));
    }
    public function tampil6()
    {
        $semester = Semester::get();
        $dosen = Dosen::where('semester_id','6')->get();
        $judul = "Dosen Semester 6 || Skuy-Replay";
        return view('dosen.table',compact('judul',['dosen','semester']));
    }
    public function tampil7()
    {
        $semester = Semester::get();
        $dosen = Dosen::where('semester_id','7')->get();
        $judul = "Dosen Semester 7 || Skuy-Replay";
        return view('dosen.table',compact('judul',['dosen','semester']));
    }
    public function tampil8()
    {
        $semester = Semester::get();
        $dosen = Dosen::where('semester_id','8')->get();
        $judul = "Dosen Semester 8 || Skuy-Replay";
        return view('dosen.table',compact('judul',['dosen','semester']));
    }
    public function delete($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect()->back()->with('berhasil',' Data Dosen Kuliah Telah Di Hapus');
    }
}
