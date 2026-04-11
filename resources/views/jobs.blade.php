<x-layout>
      <h1>Jobs</h1>
    <x-slot:head>placeeeeeeeeeeeees</x-slot:head>
    <x-slot:feet>{{ $greeting }}</x-slot:feet>
    <ul>
@foreach ($jobs as $job)
      <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:text-blue-700 hover:underline"><li><strong>{{ $job['title'] }}</strong> - {{ $job['salary'] }}</li></a>
    
@endforeach
</ul>
</x-layout>
