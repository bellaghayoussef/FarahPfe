<?php

namespace App\Http\Controllers;
use App\Models\Topic;
use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\Techno;
use Auth;
use App\Models\Test;
use App\Models\TestAnswer;
class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //permet de nous donner le role du user connecter
        if(Auth::User()->hasRole('admin')){
            $offres = Offre::with('User')->get();
        }
        if(Auth::User()->hasRole('client')){
            $offres = Offre::where('user_id','=',Auth::User()->id)->get();

        }


        return view('offres.index',compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $technos = Techno::all();
        if(Auth::User()->hasRole('admin')){
            $topics = Topic::all();
        }
        if(Auth::User()->hasRole('client')){
            $topics = Topic::where('user_id','=',Auth::User()->id)->orWhere('user_id',null)->get();

        }

        return view('offres.create',compact('technos','topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = explode(',', $request->competence);
      //  dd($result);
        $validated = $request->validate([
            'user_id' => ['required', 'string', 'max:255'],
            'poste' => ['required', 'string', 'max:255'],
            'deadline' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],

        ]);

        $offre = new Offre();
        $offre->user_id = $request->user_id;
        $offre->poste = $request->poste;
        $offre->salaire = $request->salaire;
        $offre->deadline = $request->deadline;
        $offre->description = $request->description;
        if($request->type == '1'){
            $offre->test = '1';
            $offre->test_id = $request->qcm;
        }elseif($request->type == '2'){
            $offre->test = '2';
           if ($request->hasFile('pdf')) {
        $pdf = time() . '.' . $request->pdf->extension();
        $request->pdf->move(public_path('test'), $pdf);
        $offre->lien = $pdf;
           }
        }else{
            $offre->test = '0';
           }



        $offre->save();

        foreach($result as $techno){
            $competence = Techno::where('titre',$techno)->orWhere('titre','like',$techno)->first();
            if(!$competence){
               $competence = new Techno();
               $competence->titre = $techno;
               $competence->save();
            }

            $offre->Techno()->syncWithoutDetaching($competence->id);
         }
        return redirect()->route('offre.index')
        ->with('success_message', 'offre was successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offre = Offre::find($id);
        return view('offre.show',compact('offre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offre = Offre::find($id);
        $technos = Techno::all();
        return view('offre.edit',compact('offre','technos'));
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
        $offre =  Offre::find($id);
       if ($request->hasFile('pdf')) {
        $pdf = time() . '.' . $request->pdf->extension();
        $request->pdf->move(public_path('test'), $pdf);
        $offre->test = $pdf;
    }

        $offre->poste = $request->poste;
        $offre->salaire = $request->salaire;
        $offre->deadline = $request->deadline;
        $offre->description = $request->description;
        $offre->save();
         $result = explode(',', $request->competence);

      foreach($result as $techno){

            $competence = Techno::where('titre',$techno)->orWhere('titre','like',$techno)->first();

            if(!$competence){
               $competence = new Techno();
               $competence->titre = $techno;
               $competence->save();
            }

            $offre->Techno()->syncWithoutDetaching($competence->id);
         }
        return redirect()->route('offre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offre =  Offre::find($id);

        $offre->delete();
        return redirect()->route('offre.index');
    }

    public function candidats($id)
    {
        $offre =  Offre::find($id);
        if($offre->test == '2'){
            return view('offre.candidats',compact('offre'));
        }elseif($offre->test == '1'){
            $results = Test::where('offre_id',$id)->get();


            return view('results.index', compact('results'));
        }

    }
}
