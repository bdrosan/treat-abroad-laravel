@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-3 rounded-lg shadow-md">
            <form action="{{ route("admin.settings.about-us") }}" method="post">
                @csrf
                <!-- Content -->
                <div class="">
                    <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                    <textarea placeholder="Content" id="content" name="content"
                              class="w-full p-3 border rounded-lg shadow-sm">
                        {!! $content !!}
                    </textarea>
                </div>
                <button type="submit" class="p-2 px-4 rounded bg-blue-500 text-white">Update</button>
            </form>
        </div>
    </main>

    <script>
        tinymce.init({
            selector: 'textarea#content',
            height: 500,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'link image | undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: (cb, value, meta) => {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.addEventListener('change', (e) => {
                    const file = e.target.files[0];

                    const reader = new FileReader();
                    reader.addEventListener('load', () => {
                        /*
                          Note: Now we need to register the blob in TinyMCEs image blob
                          registry. In the next release this part hopefully won't be
                          necessary, as we are looking to handle it internally.
                        */
                        const id = 'blobid' + (new Date()).getTime();
                        const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        const base64 = reader.result.split(',')[1];
                        const blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {title: file.name});
                    });
                    reader.readAsDataURL(file);
                });

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    </script>
@endsection