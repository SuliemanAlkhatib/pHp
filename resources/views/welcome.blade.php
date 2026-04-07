<x-layout>
    <x-slot:head>placeeeeeeeeeeeees</x-slot:head>
    <h1>{{$greeting}}</h1>
    <x-slot:feet>{{ $greeting }}</x-slot:feet>
@foreach ($jobs as $job)
    <p>{{ $job['title'] }} - ${{ number_format($job['salary']) }}</p>
@endforeach
</x-layout>
