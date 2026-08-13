<div class="row">

    {{-- LEFT --}}
    <div class="col-lg-8">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white border-bottom">

                <h5 class="mb-1">

                    <i class="mdi mdi-account-group text-primary me-2"></i>

                    Informasi Client

                </h5>

                <small class="text-muted">
                    Masukkan informasi client.
                </small>

            </div>


            <div class="card-body">

                {{-- NAME --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Nama Client

                        <span class="text-danger">*</span>

                    </label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name', $client->name ?? '') }}"
                           placeholder="Contoh: PT. ABC Indonesia">

                </div>


                {{-- TAGLINE --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Tagline
                    </label>

                    <input type="text"
                           name="tagline"
                           class="form-control"
                           value="{{ old('tagline', $client->tagline ?? '') }}"
                           placeholder="Contoh: Partner terpercaya kami">

                </div>


                {{-- COLOR --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Warna

                        <span class="text-muted fw-normal">
                            (pilihan tampilan)
                        </span>

                    </label>

                    <select name="color"
                            id="color"
                            class="form-select">

                        <option value="">
                            Pilih Warna
                        </option>

                        @php
                            $colors = [
                                'bg_one'   => 'Warna 1',
                                'bg_two'   => 'Warna 2',
                                'bg_three'   => 'Warna 3',
                                'bg_four'   => 'Warna 4',
                                'bg_five'   => 'Warna 5',
                                'bg_six'   => 'Warna 6',
                                'bg_seven'   => 'Warna 7',
                                'bg_eight'   => 'Warna 8',
                                
                            ];
                        @endphp

                        @foreach($colors as $value => $label)

                            <option value="{{ $value }}"
                                {{ old('color', $client->color ?? '') == $value ? 'selected' : '' }}>

                                {{ $label }}

                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- STATUS --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Status
                    </label>

                    <div class="form-check form-switch">

                        <input type="hidden"
                               name="is_active"
                               value="0">

                        <input class="form-check-input"
                               type="checkbox"
                               name="is_active"
                               value="1"
                               id="is_active"

                               {{ old('is_active', $client->is_active ?? 1) ? 'checked' : '' }}>

                        <label class="form-check-label"
                               for="is_active">

                            Client Aktif

                        </label>

                    </div>

                </div>

            </div>

        </div>


    </div>


    {{-- RIGHT --}}
    <div class="col-lg-4">

        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white border-bottom">

                <h5 class="mb-1">

                    <i class="mdi mdi-image-outline text-danger me-2"></i>

                    Logo / Image

                </h5>

                <small class="text-muted">
                    JPG, PNG atau WebP maksimal 2MB.
                </small>

            </div>


            <div class="card-body">

                {{-- PREVIEW --}}
                <div class="border rounded p-2 mb-3"
                     style="background:#f8f9fa;">

                    @if(isset($client) && $client->image)

                        <img src="{{ asset('storage/' . $client->image) }}"
                             id="imagePreview"
                             class="img-fluid w-100"
                             style="
                                height:180px;
                                object-fit:contain;
                             ">

                    @else

                        <div id="emptyImage"
                             class="d-flex align-items-center justify-content-center"
                             style="height:180px;">

                            <div class="text-center text-muted">

                                <i class="mdi mdi-image-outline fs-1"></i>

                                <div>
                                    Preview Image
                                </div>

                            </div>

                        </div>

                        <img src=""
                             id="imagePreview"
                             class="img-fluid w-100 d-none"
                             style="
                                height:180px;
                                object-fit:contain;
                             ">

                    @endif

                </div>


                {{-- IMAGE --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        {{ isset($client) ? 'Ganti Image' : 'Image' }}

                    </label>

                    <input type="file"
                           name="image"
                           id="image"
                           class="form-control"
                           accept="image/jpeg,image/png,image/webp">

                </div>


                {{-- SAVE --}}
                <button type="submit"
                        class="btn btn-primary w-100 py-2">

                    <i class="mdi mdi-content-save me-1"></i>

                    {{ isset($client) ? 'Simpan Perubahan' : 'Simpan Client' }}

                </button>


                <a href="{{ route('backoffice.clients.index') }}"
                   class="btn btn-light w-100 mt-2">

                    Kembali

                </a>

            </div>

        </div>

    </div>

</div>


<script>

document.getElementById('image').addEventListener('change', function(event) {

    const file = event.target.files[0];

    if (!file) {
        return;
    }

    const reader = new FileReader();

    reader.onload = function(e) {

        const preview = document.getElementById('imagePreview');

        preview.src = e.target.result;

        preview.classList.remove('d-none');

        const emptyImage = document.getElementById('emptyImage');

        if (emptyImage) {
            emptyImage.classList.add('d-none');
        }

    };

    reader.readAsDataURL(file);

});

</script>