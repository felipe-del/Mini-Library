@include('partials.header')

<div class="max-w-6xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">

    <h1 class="text-3xl sm:text-4xl font-bold mb-2 text-center">Books</h1>

    <p class="text-gray-600 text-center mb-6">
        This section presents information about books
    </p>

    <div class="mb-8 flex justify-center space-x-6 text-sm sm:text-base">
        <a href="/authors" class="text-blue-600 hover:underline transition">Ver Autores</a>
        <a href="/publishers" class="text-blue-600 hover:underline transition">Ver Editoriales</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($books as $book)
        <a href="/books/{{ $book['id'] }}" 
           class="block border border-gray-300 rounded-lg p-5 hover:shadow-md hover:bg-gray-50 transition">

            <!-- Foto del libro -->
            <img src="/images/books/book_{{ $book['id'] }}.jpg" alt="{{ $book['title'] }}" 
                 class="w-full h-48 object-cover rounded mb-4">

            <h2 class="text-xl font-semibold mb-2">{{ $book['title'] }}</h2>

            <p class="text-gray-600 text-sm mb-1">Edition: {{ $book['edition'] }}</p>
            <p class="text-gray-600 text-sm mb-1">Pages: {{ $book['pages'] }}</p>
            <p class="text-gray-600 text-sm mb-1">Author: {{ $book['author'] ?? 'Unknown' }}</p>
            <p class="text-gray-600 text-sm">Publisher: {{ $book['publisher'] ?? 'Unknown' }}</p>

        </a>
        @endforeach
    </div>

</div>

@include('partials.footer')