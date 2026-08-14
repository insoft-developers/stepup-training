<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonyController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonies = Testimony::latest()->paginate(10);

        return view(
            'backoffice.pages.testimonies.index',
            compact('testimonies')
        );
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.pages.testimonies.create');
    }


    /**
     * Store a newly created resource.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        if ($request->hasFile('foto')) {

            $validated['foto'] = $request
                ->file('foto')
                ->store('testimonies', 'public');
        }

        Testimony::create($validated);

        return redirect()
            ->route('backoffice.testimonies.index')
            ->with('success', 'Testimony berhasil ditambahkan.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimony $testimony)
    {
        return view(
            'backoffice.pages.testimonies.edit',
            compact('testimony')
        );
    }


    /**
     * Update the specified resource.
     */
    public function update(
        Request $request,
        Testimony $testimony
    ) {
        $validated = $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($testimony->foto) {
                Storage::disk('public')->delete(
                    $testimony->foto
                );
            }

            $validated['foto'] = $request
                ->file('foto')
                ->store('testimonies', 'public');
        }

        $testimony->update($validated);

        return redirect()
            ->route('backoffice.testimonies.index')
            ->with('success', 'Testimony berhasil diperbarui.');
    }


    /**
     * Remove the specified resource.
     */
    public function destroy(Testimony $testimony)
    {
        if ($testimony->foto) {

            Storage::disk('public')->delete(
                $testimony->foto
            );
        }

        $testimony->delete();

        return redirect()
            ->route('backoffice.testimonies.index')
            ->with('success', 'Testimony berhasil dihapus.');
    }
}
