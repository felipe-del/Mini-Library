@include('partials.header')

<div class="max-w-5xl mx-auto mt-12 px-4">

    <h1 class="text-3xl md:text-4xl font-bold mb-8">
        {{ $publisher['name'] }}
    </h1>

    <div class="flex flex-col md:flex-row gap-10">

        <!-- LOGO -->
        <div class="flex justify-center md:justify-start">
            <img src="/images/publishers/{{ $publisher['logo'] }}" 
                 class="w-48 md:w-56 rounded-lg shadow-lg">
        </div>

        <!-- INFO PRINCIPAL -->
        <div class="flex-1 space-y-3 text-gray-800">
            <p><span class="font-semibold">Country:</span> {{ $publisher['country'] }}</p>
            <p><span class="font-semibold">Founded:</span> {{ $publisher['founded'] }}</p>
            <p><span class="font-semibold">Genere:</span> {{ $publisher['genere'] }}</p>
            <p><span class="font-semibold">Headquarters:</span> {{ $publisher['headquarters'] }}</p>
            <p><span class="font-semibold">Website:</span> 
                <a href="{{ $publisher['website'] }}" target="_blank" class="text-blue-600 hover:underline">
                    {{ $publisher['website'] }}
                </a>
            </p>
            <p><span class="font-semibold">Specialization:</span> {{ $publisher['specialization'] }}</p>
        </div>

    </div>

    <!-- DESCRIPCIÓN -->
    <div class="mt-10">
        <h2 class="text-xl font-semibold mb-3">Description</h2>
        <p class="text-gray-700 leading-relaxed max-w-3xl">
            {{ $publisher['description'] }}
        </p>
    </div>

    <!-- LIBROS DEL PUBLISHER -->
    @if(!empty($publisherBooks))
    <div class="mt-10">
        <h2 class="text-xl font-semibold mb-3">Books Published</h2>
        <ul class="list-disc list-inside space-y-1 text-blue-600">
            @foreach($publisherBooks as $book)
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
        <a href="/publishers" class="text-blue-600 hover:underline">
            ← Back to Publishers
        </a>
    </div>

</div>

@include('partials.footer')