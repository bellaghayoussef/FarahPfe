<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;
use Auth;
class UsersController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function client()
    {
        $users = User::whereHas("roles", function ($q) {
            $q->where("name", "client");
        })->get();
        return view('user.client.index', compact('users'));
    }
    public function etudiant()
    {
        $users = User::whereHas("roles", function ($q) {
            $q->where("name", "etudiant");
        })->get();
        return view('user.etudiant.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createetudiant()
    {
        return view('user.etudiant.create');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $avatar = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('/images'), $avatar);
            $avatar = 'images/' . $avatar;
        } else {
            $avatar = $user->avatar;
        }
        if ($request->password != null) {

            $user->password = Hash::make($request->password);
        }
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;

        $user->phone = $request->phone;
        $user->cin = $request->cin;
        $user->avatar = $avatar;
        $user->save();
        return redirect()->route('user');
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




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_etudiant($id)
    {
        $user = User::find($id);
        return view('user.etudiant.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editetudiant($id)
    {
        $user = User::find($id);
        return view('user.etudiant.edit', compact('user'));
    }
    public function store_etudiant(Request $request)
    {

        $user = new User();
        if ($request->hasFile('avatar')) {
            $avatar = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('/images'), $avatar);
            $avatar = 'images/' . $avatar;
        } else {
            $avatar = 'images/user.jpg';
        }

        $user->password = Hash::make($request->password);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;

        $user->phone = $request->phone;
        $user->niveau = $request->niveau;
        $user->matricule = $request->matricule;
        $user->avatar = $avatar;
        $user->save();
        $user->assignRole('etudiant');
        return redirect()->route('etudiant');
    }

    public function update_etudiant(Request $request, $id)
    {

        $user = User::find($id);
        if ($request->hasFile('avatar')) {
            $avatar = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('/images'), $avatar);
            $avatar = 'images/' . $avatar;
        } else {
            $avatar = $user->avatar;
        }
        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        } else {
            $user->password = $user->avatar;
        }


        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;

        $user->phone = $request->phone;
        $user->niveau = $request->niveau;
        $user->matricule = $request->matricule;
        $user->avatar = $avatar;
        $user->save();
        return redirect()->route('etudiant');
    }


    public function destroyetudiant(Request $request, $id)
    {

        $user = User::find($id);

        $user->delete();
        return redirect()->route('etudiant');
    }


    public function createclient()
    {
        return view('user.client.create');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_client($id)
    {
        $user = User::find($id);
        return view('user.client.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editclient($id)
    {
        $user = User::find($id);
        return view('user.client.edit', compact('user'));
    }
    public function store_client(Request $request)
    {

        $user = new User();
        if ($request->hasFile('avatar')) {
            $avatar = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('/images'), $avatar);
            $avatar = 'images/' . $avatar;
        } else {
            $avatar = 'images/user.jpg';
        }

        $user->password = Hash::make($request->password);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;

        $user->phone = $request->phone;
        $user->cin = $request->cin;
        $user->avatar = $avatar;
        $user->save();
        $user->assignRole('client');
        return redirect()->route('client');
    }

    public function update_client(Request $request, $id)
    {

        $user = User::find($id);
        if ($request->hasFile('avatar')) {
            $avatar = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('/images'), $avatar);
            $avatar = 'images/' . $avatar;
        } else {
            $avatar = $user->avatar;
        }
        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        } else {
            $user->password = $user->avatar;
        }


        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;

        $user->phone = $request->phone;
        $user->cin = $request->cin;
        $user->avatar = $avatar;
        $user->save();
        return redirect()->route('client');
    }


    public function destroyclient(Request $request, $id)
    {

        $user = User::find($id);

        $user->delete();
        return redirect()->route('client');
    }









    public function admin()
    {
        $users = User::whereHas("roles", function ($q) {
            $q->where("name", "admin");
        })->get();
        return view('user.admin.index', compact('users'));
    }

    public function createadmin()
    {
        return view('user.admin.create');
    }
    public function show_admin($id)
    {
        $user = User::find($id);
        return view('user.admin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editadmin($id)
    {
        $user = User::find($id);
        return view('user.admin.edit', compact('user'));
    }
    public function store_admin(Request $request)
    {

        $user = new User();
        if ($request->hasFile('avatar')) {
            $avatar = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('/images'), $avatar);
            $avatar = 'images/' . $avatar;
        } else {
            $avatar = 'images/user.jpg';
        }

        $user->password = Hash::make($request->password);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;

        $user->phone = $request->phone;

        $user->avatar = $avatar;
        $user->save();
        $user->assignRole('admin');
        return redirect()->route('admin');
    }

    public function update_admin(Request $request, $id)
    {

        $user = User::find($id);
        if ($request->hasFile('avatar')) {
            $avatar = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('/images'), $avatar);
            $avatar = 'images/' . $avatar;
        } else {
            $avatar = $user->avatar;
        }
        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        } else {
            $user->password = $user->avatar;
        }


        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;

        $user->phone = $request->phone;

        $user->avatar = $avatar;
        $user->save();
        return redirect()->route('admin');
    }


    public function destroyadmin(Request $request, $id)
    {

        $user = User::find($id);

        $user->delete();
        return redirect()->route('admin');
    }
}
