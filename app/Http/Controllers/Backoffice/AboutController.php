<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = 'abaout';
        $about = About::first();
        return view('backoffice.pages.about.index', compact('view', 'about'));
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


        $about = About::find($id);
        $validated = $request->validate([
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'small_title'       => 'required|string|max:255',
            'title_text'        => 'required|string|max:255',
            'about_text'        => 'required|string|max:255',

            'item_title_1'      => 'required|string|max:255',
            'item_subtitle_1'   => 'nullable|string|max:255',

            'item_title_2'      => 'required|string|max:255',
            'item_subtitle_2'   => 'nullable|string|max:255',

            'cta_text'          => 'required|string|max:255',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            // Hapus gambar lama
            if (
                $about->image &&
                Storage::disk('public')->exists($about->image)
            ) {
                Storage::disk('public')->delete($about->image);
            }

            // Image Manager v4
            $manager = new ImageManager(new Driver());

            // Decode uploaded image
            $image = $manager->decode(
                $request->file('image')
            );

            // Crop + resize menjadi tepat 410 x 450 px
            $image->cover(410, 450);

            // Nama file
            $filename = 'about-' . uniqid() . '.jpg';

            // Simpan hasil JPG
            $image->save(
                storage_path('app/public/abouts/' . $filename),
                quality: 90
            );

            // Simpan path ke database
            $validated['image'] = 'abouts/' . $filename;
        }

        $about->update($validated);


        return redirect()
            ->route('backoffice.about.index')
            ->with('success', 'Informasi About berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
