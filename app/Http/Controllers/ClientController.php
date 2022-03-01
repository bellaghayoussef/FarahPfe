<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Techno;
use App\Models\User;
use App\Models\favori;
use App\Models\Certif;

class ClientController extends Controller
{
    public function etudiant()
    {
        $client = Auth()->user()->id;
        $technos = Techno::all();
        $users = User::whereHas("roles", function ($q) {
            $q->where("name", "etudiant");
        })->get();
        foreach ($users as $user) {
            foreach ($user->Techno()->get() as $techno) {

                $user->competence = $user->competence . "," . $techno->titre;
            }
            if (count(favori::where('client_id', $client)->where('etudiant_id', $user->id)->get()) == 0) {

                $user->isfavret = false;
            } else {
                $user->isfavret = true;
            }
        }
        $certifs = Certif::all();



        return view('client.etudiant', compact('technos', 'users', 'certifs'));
    }



public function etudiantshow($id){
    $user = User::find($id);
    $client = Auth()->user()->id;


     foreach ($user->Techno()->get() as $techno) {

                $user->competence = $user->competence . "," . $techno->titre;
            }

            foreach ($user->Certif()->get() as $Certif) {

                $user->Certifications = $user->Certifications . "," . $Certif->titre;
            }
    if (count(favori::where('client_id', $client)->where('etudiant_id', $user->id)->get()) == 0) {

                $user->isfavret = false;
            } else {
                $user->isfavret = true;
            }
    return view('client.etudiantshow',compact('user'));

}

    public function etudiantfavori()
    {
        $client = Auth()->user()->id;

        $userss = User::whereHas("roles", function ($q) {
            $q->where("name", "etudiant");
        })->get();
        $users = collect();
        foreach ($userss as $user) {
            foreach ($user->Techno()->get() as $techno) {

                $user->competence = $user->competence . "," . $techno->titre;
            }
            if (count(favori::where('client_id', $client)->where('etudiant_id', $user->id)->get()) == 0) {
                $user->isfavret = false;
            } else {

                $users->add($user);
                $user->isfavret = true;
            }
        }



        return view('client.etudiantfavori', compact('users'));
    }

    public function favori(Request $request)
    {
        $client = Auth()->user()->id;
        if (count(favori::where('client_id', $client)->where('etudiant_id', $request->id)->get()) == 0) {

            $favori = new favori();
            $favori->client_id = $client;
            $favori->etudiant_id = $request->id;
            $favori->save();
            return "save";
        } else {
            $favori = favori::where('client_id', $client)->where('etudiant_id', $request->id)->first();
            $favori->delete();
            return "delete";
        }
    }
}
