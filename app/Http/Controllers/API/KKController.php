<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\KK;
use App\Http\Controllers\Controller;

class KKController extends Controller
{

    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'namaKK' => 'required',
            'jumlahKK' => 'required',
            'lat' => 'required',
            'lng' => 'required', 
            'img' => 'required|string'
         ]);

         try{
            $kk = new KK();
            $kk->nama_kk = $request->namaKK;
            $kk->jumlah_kk = $request->jumlahKK;
            $kk->lat = $request->lat;
            $kk->lng = $request->lng;
            $kk->photo = $request->img;
            $kk->nim = $request->nim;
            $kk->save();

         }catch(Exception $e){ 

            return response()->json([
                'msg' => "errors",
            ], 500);
         }

         return response()->json([
            'msg' => 'Submit Success'
        ], $this->successStatus);


        
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
