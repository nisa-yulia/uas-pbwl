<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Pelanggan::all();
        
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
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
                'nama_pelanggan' => 'required',
                'nomor_antrian' => '|required|unique:tb_pelanggan'
            ],
            [
                'nama_menu.required' => 'Nama Menu Wajib Diisi!',
                'nomor_antrian.unique' => 'Sudah ada Antrian!',
            ]
        );

        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nomor_antrian' => $request->nomor_antrian
        ]);

        return redirect('pelanggan');
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
                $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('row'));
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
                'nama_pelanggan' => 'required',
                'nomor_antrian' => '|required|unique:tb_pelanggan'
            ],
            [
                'nama_menu.required' => 'Nama Menu Wajib Diisi!',
                'nomor_antrian.unique' => 'Sudah ada Antrian!',
            ]
        );
        $row = Pelanggan::findOrFail($id);
        $row->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nomor_antrian' => $request->nomor_antrian
        ]);

        return redirect('pelanggan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan');
    }
}
