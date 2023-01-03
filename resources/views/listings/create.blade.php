<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Add an Item
            </h2>
            <p class="mb-4">Post an Item for sell</p>
        </header>

        <form method="POST" action="/listings">
            @csrf
            <div class="mb-6">
                <label
                    for="manufacturer"
                    class="inline-block text-lg mb-2"
                >Manufacturer</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="manufacturer"
                    value="{{old('manufacturer')}}"
                />
                @error('manufacturer')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                >Item Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    placeholder="Example: HP Envy"
                    value="{{old('title')}}"
                />
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                >Contact Email</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{old('email')}}"
                />
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    placeholder="Example: Electronics, Computer, Phone, etc"
                    value="{{old('tags')}}"
                />
                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

{{--            <div class="mb-6">--}}
{{--                <label for="image" class="inline-block text-lg mb-2">--}}
{{--                    Item Image--}}
{{--                </label>--}}
{{--                <input--}}
{{--                    type="file"--}}
{{--                    class="border border-gray-200 rounded p-2 w-full"--}}
{{--                    name="image"--}}
{{--                />--}}
{{--                @error('file')--}}
{{--                <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Item Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10"
                    placeholder="Include all specifications of the item"
                >{{old('description')}}</textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Add Item
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
