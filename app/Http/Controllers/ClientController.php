<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Techno;
use App\Models\User;
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
   
    return view('client.etudiantshow',compact('user'));

}

   

    
}
