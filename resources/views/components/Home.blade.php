@props(['active'=> false])

<a {{$attributes}} class="{{$active? 'bg-black text-white' : 'bg-white text-black'}}">{{$slot}}</a>
