@extends('layouts.app')

@section('title', 'Nineteen Alpha – Empowering Defense')


@section('content')
    <div class="w-full">
        @include('partial.header')
        @include('partial.hero')
        @include('partial.about')
    
        @include('partial.capabilities')
        @include('partial.service')
         @include('partial.we_served')
        @include('partial.footer')
    </div>
@endsection
