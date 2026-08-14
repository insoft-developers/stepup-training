<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Facility;
use App\Models\Testimony;
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
        $clients = Client::orderBy('name')->get();

        $facilities = Facility::orderBy('name')->get();
        $testimonies = Testimony::latest()->get();
        return view(
            'backoffice.pages.trainings.create',
            compact('clients', 'facilities', 'testimonies')
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
            'testimonies' => 'nullable|array',
            'testimonies.*' => 'integer|exists:testimonies,id',

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


        $training = Training::create($validated);

        $training->clients()->sync(
            $request->input('client_ids', [])
        );

        foreach ($request->input('benefits', []) as $benefit) {

            if (
                empty($benefit['item_title']) &&
                empty($benefit['item_text'])
            ) {
                continue;
            }

            $training->benefits()->create([
                'item_title' => $benefit['item_title'],
                'item_text' => $benefit['item_text'],
            ]);
        }


        foreach ($request->input('reasons', []) as $reason) {

            if (
                empty($reason['item_title']) &&
                empty($reason['item_text'])
            ) {
                continue;
            }

            $training->reasons()->create([
                'item_title' => $reason['item_title'],
                'item_text' => $reason['item_text'],
            ]);
        }

        foreach ($request->input('courses', []) as $course) {

            if (
                empty($course['item_title']) &&
                empty($course['item_subtitle']) &&
                empty($course['item_text'])
            ) {
                continue;
            }

            $training->courseItems()->create([
                'item_title'    => $course['item_title'],
                'item_subtitle' => $course['item_subtitle'],
                'item_text'     => $course['item_text'],
            ]);
        }




        foreach ($request->input('outlines', []) as $outline) {

            if (
                empty($outline['item_small_title']) &&
                empty($outline['item_title']) &&
                empty($outline['item_text'])
            ) {
                continue;
            }

            $training->outlineItems()->create([
                'item_small_title' => $outline['item_small_title'],
                'item_title'       => $outline['item_title'],
                'item_text'        => $outline['item_text'],
            ]);
        }



        foreach ($request->input('audiences', []) as $audience) {

            if (
                empty($audience['item_icon']) &&
                empty($audience['item_title']) &&
                empty($audience['item_text'])
            ) {
                continue;
            }

            $training->audiences()->create([
                'item_icon'  => $audience['item_icon'],
                'item_title' => $audience['item_title'],
                'item_text'  => $audience['item_text'],
            ]);
        }

        foreach ($request->input('prices', []) as $price) {

            if (
                empty($price['price_category']) &&
                empty($price['price_early_bird']) &&
                empty($price['price_reguler'])
            ) {
                continue;
            }

            $training->priceDetails()->create([
                'price_category'        => $price['price_category'],
                'price_early_bird'      => $price['price_early_bird'],
                'price_text_early_bird' => $price['price_text_early_bird'],
                'price_reguler'         => $price['price_reguler'],
                'price_text_reguler'    => $price['price_text_reguler'],
            ]);
        }

        $training->facilities()->sync(
            $request->input('facilities', [])
        );



        $training->testimonies()->sync(
            $request->input('testimonies', [])
        );
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
        $clients = Client::orderBy('name')->get();
        $facilities = Facility::orderBy('name')->get();
        $testimonies = Testimony::latest()->get();
        return view(
            'backoffice.pages.trainings.edit',
            compact('training', 'clients', 'facilities', 'testimonies')
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
            'testimonies' => 'nullable|array',
            'testimonies.*' => 'integer|exists:testimonies,id',
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
        $training->clients()->sync(
            $request->input('client_ids', [])
        );


        $training->benefits()->delete();

        foreach ($request->input('benefits', []) as $benefit) {

            if (
                empty($benefit['item_title']) &&
                empty($benefit['item_text'])
            ) {
                continue;
            }

            $training->benefits()->create([
                'item_title' => $benefit['item_title'],
                'item_text' => $benefit['item_text'],
            ]);
        }




        $training->reasons()->delete();

        foreach ($request->input('reasons', []) as $reason) {

            if (
                empty($reason['item_title']) &&
                empty($reason['item_text'])
            ) {
                continue;
            }

            $training->reasons()->create([
                'item_title' => $reason['item_title'],
                'item_text' => $reason['item_text'],
            ]);
        }

        $training->courseItems()->delete();

        foreach ($request->input('courses', []) as $course) {

            if (
                empty($course['item_title']) &&
                empty($course['item_subtitle']) &&
                empty($course['item_text'])
            ) {
                continue;
            }

            $training->courseItems()->create([
                'item_title'    => $course['item_title'],
                'item_subtitle' => $course['item_subtitle'],
                'item_text'     => $course['item_text'],
            ]);
        }

        $training->outlineItems()->delete();

        foreach ($request->input('outlines', []) as $outline) {

            if (
                empty($outline['item_small_title']) &&
                empty($outline['item_title']) &&
                empty($outline['item_text'])
            ) {
                continue;
            }

            $training->outlineItems()->create([
                'item_small_title' => $outline['item_small_title'],
                'item_title'       => $outline['item_title'],
                'item_text'        => $outline['item_text'],
            ]);
        }




        $training->audiences()->delete();

        foreach ($request->input('audiences', []) as $audience) {

            if (
                empty($audience['item_icon']) &&
                empty($audience['item_title']) &&
                empty($audience['item_text'])
            ) {
                continue;
            }

            $training->audiences()->create([
                'item_icon'  => $audience['item_icon'],
                'item_title' => $audience['item_title'],
                'item_text'  => $audience['item_text'],
            ]);
        }


        $training->priceDetails()->delete();

        foreach ($request->input('prices', []) as $price) {

            if (
                empty($price['price_category']) &&
                empty($price['price_early_bird']) &&
                empty($price['price_reguler'])
            ) {
                continue;
            }

            $training->priceDetails()->create([
                'price_category'        => $price['price_category'],
                'price_early_bird'      => $price['price_early_bird'],
                'price_text_early_bird' => $price['price_text_early_bird'],
                'price_reguler'         => $price['price_reguler'],
                'price_text_reguler'    => $price['price_text_reguler'],
            ]);
        }


        $training->facilities()->sync(
            $request->input('facilities', [])
        );

        $training->testimonies()->sync(
            $request->input('testimonies', [])
        );

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
            quality: 99
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
