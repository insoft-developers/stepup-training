<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
     public function index()
    {
        $facilities = Facility::latest()->paginate(10);

        return view('backoffice.pages.facilities.index', compact('facilities'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.pages.facilities.create');
    }


    /**
     * Store a newly created resource.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        Facility::create($validated);

        return redirect()
            ->route('backoffice.facilities.index')
            ->with('success', 'Facility berhasil ditambahkan.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facility $facility)
    {
        return view('backoffice.pages.facilities.edit', compact('facility'));
    }


    /**
     * Update the specified resource.
     */
    public function update(Request $request, Facility $facility)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        $facility->update($validated);

        return redirect()
            ->route('backoffice.facilities.index')
            ->with('success', 'Facility berhasil diperbarui.');
    }


    /**
     * Remove the specified resource.
     */
    public function destroy(Facility $facility)
    {
        $facility->delete();

        return redirect()
            ->route('backoffice.facilities.index')
            ->with('success', 'Facility berhasil dihapus.');
    }
}
