<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\domain;
use Illuminate\Http\Request;
use Exception;

class DomainsController extends Controller
{

    /**
     * Display a listing of the domains.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $domains = domain::paginate(25);

        return view('domains.index', compact('domains'));
    }

    /**
     * Show the form for creating a new domain.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('domains.create');
    }

    /**
     * Store a new domain in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            domain::create($data);

            return redirect()->route('domains.domain.index')
                ->with('success_message', 'Domain was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified domain.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $domain = domain::findOrFail($id);

        return view('domains.show', compact('domain'));
    }

    /**
     * Show the form for editing the specified domain.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $domain = domain::findOrFail($id);
        

        return view('domains.edit', compact('domain'));
    }

    /**
     * Update the specified domain in the storage.
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
            
            $domain = domain::findOrFail($id);
            $domain->update($data);

            return redirect()->route('domains.domain.index')
                ->with('success_message', 'Domain was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified domain from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $domain = domain::findOrFail($id);
            $domain->delete();

            return redirect()->route('domains.domain.index')
                ->with('success_message', 'Domain was successfully deleted.');
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
                'title' => 'nullable|string|min:0|max:255', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
