<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peoples = People::all(); 
        // $peoples = DB::table('peoples')->get(); 
        // dump($peoples);
        return view('people', compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('people-add');
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
        // $orang = new People;
        // $orang->nik = $request->nik;
        // $orang->nama = $request->nama;
        // $orang->alamat = $request->alamat;
        // $orang->jenis_kelamin = $request->jenis_kelamin;
        // $orang->umur = $request->umur;
        
        // $orang->save();

        $request->validate([
            'nik' => 'required|size:16'
        ]);

        People::create($request->all());

        return redirect("data-orang")->with('info','Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        //
    }
}
