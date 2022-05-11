<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Semester;
use App\Models\Matkul;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $sms = Semester::get();

        $mat1 = Matkul::where('semester_id','1')->get();
        $mat2 = Matkul::where('semester_id','2')->get();
        $mat3 = Matkul::where('semester_id','3')->get();
        $mat4 = Matkul::where('semester_id','4')->get();
        $mat5 = Matkul::where('semester_id','5')->get();
        $mat6 = Matkul::where('semester_id','6')->get();
        $mat7 = Matkul::where('semester_id','7')->get();
        $mat8 = Matkul::where('semester_id','8')->get();

        $judul = "Artikel Materi || Skuy-Replay";
        return view('blog.index',compact('judul','mat1','mat2','mat3','mat4','mat5','mat6','mat7','mat8','sms'));
    }

    public function simpan(Request $request)
    {

        $rules=[
            'semester_id' => 'required',
            'judul' => 'required',
            'matkul_id' => 'required',
            'sampul' => 'mimes:jpeg,png,jpg',
            'konten' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Di Gunakan',
        ];
        $this->validate($request,$rules,$message);

        $sampulName=time().'.'.$request->sampul->extension();

        $request->file('sampul')->storeAs('public/',$sampulName);

        $blog = Blog::create([
            'semester_id' => $request->semester_id,
            'slug' => Str::slug($request->judul,'-'),
            'matkul_id' => $request->matkul_id,
            'sampul' => $sampulName,
            'judul' => $request->judul,
            'konten' => $request-> konten,
        ]);

        return back()->with('berhasil','Data Postingan Sudah Di Tambahkan');
    }


    //mulai edit
    public function edit1($id)
    {
        $judul = "Edit Artikel Semester 1 || Skuy-Replay";
        $blog = Blog::find($id);
        $mats = Matkul::where('semester_id','1')->get();
        return view('blog.edit',compact('judul','blog','mats'));
    }

    public function edit2($id)
    {
        $judul = "Edit Artikel Semester 2 || Skuy-Replay";
        $blog = Blog::find($id);
        $mats = Matkul::where('semester_id','2')->get();
        return view('blog.edit',compact('judul','blog','mats'));
    }

    public function edit3($id)
    {
        $judul = "Edit Artikel Semester 3 || Skuy-Replay";
        $blog = Blog::find($id);
        $mats = Matkul::where('semester_id','3')->get();
        return view('blog.edit',compact('judul','blog','mats'));
    }

    public function edit4($id)
    {
        $judul = "Edit Artikel Semester 4 || Skuy-Replay";
        $blog = Blog::find($id);
        $mats = Matkul::where('semester_id','4')->get();
        return view('blog.edit',compact('judul','blog','mats'));
    }

    public function edit5($id)
    {
        $judul = "Edit Artikel Semester 5 || Skuy-Replay";
        $blog = Blog::find($id);
        $mats = Matkul::where('semester_id','5')->get();
        return view('blog.edit',compact('judul','blog','mats'));
    }

    public function edit6($id)
    {
        $judul = "Edit Artikel Semester 6 || Skuy-Replay";
        $blog = Blog::find($id);
        $mats = Matkul::where('semester_id','6')->get();
        return view('blog.edit',compact('judul','blog','mats'));
    }

    public function edit7($id)
    {
        $judul = "Edit Artikel Semester 7 || Skuy-Replay";
        $blog = Blog::find($id);
        $mats = Matkul::where('semester_id','7')->get();
        return view('blog.edit',compact('judul','blog','mats'));
    }

    public function edit8($id)
    {
        $judul = "Edit Artikel Semester 8 || Skuy-Replay";
        $blog = Blog::find($id);
        $mats = Matkul::where('semester_id','8')->get();
        return view('blog.edit',compact('judul','blog','mats'));
    }

    public function update(Request $request, $id)
    {
        $rules=[
            'semester_id' => 'required',
            'judul' => 'required',
            'matkul_id' => 'required',
            'sampul' => 'mimes:jpeg,png,jpg',
            'konten' => 'required',
        ];
        
        $message=[
            'required' => ':attribute Tidak Boleh Kosong',
        ];
        $this->validate($request,$rules,$message);
        
        $blog = Blog::whereId($id)->first();
        
        if(\File::exists('storage/'.$blog->sampul))
        {
            \File::delete('storage/'.$blog->sampul);
        }
        
        $fileName=time().'.'.$request->sampul->extension();
        $request->file('sampul')->storeAs('public',$fileName);

        $blog->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul,'-'),
            'semester_id' => $request-> semester_id,
            'matkul_id' => $request->matkul_id,
            'sampul' => $fileName,
            'konten' => $request-> konten,
        ]);
        return redirect('/$-blog')->with('berhasil','Data Postingan Materi Kuliah Sudah Di Update');
    }

    public function tampil1()
    {
        
        $mats = Matkul::where('semester_id','1')->get();
        $judul = "Artikel Materi Semester 1 || Skuy-Replay";
        $judulTable = "Semester 1";
        $blogs = Blog::where('semester_id','1')->get();
        return view('blog.table',compact('judulTable','judul','blogs','mats'));
    }

    public function tampil2()
    {
        $mats = Matkul::where('semester_id','2')->get();
        $judul = "Artikel Materi Semester 2 || Skuy-Replay";
        $blogs = Blog::where('semester_id','2')->get();
        $judulTable = "Semester 2";
        return view('blog.table',compact('judulTable','judul','blogs','mats'));
    }

    public function tampil3()
    {
        $mats = Matkul::where('semester_id','3')->get();
        $judul = "Artikel Materi Semester 3 || Skuy-Replay";
        $blogs = Blog::where('semester_id','3')->get();
        $judulTable = "Semester 3";
        return view('blog.table',compact('judulTable','judul','blogs','mats'));
    }

    public function tampil4()
    {
        $mats = Matkul::where('semester_id','4')->get();
        $judul = "Artikel Materi Semester 4 || Skuy-Replay";
        $blogs = Blog::where('semester_id','4')->get();
        $judulTable = "Semester 4";
        return view('blog.table',compact('judulTable','judul','blogs','mats'));
    }

    public function tampil5()
    {
        $mats = Matkul::where('semester_id','5')->get();
        $judul = "Artikel Materi Semester 5 || Skuy-Replay";
        $blogs = Blog::where('semester_id','5')->get();
        $judulTable = "Semester 5";
        return view('blog.table',compact('judulTable','judul','blogs','mats'));
    }

    public function tampil6()
    {
        $mats = Matkul::where('semester_id','6')->get();
        $judul = "Artikel Materi Semester 6 || Skuy-Replay";
        $blogs = Blog::where('semester_id','6')->get();
        $judulTable = "Semester 6";
        return view('blog.table',compact('judulTable','judul','blogs','mats'));
    }

    public function tampil7()
    {
        $mats = Matkul::where('semester_id','7')->get();
        $judul = "Artikel Materi Semester 7 || Skuy-Replay";
        $blogs = Blog::where('semester_id','7')->get();
        $judulTable = "Semester 7";
        return view('blog.table',compact('judulTable','judul','blogs','mats'));
    }

    public function tampil8()
    {
        $mats = Matkul::where('semester_id','8')->get();
        $judul = "Artikel Materi Semester 8 || Skuy-Replay";
        $blogs = Blog::where('semester_id','8')->get();
        $judulTable = "Semester 8";
        return view('blog.table',compact('judulTable','judul','blogs','mats'));
    }

    public function delete($id)
    {

        $blogs = Blog::whereId($id)->first();
        if(\File::exists('storage'.$blogs->file))
        {
            \File::delete('storage'.$blogs->file);
        }

        $blog = Blog::whereId($id)->delete();
        return redirect()->back()->with('berhasil',' Data Artikel Materi Kuliah Telah Di Hapus');
    }

    public function artikel()
    {
        $matkul = Matkul::latest()->get();
        $blog = Blog::latest()->first(); //->ambil data paling baru
        // $blog = Blog::oldest()->first(); //->ambil data yang paling lama
        $blogsAll = Blog::latest()->simplePaginate(2);
        return view('daftar.blog',compact('blog','blogsAll','matkul'));
    }

    public function reading($id)
    {
        $matkul = Matkul::latest()->get();
        $blog = Blog::where('id',$id)->first();
        return view('blog.reading',compact('blog','matkul'));
    }

    public function readingMat($id)
    {
        $matkul = Matkul::latest()->get();
        $blog = Blog::where('matkul_id',$id)->get();
        $judulMat = Matkul::find($id)->first();
        return view('blog.readingMat',compact('blog','matkul','judulMat'));
    }
}
