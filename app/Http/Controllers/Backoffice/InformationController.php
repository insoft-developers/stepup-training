<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = 'information';
        $information = Information::first();
        return view('backoffice.pages.information.index', compact('view', 'information'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $input = $request->all();
        $information = Information::find($id);
        $validated = $request->validate([
            'title'                => 'required|string|max:255',
            'address'              => 'required|string|max:255',
            'email'                => 'required|email|max:255',
            'whatsapp'             => 'required|string|max:255',
            'footer_title'         => 'required|string|max:255',
            'footer_contact_title' => 'nullable|string|max:255',

            'facebook'             => 'nullable|string|max:255',
            'instagram'            => 'nullable|string|max:255',
            'youtube'              => 'nullable|string|max:255',
            'tiktok'               => 'nullable|string|max:255',
        ]);

        $information->update($input);

        return redirect()
            ->route('backoffice.information.index')
            ->with('success', 'Informasi website berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
