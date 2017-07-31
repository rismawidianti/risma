<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ortu = orangtua::with('anak')->get();
        return view('orangtua.index',compact('ortu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('orangtua.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ortu = new orangtua;
        $ortu->nama_ayah=$request->a;
        $ortu->nama_ibu=$request->b;
        $ortu->umur_ayah=$request->c;
        $ortu->umur_ibu=$request->d;
        $ortu->alamat=$request->e;
        $ortu->save();
        return redirect('orangtua');
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
        $ortu = orangtua::findOrFail($id);
        return view('orangtua.show',compact('ortu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
      $ortu=orangtua::findOrFail($id);
        return view('orangtua.edit',compact('ortu'));
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
        //
         $ortu = orangtua::findOrFail($id);
        $ortu->nama_ayah=$request->a;
        $ortu->nama_ibu=$request->b;
        $ortu->umur_ayah=$request->c;
        $ortu->umur_ibu=$request->d;
        $ortu->alamat=$request->e;
        $ortu->save();
        return redirect('orangtua');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ortu= orangtua::findOrFail($id);
        $ortu->delete();
        return redirect('orangtua');
    }
}
