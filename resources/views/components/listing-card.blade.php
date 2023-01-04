@props(['listing'])
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing->image ? asset('storage/'.$listing->image) : asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->manufacturer}}</div>
            <x-listing-tags :tagsCsv="$listing->tags"/>
        </div>
    </div>
</x-card>
