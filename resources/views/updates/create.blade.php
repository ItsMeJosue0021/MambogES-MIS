<x-guidance-layout>
    <section>
        <div class="p-4 flex flex-col space-y-2">
            <div class="flex flex-col space-y-2">
                <a href="{{ route('update.list') }}" id="back" class="flex w-fit justify-start items-center space-x-2 py-1 px-4 group rounded bg-gray-200 hover:bg-gray-300 cursor-pointer group">
                    <i class='bx bx-left-arrow-alt text-black text-lg '></i>
                    <p class="poppins text-sm text-black">Back</p>
                </a>
            </div>
            <form action="{{ route('update.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-4 ">
                    <div class="w-full md:w-3/4 h-auto md:h-96 flex flex-col space-y-2">
                        <div class="w-full flex items-center justify-between space-x-4">
                            <div class="flex flex-col space-y-1 w-full">
                                <label for="title" class="poppins text-sm font-semibold">TITLE
                                    @error('title')
                                        <span class="text-xs font-light text-red-600">{{ $message }}</span>
                                    @enderror
                                </label>
                                <input name="title" id="title" type="text" placeholder="Title here.."  value="{{ old('title') }}"
                                class="text-sm rounded border-2 border-gray-200">
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label for="tag" class="poppins text-sm font-semibold">TAG</label>
                                <select name="tag" id="tag" class="text-sm rounded border-2 border-gray-200">
                                    @foreach ($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->tag}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label class="poppins text-sm font-semibold">DESCRIPTION
                                @error('description')
                                    <span class="text-xs font-light text-red-600">{{ $message }}</span>
                                @enderror
                            </label>
                            <textarea name="description" id="myeditorinstance" placeholder="Write something..">
                                {{ old('description') }}
                            </textarea>
                        </div>
                        <div class="pt-4 hidden md:flex">
                            <button type="submit" class="poppins text-sm text-white px-6 py-2 rounded bg-blue-700">POST</button>
                        </div>
                    </div>

                    <div class="w-full md:w-1/4 h-auto md:h-96 flex flex-col space-y-4">

                        <div class="flex flex-col space-y-1 items-start justify-start w-full">
                            <label for="tag" class="poppins text-sm font-semibold">COVER PHOTO
                                @error('cover_photo')
                                    <span class="text-xs font-light text-red-600">{{ $message }}</span>
                                @enderror
                            </label>
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div id="description" class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF</p>
                                </div>
                                <img id="image-preview" src="#" alt="Preview" class="hidden w-full h-full rounded-md" />
                                <input id="dropzone-file" type="file" name="cover_photo" class="hidden" accept="image/png, image/jpeg, image/gif" onchange="previewCoverPhoto(this)" />
                            </label>

                            <script>
                                function previewCoverPhoto(input) {
                                    var imagePreview = document.getElementById('image-preview');
                                    var description = document.getElementById('description');

                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = function(e) {
                                            imagePreview.src = e.target.result;
                                            imagePreview.classList.remove('hidden');
                                            description.classList.add('hidden');
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    } else {
                                        imagePreview.src = '';
                                        imagePreview.classList.add('hidden');
                                        description.classList.remove('hidden');
                                    }
                                }
                            </script>
                        </div>

                        <div class="flex flex-col space-y-1 items-start justify-start w-full">
                            <label for="images" class="poppins text-sm font-semibold">MORE IMAGES</label>
                            <label class="flex flex-col items-center justify-center w-full py-2 bg-blue-700 rounded-md cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-blue-800 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-6 h-6 text-white dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                </div>
                                <input type="file" name="images[]" class="hidden" accept="image/png, image/jpeg, image/gif" onchange="previewImages(this)" multiple />

                            </label>
                        </div>

                        <div id="image-previews" class="flex flex-wrap gap-2"></div>

                        <script>
                            function previewImages(input) {
                                var imagePreviews = document.getElementById('image-previews');

                                // Clear any existing image previews
                                imagePreviews.innerHTML = '';

                                if (input.files && input.files.length > 0) {
                                    for (var i = 0; i < input.files.length; i++) {
                                        var file = input.files[i];

                                        var previewContainer = document.createElement('div');
                                        previewContainer.className = 'p-1 rounded-md flex items-center space-x-2  border border-gray-300';

                                        var image = document.createElement('img');
                                        image.className = 'w-10 h-10 rounded';
                                        image.src = URL.createObjectURL(file);

                                        var fileName = document.createElement('p');
                                        fileName.className = 'text-xs text-gray-500';
                                        fileName.textContent = file.name;

                                        var removeButton = document.createElement('i');
                                        removeButton.className = 'bx bx-x text-lg text-gray-500 cursor-pointer hover:text-red-600';
                                         // Use a closure to capture the current previewContainer
                                        (function(previewContainer) {
                                            removeButton.onclick = function() {
                                                // Remove the captured preview container when the remove button is clicked
                                                previewContainer.remove();
                                            };
                                        })(previewContainer);

                                        // Append elements to the preview container
                                        previewContainer.appendChild(image);
                                        previewContainer.appendChild(fileName);
                                        previewContainer.appendChild(removeButton);

                                        // Append the preview container to the image previews container
                                        imagePreviews.appendChild(previewContainer);
                                    }
                                }
                            }

                        </script>
                    </div>

                    <div class="md:hidden flex w-full ">
                        <button type="submit" class="w-full poppins text-base font-semibold border-2 border-gray-300 text-black hover:text-white px-6 py-2 rounded bg-white hover:bg-blue-700">POST</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</x-guidance-layout>
