<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekskul;
class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $ekskuls = Ekskul::all();
        return view('ekskul.index',compact('ekskuls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekskul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'eks' => 'required|unique:ekskuls|max:255',
            'jam' => 'required|min:2',
            'absen' => 'required|min:2',
            'nama' => 'required|min:6'
        ]);

        $ekskuls = new Ekskul;
        $ekskuls->eks = $request->eks;
        $ekskuls->jam = $request->jam;
        $ekskuls->absen = $request->absen;
        $ekskuls->nama = $request->nama;
        $ekskuls->save();
        return redirect()->route('ekskuls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ekskuls = Ekskul::findOrFail($id);
        return view('ekskul.show',compact('ekskuls'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $ekskuls = Ekskul::findOrFail($id);
        return view('ekskul.edit',compact('ekskuls'));
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
         // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'eks' => 'required|max:255',
            'jam' => 'required|min:2',
            'absen' => 'required|min:2',
            'nama' => 'required|min:6'
        ]);

        // update data berdasarkan id
        $ekskuls = Ekskul::findOrFail($id);
        $ekskuls->eks = $request->eks;
        $ekskuls->jam = $request->jam;
        $ekskuls->absen = $request->absen;
        $ekskuls->nama = $request->nama;
        $ekskuls->save();
        return redirect()->route('ekskuls.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $ekskuls = Ekskul::findOrFail($id);
        $ekskuls->delete();
        return redirect()->route('ekskuls.index');  
    }
}
