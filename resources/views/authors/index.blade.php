@include('partials.header')

<div class="max-w-4xl mx-auto mt-10 px-4">

<h1 class="text-3xl font-bold mb-2 text-center">Authors</h1>

<p class="text-gray-600 text-center mb-8">
This section presents information about authors
</p>

<div class="space-y-4">

@foreach($authors as $author)

<a href="/authors/{{ $author['id'] }}" 
   class="block border border-gray-300 rounded-lg p-5 hover:shadow-md hover:bg-gray-50 transition">

    <h2 class="text-xl font-semibold">{{ $author['name'] }}</h2>

    <p class="text-gray-600">{{ $author['fields'] }}</p>

    <div class="text-sm text-gray-500 mt-2">
        {{ $author['nationality'] }} • Born {{ $author['birth_year'] }}
    </div>

</a>

@endforeach

<br/>

@include('partials.footer')