@extends('layouts.main-layout')

@section('content')
    <div>
        <h2>CURRENT SERIES</h2>
    </div>
    <div id="cards-container">
        @foreach ($fumetti as $fumetto)
            <div class="comic-card">
                <div class="img-container">
                    <img src="{{ $fumetto['thumb'] }}" alt="">
                </div>
                <a href="{{ route('single') }}" class="">
                    <h3>{{ $fumetto['series'] }}</h3>
                </a>

            </div>
        @endforeach
    </div>
    <div>
        <a href="/single">single</a>
    </div>
@endsection
