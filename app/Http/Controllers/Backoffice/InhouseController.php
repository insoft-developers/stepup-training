<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Inhouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class InhouseController extends Controller
{
    public function index()
    {
        $inhouses = Inhouse::latest()->get();
        $info = Information::first();
        $inhouseTitle = $info->inhouse_title ?? '';
        $inhouseSubtitle = $info->inhouse_subtitle ?? '';
        $customText = $info->custom_text ?? '';
        $customCtaText = $info->custom_cta_text ?? '';
        $customCtaLink = $info->custom_cta_link ?? '';
        $inhouseButtonText = $info->inhouse_traning_buttom_text ?? '';

        return view(
            'backoffice.pages.inhouses.index',
            compact('inhouses', 'inhouseTitle', 'inhouseSubtitle', 'customCtaText', 'customText', 'customCtaLink', 'inhouseButtonText')
        );
    }


    /**
     * Form Create
     */
    public function create()
    {
        return view(
            'backoffice.pages.inhouses.create'
        );
    }


    /**
     * Store
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',

            'theme' => 'required|string|max:255',

            'duration' => 'required|string|max:255',

            'title' => 'required|string|max:255',

            'paragraph' => 'required|string',

            'audience' => 'required|string|max:255',

            'location' => 'required|string|max:255',

            'cta_link' => 'required|string|max:255',

            'is_active' => 'required|in:0,1',

        ]);


        /*
        |--------------------------------------------------------------------------
        | Upload Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            $manager = new ImageManager(
                new Driver()
            );

            $image = $manager->decode(
                $request->file('image')
            );

            /*
             * Ukuran gambar Inhouse
             *
             * Silakan ubah sesuai desain website.
             */
            $image->cover(410, 250);

            $filename = 'inhouse-' . uniqid() . '.jpg';

            Storage::disk('public')
                ->makeDirectory('inhouses');

            $image->save(
                storage_path(
                    'app/public/inhouses/' . $filename
                ),
                quality: 90
            );

            $validated['image'] =
                'inhouses/' . $filename;
        }


        Inhouse::create($validated);


        return redirect()
            ->route('backoffice.inhouses.index')
            ->with(
                'success',
                'Inhouse berhasil ditambahkan.'
            );
    }


    /**
     * Form Edit
     */
    public function edit(Inhouse $inhouse)
    {
        return view(
            'backoffice.pages.inhouses.edit',
            compact('inhouse')
        );
    }


    /**
     * Update
     */
    public function update(
        Request $request,
        Inhouse $inhouse
    ) {

        $validated = $request->validate([

            'image' =>
            'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'theme' => 'required|string|max:255',

            'duration' =>
            'required|string|max:255',

            'title' =>
            'required|string|max:255',

            'paragraph' =>
            'required|string',

            'audience' =>
            'required|string|max:255',

            'location' =>
            'required|string|max:255',

            'cta_link' =>
            'required|string|max:255',

            'is_active' => 'required|in:0,1',

        ]);


        /*
        |--------------------------------------------------------------------------
        | Upload Image Baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            /*
             * Hapus image lama
             */
            if (
                $inhouse->image &&
                Storage::disk('public')
                ->exists($inhouse->image)
            ) {

                Storage::disk('public')
                    ->delete($inhouse->image);
            }


            /*
             * Intervention Image
             */

            $manager = new ImageManager(
                new Driver()
            );

            $image = $manager->decode(
                $request->file('image')
            );


            /*
             * Resize
             */

            $image->cover(410, 250);


            /*
             * Nama file
             */

            $filename =
                'inhouse-' . uniqid() . '.jpg';


            Storage::disk('public')
                ->makeDirectory('inhouses');


            /*
             * Simpan
             */

            $image->save(
                storage_path(
                    'app/public/inhouses/' . $filename
                ),
                quality: 90
            );


            $validated['image'] =
                'inhouses/' . $filename;
        }


        $inhouse->update($validated);


        return redirect()
            ->route('backoffice.inhouses.index')
            ->with(
                'success',
                'Inhouse berhasil diperbarui.'
            );
    }


    /**
     * Delete
     */
    public function destroy(Inhouse $inhouse)
    {

        /*
         * Hapus image
         */

        if (
            $inhouse->image &&
            Storage::disk('public')
            ->exists($inhouse->image)
        ) {

            Storage::disk('public')
                ->delete($inhouse->image);
        }


        /*
         * Hapus database
         */

        $inhouse->delete();


        return redirect()
            ->route('backoffice.inhouses.index')
            ->with(
                'success',
                'Inhouse berhasil dihapus.'
            );
    }


    public function updateTitle(Request $request)
    {
        $request->validate([
            'inhouse_title' => 'required|string|max:255',
            'inhouse_subtitle' => 'required|string|max:255',
            'custom_text' => 'required|string|max:255',
            'custom_cta_text' => 'required|string|max:255',
            'custom_cta_link' => 'required|string|max:255',
            'inhouse_traning_buttom_text' => 'required|string|max:255',
        ]);

        $information = Information::first();

        if (!$information) {
            $information = new Information();
        }

        $information->inhouse_title = $request->inhouse_title;
        $information->inhouse_subtitle = $request->inhouse_subtitle;
        $information->custom_text = $request->custom_text;
        $information->custom_cta_text = $request->custom_cta_text;
        $information->custom_cta_link = $request->custom_cta_link;
        $information->inhouse_traning_buttom_text = $request->inhouse_traning_buttom_text;
        $information->save();

        return redirect()
            ->route('backoffice.inhouses.index')
            ->with('success', 'Judul Inhouse Training berhasil diperbarui.');
    }
}
