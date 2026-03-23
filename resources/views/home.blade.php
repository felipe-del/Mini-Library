@include('partials.header')

<div class="max-w-5xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">

    <!-- Título principal -->
    <h1 class="text-3xl sm:text-4xl font-bold mb-4 text-center">
        Computer Science Books
    </h1>

    <!-- Descripción -->
    <p class="text-gray-700 mb-6 text-center leading-relaxed">
        Explore comprehensive information on computer science books, their authors, and publishers. 
        Learn about editions, fields of study, and more.
    </p>

    <!-- Links destacados con imágenes -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6">

        <a href="/books" class="block p-6 text-center border border-gray-300 rounded-lg hover:shadow-md hover:bg-gray-50 transition">
            <img src="/images/home/stack-of-books.png" alt="Books" class="mx-auto mb-4 w-24 h-24 object-contain">
            <h2 class="text-xl font-semibold mb-2">Books</h2>
            <p class="text-gray-600 text-sm">Detailed information about computer science books and editions.</p>
        </a>

        <a href="/authors" class="block p-6 text-center border border-gray-300 rounded-lg hover:shadow-md hover:bg-gray-50 transition">
            <img src="/images/home/quill.png" alt="Authors" class="mx-auto mb-4 w-24 h-24 object-contain">
            <h2 class="text-xl font-semibold mb-2">Authors</h2>
            <p class="text-gray-600 text-sm">Learn about authors, their fields, universities, and experience.</p>
        </a>

        <a href="/publishers" class="block p-6 text-center border border-gray-300 rounded-lg hover:shadow-md hover:bg-gray-50 transition">
            <img src="/images/home/publishing.png" alt="Publishers" class="mx-auto mb-4 w-24 h-24 object-contain">
            <h2 class="text-xl font-semibold mb-2">Publishers</h2>
            <p class="text-gray-600 text-sm">Discover publishers, specialization, and company details.</p>
        </a>

    </div>

</div>

@include('partials.footer')