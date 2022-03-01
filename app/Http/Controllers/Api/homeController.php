<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\User;
use App\Models\Techno;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Models\Certif;
class homeController extends Controller
{
    public function index()
    {
        $user = Auth::User();

        $offres = array();
        $collection = new \Illuminate\Database\Eloquent\Collection();
        foreach ($user->Techno()->get() as $techno) {
            foreach ($techno->Offre()->with('User')->get() as $offre) {
                if (array_search($offre, $offres, true) === false) {

                    $offres[$offre->id] = $offre;
                    
                    foreach ($offre->Techno()->get() as $techno){
                        $offre->technos = $techno->titre." , " . $offre->technos;
                    }
                                             
                    if($user->Offre()->where('offre_id',$offre->id)->first() == null){
                        $offre->postuler = true;

                    }else{
                        $offre->postuler = false;
                    }
                    $collection->add($offre);

                     
                }
            }
        }



        return Response::json($collection);
    }



    public function postuler(Request $request)
    {
        $user = Auth::User();
        if($user->cv){
            $user->Offre()->syncWithoutDetaching([$request->id  => ['cv' => $user->cv]]);
             $response["success"] = true;
        }else{
            $response["success"] = false;
        }

       


       

        return Response::json($response);
    }

    public function getdonneer(Request $request)
    {
        $user = Auth::User();
        if($request->type == 1){
             $donner = Techno::all();
           $userdonn =$user->Techno()->get() ;
           foreach ($donner as  $value) {
            $value->type = "1";
            if($userdonn->contains('id',$value->id)){
               # code...
             $value->execte = true;
             }else{
                 $value->execte = false;
             }
           }
                 # code...
             
        }elseif($request->type == 2){
            $donner = Certif::all();
           $userdonn =$user->Certif()->get() ;
            foreach ($donner as  $value) {
                $value->type = "2";
            if($userdonn->contains('id',$value->id)){
               # code...
             $value->execte = true;
             }else{
                 $value->execte = false;
             }
           }
                 # code...
             
        }

       

        return Response::json($donner);
    }
    public function sychncro(Request $request){
         $user = Auth::User();
       if($request->type == 1){
             $donner = Techno::all();
           $userdonn =$user->Techno()->get() ;
          
            if($userdonn->contains('id',$request->id)){
               # code...
              $user->Techno()->detach($request->id);
             }else{
                  $user->Techno()->syncWithoutDetaching($request->id);
             }
           
                 # code...
             
        }elseif($request->type == 2){
            $donner = Certif::all();
           $userdonn =$user->Certif()->get() ;
            
            if($userdonn->contains('id',$request->id)){
               # code...
            $user->Certif()->detach($request->id);
             }else{
                  $user->Certif()->syncWithoutDetaching($request->id);
             }
           
                 # code...
             
        }
 $response["success"] = true;
  return Response::json($response);

    }


    public function update(Request $request){
         $user = Auth::User();
    
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->username;
        $user->phone = $request->phone;
        $user->niveau = $request->niveau;
        $user->phone = $request->phone;
        $user->matricule = $request->matricule;
        $user->save();
  return Response::json($user);

    }


}
