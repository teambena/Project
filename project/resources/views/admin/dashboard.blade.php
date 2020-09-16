@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as admin!
                </div>

                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                    <a href="{{ url('user') }}" class="btn btn-primary btn-block">View all</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection