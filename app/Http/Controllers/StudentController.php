<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {   
        return view('welcome',[
            'students' => DB::table('student')
            ->orderBy('id','desc')
            ->get()
        ]);

        // return view('welcome', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:10|max:255',
            'phone' => 'required|min:12|max:13',
            'alamat' => 'required|min:20|max:255',
            'jenis_kelamin' => 'required',
            'email' => 'required'
        ]);

        DB::table('student')->insert([
            'nama' => $request->nama,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email
        ]);

        return redirect()
            ->route('student.index')
            ->with('success','student creared');
    }

    public function edit($id)
    {
        $student = DB::table('student')->find($id);

        return view('edit',['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:10|max:255',
            'phone' => 'required|min:12|max:13',
            'alamat' => 'required|min:20|max:255',
            'jenis_kelamin' => 'required',
            'email' => 'required'
        ]);

        DB::table('student')
                ->where('id',$id)
                ->update([
                    'nama' => $request->nama,
                    'phone' => $request->phone,
                    'alamat' => $request->alamat,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'email' => $request->email
                ]);

        return redirect()
            ->route('student.index')
            ->with('success','student updated');
    }

    public function show($id)
    {
        $student = DB::table('student')->find($id);

        return view('show',['student' => $student]);
    }

    public function destroy($id)
    {
        DB::table('student')->where('id',$id)->delete();

        return redirect()
            ->route('student.index')
            ->with('success','student deleted');
    }
}
