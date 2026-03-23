@include('partials.header')

<div class="max-w-5xl mx-auto mt-12 px-4">

<h1 class="text-3xl md:text-4xl font-bold mb-8">
    {{ $author['name'] }}
</h1>

<div class="flex flex-col md:flex-row gap-10">

    <!-- FOTO -->
    <div class="flex justify-center md:justify-start">
        <img src="/images/authors/author_{{ $author['id'] }}.jpg" 
             class="w-48 md:w-56 rounded-lg">
    </div>

    <!-- INFO PRINCIPAL -->
    <div class="flex-1 space-y-3 text-gray-800">

        <p><span class="font-semibold">Nationality:</span> {{ $author['nationality'] }}</p>

        <p><span class="font-semibold">Birth Year:</span> {{ $author['birth_year'] }}</p>

        <p><span class="font-semibold">Field:</span> {{ $author['fields'] }}</p>

        <p><span class="font-semibold">University:</span> {{ $author['university'] }}</p>

        <p><span class="font-semibold">Experience:</span> {{ $author['experience'] }}</p>

    </div>

</div>

<!-- BIOGRAFÍA -->
<div class="mt-10">

<h2 class="text-xl font-semibold mb-3">Biography</h2>

<p class="text-gray-700 leading-relaxed max-w-3xl">
    {{ $author['biography'] }}
</p>

</div>

<!-- LIBROS DEL AUTOR -->
@if(!empty($authorBooks))
<div class="mt-10">
    <h2 class="text-xl font-semibold mb-3">Books by {{ $author['name'] }}</h2>

    <ul class="list-disc list-inside space-y-1 text-blue-600">
        @foreach($authorBooks as $book)
            <li>
                <a href="/books/{{ $book['id'] }}" class="hover:underline">
                    {{ $book['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endif

<!-- BOTÓN VOLVER -->
<div class="mt-10">
    <a href="/authors" class="text-blue-600 hover:underline">
        ← Back to Authors
    </a>
</div>

</div>

@include('partials.footer')