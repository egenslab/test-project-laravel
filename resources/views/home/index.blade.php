@extends('layouts.app-master')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" id="app"></div>
    <script src="{{ asset('public/js/app.js') }}" async defer></script>
@endsection
