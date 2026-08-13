<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = 'contact';
        $contact = Contact::first();
        return view('backoffice.pages.contact.index', compact('view', 'contact'));
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
        $validated = $request->validate([

            'small_title' => 'required|string|max:255',

            'title_text' => 'required|string|max:255',

            'paragraph' => 'required|string',

            'message_header' => 'required|string|max:255',

            'message_subtitle' => 'nullable|string|max:255',

            'name_label' => 'required|string|max:255',

            'email_label' => 'required|string|max:255',

            'phone_label' => 'required|string|max:255',

            'subject_label' => 'required|string|max:255',

            'message_label' => 'required|string|max:255',

            'name_placeholder_text' => 'required|string|max:255',

            'email_placeholder_text' => 'required|string|max:255',

            'phone_placeholder_text' => 'required|string|max:255',

            'subject_placeholder_text' => 'required|string|max:255',

            'message_placeholder_text' => 'required|string|max:255',

            'button_text' => 'required|string|max:255',
        ]);

        $contact = Contact::first();

        /*
        |--------------------------------------------------------------------------
        | Jika belum ada data, buat record pertama
        |--------------------------------------------------------------------------
        */

        if (!$contact) {

            $contact = Contact::create($validated);
        } else {

            $contact->update($validated);
        }

        return redirect()
            ->route('backoffice.contact.index')
            ->with(
                'success',
                'Pengaturan Contact berhasil diperbarui.'
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
