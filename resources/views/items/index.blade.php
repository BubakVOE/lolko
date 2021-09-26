@extends('layouts.app')

@section('container')


    <div class="relative">
        @foreach ($items as $item)
            <h1>{{ $item->name }}</h1>
        @endforeach



    </div>
    
    <x-footer/>
@endsection