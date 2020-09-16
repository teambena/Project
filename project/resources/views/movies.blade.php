@extends('layouts.movielayout')
 
@section('title', 'Movies')
 
@section('content')
 
    <div class="container products">
 
        <div class="row">
 
            @foreach($movies as $movie)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $movie->image }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $movie->movie_name }}</h4>
                            <p>{{ $movie->description }}</p>
                            <p><strong>Price: </strong> {{ $movie->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$movie->movie_id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
 
        </div><!-- End row -->
 
    </div>
 
@endsection