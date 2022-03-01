<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Offre;
use App\Models\User;
use App\Models\Techno;
use App\Models\Certif;
use App\Models\domain;


use PDF;
class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $technos = Techno::all();
        $offres = Offre::all();
        $certifs = Certif::all();
        $domains = domain::all();

        // foreach ($user->Techno()->get() as $techno) {
        //     foreach ($techno->Offre()->with('User')->get() as $offre) {
        //         if (array_search($offre, $offres, true) === false) {

        //             $offres[$offre->id] = $offre;
        //         }
        //     }
        // }

        return view('profile.etudiant.profile', compact('user', 'offres', 'technos', 'certifs','domains'));
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

        $user = User::find($id);
        if ($request->hasFile('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('images'), $imageName);
            $user->avatar = 'images/' . $imageName;
        }

        if ($request->hasFile('pdf')) {
            $pdf = time() . '.' . $request->pdf->extension();
            $request->pdf->move(public_path('cv'), $pdf);
            $user->cv = $pdf;
        }


        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->niveau = $request->niveau;



        if ($request->password != null) {
            $user->password =  bcrypt($request->password);
        }
        $user->save();
        return back();
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


    public function competence(Request $request, $id)
    {
        $user = User::find($id);
        foreach ($request->competence as $competence) {

            $user->Techno()->syncWithoutDetaching($request->competence);
        }

        return back();
    }

    public function postuler(Request $request, $id)
    {
        $user = Auth::User();
        if($request->hasFile('pdf')){
                $pdf = time() . '.' . $request->pdf->extension();
        $request->pdf->move(public_path('pdf'), $pdf);
         $user->Offre()->syncWithoutDetaching([$id  => ['cv' => $pdf]]);
    }elseif($user->cv != null){
       $user->Offre()->syncWithoutDetaching([$id  => ['cv' => $user->cv]]);

    }else{
        return back();
    }

        $offre = Offre::find($id);

        if($offre->test == '2'  && $offre->lien != null){
             return view('test.pdf', compact( 'offre'));
        }if($offre->test == '1'){
            $questions = Question::where('topic_id',$offre->test_id)->get();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }
            return view('test.qcm', compact( 'offre','questions'));
        }
        return back();
    }


    public function removetechno($request)
    {
        $user = Auth::User();

        $user->Techno()->detach($request);

        return back()->with("tab", "compitance");
    }
    public function removecertif($request)
    {
        $user = Auth::User();

        $user->Certif()->detach($request);
        return back();
    }

    public function certif(Request $request, $id)
    {
        $user = User::find($id);
        foreach ($request->certif as $certif) {

            $user->Certif()->syncWithoutDetaching($request->certif);
        }

        return back()->with("tab", "certif");
    }


}
