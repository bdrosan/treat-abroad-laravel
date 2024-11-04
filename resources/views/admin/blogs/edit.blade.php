@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">

            @include("admin.layout.breadcrumb", [  "last" => "create new blog", "links" => [ ["route" => route('admin.blogs.index'), "name" => "Blogs"] ]])
            <!-- Table -->

            {{-- Blog Creating Form --}}
            <div class="mx-auto bg-white mt-3 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6">Edit New Blog</h2>

                <form action="{{ route("admin.blogs.update", ['id' => $blog->id ])  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">

                        <!-- Thumbnail Image -->
                        <div class="col-span-1">
                            <label for="image" class="block text-gray-700 font-semibold mb-2">
                                Thumbnail Image
                            </label>
                            <input type="file" id="image" name="image"
                                   class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>


                        <!-- Blog Title -->
                        <div class="col-span-1">
                            <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                            <input type="text"
                                   id="title"
                                   name="title"
                                   value="{{ $blog->title }}"
                                   class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>


                        <!-- Description -->
                        <div class="">
                            <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                            <textarea placeholder="Description" id="description" name="description" class="w-full p-3 border rounded-lg shadow-sm">
                                {{ $blog->description }}
                            </textarea>
                        </div>

                        <!-- Content -->
                        <div class="">
                            <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                            <textarea placeholder="Content" id="content" name="content" class="w-full p-3 border rounded-lg shadow-sm">
                                {{ $blog->content }}
                            </textarea>
                        </div>


                        <!-- Tags -->
                        <div>
                            <label for="tags" class="block text-gray-700 font-semibold mb-2">
                                Tags
                            </label>
                            <select id="tags" name="tags[]"
                                    class="w-full p-3 border rounded-lg shadow-sm" required multiple>
                                <option value="-1">Select Tag</option>
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}" {{ in_array($tag->id ,$blog->tags->map(function ($tag){return $tag->id;})->toArray()) ? "selected" : "" }}>
                                        {{ $tag->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                                class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600">
                            Update Blog
                        </button>
                    </div>

                </form>
            </div>
            {{-- End Doctor Creating Form --}}
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
                        const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        const base64 = reader.result.split(',')[1];
                        const blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), { title: file.name });
                    });
                    reader.readAsDataURL(file);
                });

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    </script>
@endsection