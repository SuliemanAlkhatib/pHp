<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="h-full bg-gray-100">



<div class="overflow-hidden bg-gray-100 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
      <div class="lg:pt-4 lg:pr-8">
        <div class="lg:max-w-lg">
          
          <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">{{$slot}}</p>
          <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none bg-gray-100">
           <x-Home href="/" :active="request()->is('/')">home</x-Home>
              <x-Home href="/contacts" :active="request()->is('contacts')" >contact</x-Home>
              <x-Home href="/jobs" :active="request()->is('jobs')">jobs</x-Home>
              <x-Home href="/posts" :active="request()->is('posts')">posts</x-Home>

            
            
            
          </dl>
        </div>
      </div>
         </div>
  </div>
</div>
</body>
</html>
