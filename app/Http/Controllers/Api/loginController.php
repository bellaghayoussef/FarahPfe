<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;

class loginController extends Controller
{



    use IssueTokenTrait;

    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        return $this->issueToken($request, 'password');
    }

    public function refresh(Request $request)
    {
        $this->validate($request, [
            'refresh_token' => 'required'
        ]);

        return $this->issueToken($request, 'refresh_token');
    }

    public function logout(Request $request)
    {

        $accessToken = Auth::user()->token();

        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update(['revoked' => true]);

        $accessToken->revoke();

        return response()->json([], 204);
    }

    public function register(Request $request)
    {


        $user = User::create([
            'nom' => $request->nom,
            'email' => $request->username,
            'password' => Hash::make($request->password),
            'prenom' => $request->prenom,
            'avatar' => 'images/user.jpg',
            'phone' => $request->phone,

            'niveau' => $request->niveau,
            'matricule' => $request->matricule,



        ]);

        $user->assignRole('etudiant');
        $request->username = $request->email;
        return $this->issueToken($request, 'password');
    }
}
