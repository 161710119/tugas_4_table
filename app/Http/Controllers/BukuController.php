<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $bukus = Buku::all();
        return view('buku.index',compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
            'judul' => 'required|unique:bukus|max:255',
            'tema' => 'required|min:6',
            'penerbit' => 'required|max:50',
            'trilis' => 'required'
        ]);

        $bukus = new Buku;
        $bukus->judul = $request->judul;
        $bukus->tema = $request->tema;
        $bukus->penerbit = $request->penerbit;
        $bukus->trilis = $request->trilis;
        $bukus->save();
        return redirect()->route('bukus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bukus = Buku::findOrFail($id);
        return view('buku.show',compact('bukus'));
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
        $bukus = Buku::findOrFail($id);
        return view('buku.edit',compact('bukus'));
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
            'judul' => 'required|max:255',
            'tema' => 'required|min:6',
            'penerbit' => 'required|max:50',
            'trilis' => 'required'
        ]);

        // update data berdasarkan id
        $bukus = Buku::findOrFail($id);
        $bukus->judul = $request->judul;
        $bukus->tema = $request->tema;
        $bukus->penerbit = $request->penerbit;
        $bukus->trilis = $request->trilis;
        $bukus->save();
        return redirect()->route('bukus.index');
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
        $bukus = Buku::findOrFail($id);
        $bukus->delete();
        return redirect()->route('bukus.index');  
    }
}
