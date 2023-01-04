<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div
                class="flex flex-col items-center justify-center text-center"
            >
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$listing->image ? asset('storage/'.$listing->image) : asset('images/no-image.png')}}"
                    alt=""
                />

                <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                <div class="text-xl font-bold mb-4">{{$listing->manufacturer}}</div>
                <x-listing-tags :tagsCsv="$listing->tags"/>
                <div class="border border-gray-200 w-full m-4"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Item Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{$listing->description}}

                        <a
                            href="mailto:{{$listing->email}}"
                            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                            Contact Seller</a
                        >

                    </div>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
            </form>
        </x-card>

    </div>
</x-layout>
