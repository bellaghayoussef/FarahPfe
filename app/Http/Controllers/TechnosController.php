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
     * Display a listing of the technos.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $technos = techno::with('domain')->paginate(25);

        return view('technos.index', compact('technos'));
    }

    /**
     * Show the form for creating a new techno.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $domains = Domain::pluck('id','id')->all();
        
        return view('technos.create', compact('domains'));
    }

    /**
     * Store a new techno in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            techno::create($data);

            return redirect()->route('technos.techno.index')
                ->with('success_message', 'Techno was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified techno.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $techno = techno::with('domain')->findOrFail($id);

        return view('technos.show', compact('techno'));
    }

    /**
     * Show the form for editing the specified techno.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $techno = techno::findOrFail($id);
        $domains = Domain::pluck('id','id')->all();

        return view('technos.edit', compact('techno','domains'));
    }

    /**
     * Update the specified techno in the storage.
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
            
            $techno = techno::findOrFail($id);
            $techno->update($data);

            return redirect()->route('technos.techno.index')
                ->with('success_message', 'Techno was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified techno from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $techno = techno::findOrFail($id);
            $techno->delete();

            return redirect()->route('technos.techno.index')
                ->with('success_message', 'Techno was successfully deleted.');
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
            'domain_id' => 'nullable', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
