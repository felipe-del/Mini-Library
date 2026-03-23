@include('partials.header')

<div class="max-w-6xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">

    <h1 class="text-3xl sm:text-4xl font-bold mb-2 text-center">Publishers</h1>

    <p class="text-gray-600 text-center mb-6">
        This section presents information about publishers
    </p>

    <div class="mb-8 flex justify-center space-x-6 text-sm sm:text-base">
        <a href="/authors" class="text-blue-600 hover:underline transition">Ver Autores</a>
        <a href="/books" class="text-blue-600 hover:underline transition">Ver Libros</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($publishers as $publisher)
        <a href="/publishers/{{ $publisher['id'] }}" 
           class="block border border-gray-300 rounded-lg p-5 hover:shadow-md hover:bg-gray-50 transition">

            <!-- Logo del publisher -->
            <img src="/images/publishers/{{ $publisher['logo'] }}" 
                 alt="{{ $publisher['name'] }}" 
                 class="w-full h-48 object-cover rounded mb-4">

            <h2 class="text-xl font-semibold mb-2">{{ $publisher['name'] }}</h2>

            <p class="text-gray-600 text-sm mb-1">Country: {{ $publisher['country'] }}</p>
            <p class="text-gray-600 text-sm mb-1">Founded: {{ $publisher['founded'] }}</p>
            <p class="text-gray-600 text-sm">Specialization: {{ $publisher['specialization'] }}</p>

        </a>
        @endforeach
    </div>

</div>

@include('partials.footer')