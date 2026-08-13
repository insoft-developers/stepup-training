<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = 'client';
        $clients = Client::latest()->get();
        $info = Information::first();
        $clientTitle = $info->client_title ?? '';
        return view('backoffice.pages.client.index', compact('view', 'clients', 'clientTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $view = 'tambah';
        return view('backoffice.pages.client.create', compact('view'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'tagline'   => 'nullable|string|max:255',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'color'     => 'nullable|in:bg_one,bg_two,bg_three,bg_four,bg_five,bg_six,bg_seven',
            'bg_eight',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        /*
        |--------------------------------------------------------------------------
        | Upload Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());

            $image = $manager->decode(
                $request->file('image')
            );

            /*
             * Sesuaikan ukuran logo/client
             * Bisa diubah sesuai desain website.
             */
            $image->cover(512, 512);

            $filename = 'client-' . uniqid() . '.jpg';

            Storage::disk('public')->makeDirectory('clients');

            $image->save(
                storage_path('app/public/clients/' . $filename),
                quality: 90
            );

            $validated['image'] = 'clients/' . $filename;
        }

        Client::create($validated);

        return redirect()
            ->route('backoffice.clients.index')
            ->with('success', 'Client berhasil ditambahkan.');
    }

    /**
     * Form edit client
     */
    public function edit(Client $client)
    {
        return view('backoffice.pages.client.edit', compact('client'));
    }

    /**
     * Update client
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'tagline'   => 'nullable|string|max:255',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'color'     => 'nullable|in:bg_one,bg_two,bg_three,bg_four,bg_five,bg_six,bg_seven',
            'bg_eight',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        /*
        |--------------------------------------------------------------------------
        | Upload Image Baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            // Hapus image lama
            if (
                $client->image &&
                Storage::disk('public')->exists($client->image)
            ) {
                Storage::disk('public')->delete($client->image);
            }

            $manager = new ImageManager(new Driver());

            $image = $manager->decode(
                $request->file('image')
            );

            $image->cover(512, 512);

            $filename = 'client-' . uniqid() . '.jpg';

            Storage::disk('public')->makeDirectory('clients');

            $image->save(
                storage_path('app/public/clients/' . $filename),
                quality: 90
            );

            $validated['image'] = 'clients/' . $filename;
        }

        $client->update($validated);

        return redirect()
            ->route('backoffice.clients.index')
            ->with('success', 'Client berhasil diperbarui.');
    }

    /**
     * Hapus client
     */
    public function destroy(Client $client)
    {
        if (
            $client->image &&
            Storage::disk('public')->exists($client->image)
        ) {
            Storage::disk('public')->delete($client->image);
        }

        $client->delete();

        return redirect()
            ->route('backoffice.clients.index')
            ->with('success', 'Client berhasil dihapus.');
    }

    public function updateTitle(Request $request)
    {
        $request->validate([
            'client_title' => 'required|string|max:255',
        ]);

        $information = Information::first();

        if (!$information) {
            $information = new Information();
        }

        $information->client_title = $request->client_title;
        $information->save();

        return redirect()
            ->route('backoffice.clients.index')
            ->with('success', 'Judul client berhasil diperbarui.');
    }
}
