@extends('layouts.index')

@section('mainContent')
    <H1>INI USER</H1>
    @foreach ($question as $q)
        <a href="{{ route('user.pertanyaan.show', $q->id) }}"
            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $q->subject }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $q->question }}</p>
        </a>
    @endforeach
@endsection
