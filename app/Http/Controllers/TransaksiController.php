<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Transaksidua;
use DB;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = DB::table('tb_pelanggan')
         ->join('tb_transaksi', 'tb_pelanggan.id_pesanan', '=', 'tb_transaksi.id_pelanggan_transaksi')
                ->select('*')
                ->groupby('nama_pelanggan')
                ->OrderBy('nomor_antrian','Asc')
                ->get();
        return view('transaksi.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($no)
    {
         $data = DB::table('tb_transaksi')
         ->join('tb_menu', 'tb_transaksi.id_menu_pesanan_transaksi', '=', 'tb_menu.id_menu')
         ->join('tb_pelanggan', 'tb_transaksi.id_pelanggan_transaksi', '=', 'tb_pelanggan.id_pesanan')
                ->select('*')
                ->where('nomor_antrian','=', $no)

                ->get();
        return view('transaksi.detail')->with('data', $data);
    }

    public function create()
    {
         $data = DB::table('tb_menu')
                ->select('*')
                ->get();
         $data1 = DB::table('tb_pelanggan')
                ->select('*')
                ->get();

        return view('transaksi.create')->with('data', $data)->with('data1', $data1);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'id_pelanggan_transaksi' => 'required',
                'id_menu_pesanan_transaksi' => 'required',
                'jumlah' => 'required',                
            ],
            [
                'id_pelanggan_transaksi.required' => 'Harus Diisi',
                'id_menu_pesanan_transaksi.required' => 'Harus Diisi',
                'jumlah.required' => 'Harus Diisi',
            ]
        );

        Transaksi::create([
            'id_pelanggan_transaksi' => $request->id_pelanggan_transaksi,
            'id_menu_pesanan_transaksi' => $request->id_menu_pesanan_transaksi,
            'jumlah' => $request->jumlah
        ]);

        return redirect('transaksi');
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
         $data = DB::table('tb_transaksi')
         ->join('tb_pelanggan', 'tb_transaksi.id_pelanggan_transaksi', '=', 'tb_pelanggan.id_pesanan')
                ->select('*')
                ->where('id_pelanggan_transaksi','=', $id)
                ->groupby('id_pelanggan_transaksi')
                ->get();
         $data1 = DB::table('tb_menu')
                ->select('*')
                ->get();
        return view('transaksi.edit')->with('data', $data)->with('data1', $data1);
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
                $request->validate(
            [
                'id_pelanggan_transaksi' => 'required',
                'id_menu_pesanan_transaksi' => 'required',
                'jumlah' => 'required',                

            ],
            [
                'id_pelanggan_transaksi.required' => 'Harus Diisi',
                'id_menu_pesanan_transaksi.required' => 'Harus Diisi',
                'jumlah.required' => 'Harus Diisi',
            ]
        );
        $row = Transaksidua::findOrFail($id);
        $row->update([
                    'id_pelanggan_transaksi' => $request->id_pelanggan_transaksi,
            'id_menu_pesanan_transaksi' => $request->id_menu_pesanan_transaksi,
            'jumlah' => $request->jumlah
        ]);

        return redirect('transaksi');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                        $row = Transaksi::findOrFail($id);
        $row->delete();

        return redirect('transaksi');
    }
        public function hapus($id)
    {
                        $row = Transaksidua::findOrFail($id);
        $row->delete();

        return redirect('transaksi');
    }
    
}
