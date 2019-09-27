<?php

namespace App\Http\Controllers\Pendaftaran;

use Illuminate\Http\Request;
use App\Pasien;
use App\Daftar;
use App\RolePembayaran;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $daftar = DB::table('daftar')
                       ->join('poli','daftar.id_poli','=','poli.id')
                       ->join('role_pembayaran','daftar.id_role_pembayaran', '=', 'role_pembayaran.id')
                       ->join('pasien','daftar.id_pasien','=','pasien.id')
                       ->select('daftar.*','poli.*','role_pembayaran.*','pasien.*')
                       ->get();
                        
        return view('pendaftaran.pendaftaran',['daftar' => $daftar]);
        // return $daftar;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "bangsat create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "bangsat store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "bangsat show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "bangsat edit";
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
        echo "bangsat update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "bangsat destroy";
        // $data = Daftar::find($id);
        // $data->delete();
        // return Redirect::back();
    }
}
