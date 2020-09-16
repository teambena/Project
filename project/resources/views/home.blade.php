@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
<?php 


?>

        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                <a href="{{ url('movie') }}" class="btn btn-primary btn-block">View all</a>
            </div>
            
        </div>


    </div>

    
</div>
@endsection

