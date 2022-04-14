@extends('layouts.app')

@section('content')
    <x-setting heading="Edit Post">
                <h1 class="text-lg font-bold mb-4">
                    Update the Post
                </h1>
                <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="title"
                        >
                            Title
                        </label>

                        <input class="border border-gray-400 p-2 w-full"
                               type="text"
                               name="title"
                               id="title"
                               value="{{ old('title', $post->title) }}"
                               required
                        >

                        @error('title')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="slug"
                        >
                            Slug
                        </label>

                        <input class="border border-gray-400 p-2 w-full"
                               type="text"
                               name="slug"
                               id="slug"
                               value="{{ old('slug', $post->slug) }}"
                               required
                        >

                        @error('slug')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="excerpt"
                        >
                            Excerpt
                        </label>

                        <textarea class="border border-gray-400 p-2 w-full"
                               name="excerpt"
                               id="excerpt"
                               required
                        >{{ old('excerpt', $post->excerpt) }}</textarea>

                        @error('excerpt')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="body"
                        >
                            Body
                        </label>

                        <textarea class="border border-gray-400 p-2 w-full"
                               name="body"
                               id="body"
                               required
                        >{{ old('body', $post->body) }}</textarea>

                        @error('body')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex mt-6">

                        <div class="flex-1">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                            Thumbnail
                            </label>

                            <input class="border border-gray-400 p-2 w-full"
                                type="file"
                                name="thumbnail"
                                id="thumbnail"
                                value="{{ old('thumbnail', $post->thumbnail) }}"
                            >

                                @error('thumbnail')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror

                        </div>

                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="flex rounded-xl ml-6" width="100">
                    </div>


                    <div class="mb-6 mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="category_id"
                        >
                            Category
                        </label>

                        <select name="category_id" id="category_id">
                            @foreach (\App\Models\Category::all() as $category)
                                <option
                                    value="{{ $post->category->id }}"
                                    {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                                >{{ ucwords($post->category->name) }}</option>
                            @endforeach
                        </select>

                        @error('category')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    @include('components.form.button', ['slot' => 'Update'])
                </form>
            </x-setting>
@endsection
