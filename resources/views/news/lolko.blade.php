@extends('layouts.app')

@section('container')

    <x-top-news/>

    <div class="flex items-center justify-center flex-col h-screen w-full">
        <h1>informace o aktualizacích Lolka</h1>
        <h1 class=" text-xl mt-1/12">Verze klienta - <span class="font-bold">{{ $newest }}</span></h1>

    </div>



    <x-footer/>
@endsection
