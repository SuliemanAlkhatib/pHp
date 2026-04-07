<x-layout>
      <h1>Jobs</h1>
    <x-slot:head>placeeeeeeeeeeeees</x-slot:head>
    <x-slot:feet>{{ $greeting }}</x-slot:feet>
@foreach ($jobs as $job)
    <p><strong>{{ $job['title'] }}</strong> - ${{ number_format($job['salary']) }}</p>
@endforeach
</x-layout>
