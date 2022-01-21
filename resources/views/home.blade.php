@extends('layouts.main')

@section('main')
    
<section class="movies-container full-width">
<div class="movies container px-20">

@foreach ($movies as $movie)
    <div class="card">
        <h2 class="text-center">{{ $movie->title }}</h2>
        <h4 class="text-center"><span>Original Title: </span> {{$movie->original_title }}</h4>
        <h4 class="text-center"><span>Nationality: </span>{{ ucfirst($movie->nationality) }}</h4>
        <h4 class="text-center"><span>Date: </span>{{ $movie->date }}</h4>
        <h4 class="text-center"><span>Vote: </span>{{ $movie->vote }}</h4>
    </div>


@endforeach



</div>
</section>



@endsection