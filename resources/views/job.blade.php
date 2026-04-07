<x-layout>
      <h1>Job</h1>
    <p class="text-xl font-bold my-5">{{ $job['title'] }}</p>
    <p class="text-lg font-bold"> this job pays ${{ ($job['salary']) }} per year</p>
    
    
</x-layout>