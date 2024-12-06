
@php
        // var_dump($attributes);
@endphp
        @props(['active'=>false, 'icon'=>null, 'mobile'=>false])
@if ($mobile)
<a {{$attributes}} class="block px-4 py-2 hover:bg-blue-700">
    @if ($icon)
        <i class="fa fa-{{$icon}} mr-1"></i>
    @endif
    {{$slot}}
</a>

@else

<a {{$attributes}}
 class="text-white hover:underline py-2 {{$active?'text-yellow-500': ''}}">
 @if ($icon)
     <i class="fa fa-{{$icon}} mr-1"></i>
 @endif
    {{$slot}}
</a>
@endif
