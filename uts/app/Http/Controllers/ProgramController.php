<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program;
use PDF;
class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::all();
        return view('programs.program', ['posts'=>$program]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tittle' => 'required',
            'content' => 'required',
            'image' => 'required',
            'harga' => 'required',
            ]);
            //fungsi eloquent untuk menambah data
            //Program::create($request->all());
            $program = new Program;
            $program->tittle = $request->get('tittle');
            $program->content = $request->get('content');
            if ($request->file('image')) {
                $image_name = $request->file('image')->store('images', 'public');
            }
            $program->photo = $image_name;
            $program->harga = $request->get('harga');
            $program->save();
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('programs.index')
            ->with('success', 'produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::find($id);
        return view('programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'tittle' => 'required',
            'content' => 'required',
            'harga' => 'required',
            ]);
        //fungsi eloquent untuk mengupdate data inputan kita
            //Program::find($id)->update($request->all());
            $program = new Program;
            $program->tittle = $request->get('tittle');
            $program->content = $request->get('content');
            if($program->photo && file_exists('app/public/' . $program->photo)) {
                \Storage::delete('public/' . $program->photo);
            }
            $image_name = $request->file('image')->store('images', 'public');
            $program->photo = $image_name;
            $program->harga = $request->get('harga');
            $program->save();
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('programs.index')
            ->with('success', 'produk Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Program::find($id)->delete();
        return redirect()->route('programs.index')
        -> with('success', 'produk Berhasil Dihapus');
    }

    public function cetak_khs(){
        $programs = Program::all();
        $pdf = PDF::loadview('programs.cetak_khs',['programs'=>$programs]);
        return $pdf->stream();
    }
   
}
