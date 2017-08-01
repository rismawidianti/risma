<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\anak;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $anak = anak::all();
        return view('anak.index',compact('anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ortu = orangtua::all();
        return view('anak.create',compact('ortu'));
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
        $ortu = new anak;
        $ortu->nama=$request->a;
        $ortu->orangtua_id=$request->b;
        $ortu->umur=$request->c;
        $ortu->alamat=$request->d;
        $ortu->save();
        return redirect('anak');
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
         $anak = anak::findOrFail($id);
        $ortu = orangtua::all();
         return view('anak.show',compact('anak','ortu'));
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
        $anak = anak::findOrFail($id);
        $ortu = orangtua::all();
        return view('anak.edit',compact('anak','ortu'));
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
        $ortu = anak::findOrFail($id);
        $ortu->nama=$request->a;
        $ortu->orangtua_id=$request->b;
        $ortu->umur=$request->c;
        $ortu->alamat=$request->d;
        $ortu->save();
        return redirect('anak');
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
        $anak= anak::findOrFail($id);
        $anak->delete();
        return redirect('anak');
    }
}
