<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\certif;
use Illuminate\Http\Request;
use Exception;

class CertifsController extends Controller
{

    /**
     * Display a listing of the certifs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $certifs = certif::paginate(25);

        return view('certifs.index', compact('certifs'));
    }

    /**
     * Show the form for creating a new certif.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('certifs.create');
    }

    /**
     * Store a new certif in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            certif::create($data);

            return redirect()->route('certifs.certif.index')
                ->with('success_message', 'Certif was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified certif.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $certif = certif::findOrFail($id);

        return view('certifs.show', compact('certif'));
    }

    /**
     * Show the form for editing the specified certif.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $certif = certif::findOrFail($id);
        

        return view('certifs.edit', compact('certif'));
    }

    /**
     * Update the specified certif in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $certif = certif::findOrFail($id);
            $certif->update($data);

            return redirect()->route('certifs.certif.index')
                ->with('success_message', 'Certif was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified certif from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $certif = certif::findOrFail($id);
            $certif->delete();

            return redirect()->route('certifs.certif.index')
                ->with('success_message', 'Certif was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'titre' => 'required|string|min:1|max:255', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
