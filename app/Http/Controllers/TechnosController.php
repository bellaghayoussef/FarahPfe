<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use App\Models\techno;
use Illuminate\Http\Request;
use Exception;

class TechnosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technos = Techno::all();
        return view('techno.index',compact('technos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domains = domain::all();
        return view('techno.create',compact('domains'));
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
            'titre' => ['required', 'string', 'max:255', 'unique:technos'],
           
        ]);

        $techno = new Techno();
        $techno->titre = $request->titre;
        $techno->domain_id = $request->domain_id;
        $techno->save();
        return redirect()->route('techno.index')
        ->with('success_message', 'techno was successfully added.');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $techno = Techno::find($id);
        return view('techno.show',compact('techno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $techno = Techno::find($id);
         $domains = domain::all();
        return view('techno.edit',compact('techno','domains'));
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
        

        $techno =  Techno::find($id);
        $techno->titre = $request->titre;
        $techno->domain_id = $request->domain_id;

        $techno->save();
        return redirect()->route('techno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $techno =  Techno::find($id);
       
        $techno->delete();
        return redirect()->route('techno.index');
    }


}
