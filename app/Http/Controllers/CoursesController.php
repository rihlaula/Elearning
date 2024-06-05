<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //method untuk menampilkan data courses
    public function index()
    {
        // tarik dat courses dari db
        $courses = Courses::all();

        // panggil view dan kirim data courses
        return view('admin.contents.courses.index', [
            'courses' => $courses,
        ]);
    }

    //method untuk menampilkan form tambah courses
    public function create()
    {
        //panggil view
        return view('admin.contents.courses.create');
    }

    //untuk menyimpan data courses baru
    public function store(Request $request)
    {
        //validasi data yang diterima
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',

        ]);

        //simpan data ke db
        Courses::create([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc,

        ]);

        //redirect ke halaman courses
        return redirect('admin/courses')->with('messege', 'Data courses berhasil ditambahkan!');
    }

    //method untuk menampilkan halaman edit
    public function edit($id)
    {
        //cari data courses berdasarkan id
        $courses = Courses::find($id); // Select * FROM coursess WHERE id = $id;

        return view('admin.contents.courses.edit', [
            'courses' => $courses
        ]);
    }

    //method untuk menyimpan hasil update
    public function update($id, Request $request)
    {
        //cari data courses berdasarkan id
        $courses = Courses::find($id); // Select * FROM coursess WHERE id = $id;
        //validasi request
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',

        ]);

        //simpan perubaahan
        $courses->update([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc,
        ]);

        //redirect ke halaman courses
        return redirect('/admin/courses')->with('messege', 'Berhasil mengedit courses');
    }

    //method untuk menghapus
    public function destroy($id)
    {
        //cari data courses berdasarkan id
        $courses = Courses::find($id); // Select * FROM coursess WHERE id = $id;
        //hapus courses
        $courses->delete();

        //kembalikan ke halaman courses
        return redirect('/admin/courses')->with('messege', 'Berhasil mengedit courses');
    }
}
