@include('partials.header')

<div class="max-w-5xl mx-auto mt-12 px-4">

    <h1 class="text-3xl md:text-4xl font-bold mb-8">
        {{ $book['title'] }}
    </h1>

    <div class="flex flex-col md:flex-row gap-10">

        <!-- FOTO DEL LIBRO -->
        <div class="flex justify-center md:justify-start">
            <img src="/images/books/book_{{ $book['id'] }}.jpg" 
                 class="w-48 md:w-56 rounded-lg shadow-lg">
        </div>

        <!-- INFO PRINCIPAL -->
        <div class="flex-1 space-y-3 text-gray-800">
            <p><span class="font-semibold">Edition:</span> {{ $book['edition'] }}</p>
            <p><span class="font-semibold">Pages:</span> {{ $book['pages'] }}</p>
            <p><span class="font-semibold">Language:</span> {{ $book['language'] }}</p>
            <p><span class="font-semibold">Category:</span> {{ $book['category'] }}</p>
            <p><span class="font-semibold">Difficulty:</span> {{ $book['difficulty'] }}</p>
            <p><span class="font-semibold">Format:</span> {{ $book['format'] }}</p>
            <p><span class="font-semibold">Rating:</span> {{ $book['rating'] }}</p>

            <p>
                <span class="font-semibold">Author:</span>
                <a href="/authors/{{ $book['author_id'] }}" 
                   class="text-blue-600 hover:underline">
                   {{ $book['author'] ?? 'Unknown' }}
                </a>
            </p>

            <p>
                <span class="font-semibold">Publisher:</span>
                <a href="/publishers/{{ $book['publisher_id'] }}" 
                   class="text-blue-600 hover:underline">
                   {{ $book['publisher'] ?? 'Unknown' }}
                </a>
            </p>
        </div>

    </div>

    <!-- DESCRIPCIÓN -->
    <div class="mt-10">
        <h2 class="text-xl font-semibold mb-3">Description</h2>
        <p class="text-gray-700 leading-relaxed max-w-3xl">
            {{ $book['description'] }}
        </p>
    </div>

    <!-- BOTÓN VOLVER -->
    <div class="mt-10">
        <a href="/books" class="text-blue-600 hover:underline">
            ← Back to Books
        </a>
    </div>

</div>

@include('partials.footer')