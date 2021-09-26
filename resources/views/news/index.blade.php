@extends('layouts.app')

@section('container')

    <div class="flex h-full w-full items-center justify-evenly">
        <a href="{{ route('news-lolko') }}" class="w-2/12 h-3/12 flex items-center justify-center shadow-insetSmaller rounded-full ">
            <div class="flex justify-center items-center flex-col">
                <h1>Lolko</h1>
            </div>
        </a>

        

        <a href="{{ route('news-web') }}" class="w-2/12 h-3/12 flex items-center justify-center shadow-insetSmaller rounded-full ">
            web
        </a>
    </div>


    <x-footer/>
@endsection
