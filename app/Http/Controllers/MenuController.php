<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Menu::all();
        
        return view('menu.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
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
                'nama_menu' => 'required',
                'harga_menu' => 'required'
            ],
            [
                'nama_menu.required' => 'Nama Menu Wajib Diisi!',
                'harga_menu.required' => 'Harga Menu Wajib Diisi!',
            ]
        );

        Menu::create([
            'nama_menu' => $request->nama_menu,
            'harga_menu' => $request->harga_menu
        ]);

        return redirect('menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Menu::findOrFail($id);
        return view('menu.edit', compact('row'));
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
                'nama_menu' => 'required',
                'harga_menu' => 'required'
            ],
            [
                'nama_menu.required' => 'Nama Menu Wajib Diisi!',
                'harga_menu.required' => 'Harga Menu Wajib Diisi!'
            ]
        );

        $row = Menu::findOrFail($id);
        $row->update([
             'nama_menu' => $request->nama_menu,
            'harga_menu' => $request->harga_menu

        ]);

        return redirect('menu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Menu::findOrFail($id);
        $row->delete();

        return redirect('menu');
    }
}
