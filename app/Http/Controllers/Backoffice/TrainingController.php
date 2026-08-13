<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class TrainingController extends Controller
{
    public function index()
    {
        $view = 'training';
        $trainings = Training::latest()->get();

        return view(
            'backoffice.pages.trainings.index',
            compact('view', 'trainings')
        );
    }


    /**
     * CREATE
     */
    public function create()
    {
        return view(
            'backoffice.pages.trainings.create'
        );
    }


    /**
     * STORE
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'theme' => 'required|string|max:255',

            'title' => 'required|string|max:255',

            'start_at' => 'required|date',

            'finish_at' => 'required|date|after_or_equal:start_at',

            'paragraph' => 'required|string|max:255',

            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',

            'client_header_text' => 'required|string|max:255',

            'problem_small_title' => 'required|string|max:255',
            'problem_title' => 'required|string|max:255',
            'problem_subtitle' => 'required|string|max:255',

            'problem_item_icon_1' => 'required|string|max:255',
            'problem_item_title_1' => 'required|string|max:255',
            'problem_item_text_1' => 'required|string|max:255',

            'problem_item_icon_2' => 'required|string|max:255',
            'problem_item_title_2' => 'required|string|max:255',
            'problem_item_text_2' => 'required|string|max:255',

            'problem_item_icon_3' => 'required|string|max:255',
            'problem_item_title_3' => 'required|string|max:255',
            'problem_item_text_3' => 'required|string|max:255',

            'benefit_small_title' => 'required|string|max:255',
            'benefit_title' => 'required|string|max:255',
            'benefit_subtitle' => 'required|string|max:255',

            'why_paragraph' => 'required|string',

            'course_small_title' => 'required|string|max:255',
            'course_title' => 'required|string|max:255',
            'course_subtitle' => 'required|string|max:255',

            'outline_small_title' => 'required|string|max:255',
            'outline_title' => 'required|string|max:255',
            'outline_subtitle' => 'required|string|max:255',

            'wajib_ikut_header_text' => 'required|string|max:255',

            'testi_header_text' => 'required|string|max:255',

            'price_small_title' => 'required|string|max:255',
            'price_title' => 'required|string|max:255',
            'price_subtitle' => 'required|string|max:255',

            'facility_small_title' => 'required|string|max:255',
            'facility_title' => 'required|string|max:255',
            'facility_subtitle' => 'required|string|max:255',
            'is_active' => 'required|in:0,1',
            'location' => 'required|string|max:255',

        ]);


        /*
        |--------------------------------------------------------------------------
        | Upload Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            $paths = $this->processImage(
                $request->file('image')
            );

            $validated['detail_image'] =
                $paths['detail'];

            $validated['thumb_image'] =
                $paths['thumb'];
        }
        $validated['slug'] = $this->generateUniqueSlug(
            $request->title
        );


        Training::create($validated);


        return redirect()
            ->route('backoffice.trainings.index')
            ->with(
                'success',
                'Training berhasil ditambahkan.'
            );
    }


    /**
     * EDIT
     */
    public function edit(Training $training)
    {
        return view(
            'backoffice.pages.trainings.edit',
            compact('training')
        );
    }


    /**
     * UPDATE
     */
    public function update(
        Request $request,
        Training $training
    ) {

        $validated = $request->validate([

            'theme' => 'required|string|max:255',

            'title' => 'required|string|max:255',

            'start_at' => 'required|date',

            'finish_at' => 'required|date|after_or_equal:start_at',

            'paragraph' => 'required|string|max:255',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',

            'client_header_text' => 'required|string|max:255',

            'problem_small_title' => 'required|string|max:255',
            'problem_title' => 'required|string|max:255',
            'problem_subtitle' => 'required|string|max:255',

            'problem_item_icon_1' => 'required|string|max:255',
            'problem_item_title_1' => 'required|string|max:255',
            'problem_item_text_1' => 'required|string|max:255',

            'problem_item_icon_2' => 'required|string|max:255',
            'problem_item_title_2' => 'required|string|max:255',
            'problem_item_text_2' => 'required|string|max:255',

            'problem_item_icon_3' => 'required|string|max:255',
            'problem_item_title_3' => 'required|string|max:255',
            'problem_item_text_3' => 'required|string|max:255',

            'benefit_small_title' => 'required|string|max:255',
            'benefit_title' => 'required|string|max:255',
            'benefit_subtitle' => 'required|string|max:255',

            'why_paragraph' => 'required|string',

            'course_small_title' => 'required|string|max:255',
            'course_title' => 'required|string|max:255',
            'course_subtitle' => 'required|string|max:255',

            'outline_small_title' => 'required|string|max:255',
            'outline_title' => 'required|string|max:255',
            'outline_subtitle' => 'required|string|max:255',

            'wajib_ikut_header_text' => 'required|string|max:255',

            'testi_header_text' => 'required|string|max:255',

            'price_small_title' => 'required|string|max:255',
            'price_title' => 'required|string|max:255',
            'price_subtitle' => 'required|string|max:255',

            'facility_small_title' => 'required|string|max:255',
            'facility_title' => 'required|string|max:255',
            'facility_subtitle' => 'required|string|max:255',
            'is_active' => 'required|in:0,1',
            'location' => 'required|string|max:255',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Upload Image Baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            /*
             * Hapus gambar lama
             */

            if (
                $training->detail_image &&
                Storage::disk('public')
                ->exists($training->detail_image)
            ) {

                Storage::disk('public')
                    ->delete($training->detail_image);
            }


            if (
                $training->thumb_image &&
                Storage::disk('public')
                ->exists($training->thumb_image)
            ) {

                Storage::disk('public')
                    ->delete($training->thumb_image);
            }


            /*
             * Buat gambar baru
             */

            $paths = $this->processImage(
                $request->file('image')
            );


            $validated['detail_image'] =
                $paths['detail'];

            $validated['thumb_image'] =
                $paths['thumb'];
        }


        $validated['slug'] = $this->generateUniqueSlug(
            $request->title,
            $training->id
        );

        $training->update($validated);


        return redirect()
            ->route('backoffice.trainings.index')
            ->with(
                'success',
                'Training berhasil diperbarui.'
            );
    }


    /**
     * DELETE
     */
    public function destroy(Training $training)
    {

        if (
            $training->detail_image &&
            Storage::disk('public')
            ->exists($training->detail_image)
        ) {

            Storage::disk('public')
                ->delete($training->detail_image);
        }


        if (
            $training->thumb_image &&
            Storage::disk('public')
            ->exists($training->thumb_image)
        ) {

            Storage::disk('public')
                ->delete($training->thumb_image);
        }


        $training->delete();


        return redirect()
            ->route('backoffice.trainings.index')
            ->with(
                'success',
                'Training berhasil dihapus.'
            );
    }


    /**
     * PROCESS IMAGE
     *
     * Satu upload menghasilkan:
     *
     * detail : 1200 x 800
     * thumb  : 600 x 400
     */
    private function processImage($file)
    {
        $manager = new ImageManager(
            new Driver()
        );

        $image = $manager->decode($file);

        Storage::disk('public')
            ->makeDirectory('trainings');

        Storage::disk('public')
            ->makeDirectory('trainings/thumbs');


        /*
    |--------------------------------------------------------------------------
    | Detail
    |--------------------------------------------------------------------------
    */

        $detailImage = clone $image;

        $detailImage->cover(562, 700);

        $detailFilename =
            'training-' . uniqid() . '.jpg';

        $detailPath =
            'trainings/' . $detailFilename;

        $detailImage->save(
            storage_path(
                'app/public/' . $detailPath
            ),
            quality: 90
        );


        /*
    |--------------------------------------------------------------------------
    | Thumbnail
    |--------------------------------------------------------------------------
    */

        $thumbImage = clone $image;

        $thumbImage->cover(410, 250);

        $thumbFilename =
            'training-thumb-' . uniqid() . '.jpg';

        $thumbPath =
            'trainings/thumbs/' . $thumbFilename;

        $thumbImage->save(
            storage_path(
                'app/public/' . $thumbPath
            ),
            quality: 90
        );

        return [
            'detail' => $detailPath,
            'thumb'  => $thumbPath,
        ];
    }


    private function generateUniqueSlug($title, $exceptId = null)
    {
        $slug = Str::slug($title);

        $originalSlug = $slug;

        $counter = 1;

        while (
            Training::where('slug', $slug)
            ->when(
                $exceptId,
                fn($query) =>
                $query->where('id', '!=', $exceptId)
            )
            ->exists()
        ) {

            $slug = $originalSlug . '-' . $counter;

            $counter++;
        }

        return $slug;
    }
}
