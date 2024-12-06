@props([
    'url'=>'/',
    'bgClass'=>'bg-yellow-500',
    'hoverClass'=>'hover:bg-yellow-600',
    'textClass'=>'text-black',
    'icon'=>'',
    'mobile'=>false
])
<a href={{$url}}
   class="{{$mobile?'block':''}} {{$bgClass .' '. $hoverClass .' ' .$textClass}} px-4 py-2 rounded hover:shadow-md transition duration-300">
                        @if ($icon)
                        <i class="fa fa-{{$icon}}"></i>
                        @endif
                        {{$slot}}
                    </a>
