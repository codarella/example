@props(['name'])
@error($name)
<p class="text-sx text-red-500 italic">{{$message}}</p>
@enderror