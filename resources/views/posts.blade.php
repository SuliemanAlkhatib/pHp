<x-layout>
      <h1>Posts</h1>
    <x-slot:head>these are the posts available here</x-slot:head>
    <ul>
    @foreach (@posts as $post){
        <a href="/posts/{{ $post['id'] }}"><li><strong>{{ $post['title'] }}</strong> <p>{{ $post['body'] }}</p></a>
    }
    
    @endforeach
</ul></x-layout>