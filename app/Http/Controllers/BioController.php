<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [
            'judul' => 'kayla dan putri',
            'paragraf' =>  'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque temporibus consequuntur officiis est aliquam voluptate '
        ];
        return view('home2', $data);
    }
    public function biodata()
    {
        $data=[
            'nama'=>'kayla ayu',
            'lahir'=>'bandung 02 april 2004',
            'alamat'=>'bandung',
            'agama'=>'islam',
            'jk'=>'perempuan',
            'hobi'=>'membaca',
            'email'=>'kaylaayu0204@gmail.com',
            'telp'=>'089*******',
            'photo'=>'../images/kayla.jpg'

        ];
        return view('biodata',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
    }
}
