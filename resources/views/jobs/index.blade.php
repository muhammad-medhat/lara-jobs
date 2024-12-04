@extends('layout')
@section('content')
    <h2>{{ $title}}
    </h2>
    <ul>

        @forelse ($jobs as $job)
        <li>{{$job}}</li>
        @empty
        <li>Nothing</li>
        @endforelse
    </ul>
@endsection
