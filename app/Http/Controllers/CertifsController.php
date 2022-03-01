<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\certif;
use Illuminate\Http\Request;
use Exception;

class CertifsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certifs = Certif::all();
        return view('certif.index', compact('certifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certif.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'titre' => ['required', 'string', 'max:255', 'unique:certifs'],

        ]);

        $certif = new Certif();
        $certif->titre = $request->titre;
        $certif->save();
        return redirect()->route('certif.index')
            ->with('success_message', 'certif was successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certif = Certif::find($id);
        return view('certif.show', compact('certif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certif = Certif::find($id);
        return view('certif.edit', compact('certif'));
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


        $certif =  Certif::find($id);
        $certif->titre = $request->titre;
        $certif->save();
        return redirect()->route('certif.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certif =  Certif::find($id);

        $certif->delete();
        return redirect()->route('certif.index');
    }
}
