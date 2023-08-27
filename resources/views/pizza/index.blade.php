@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3> Pizza Orders </h3></div>

                <div class="card-body">
                @forelse($pizzas as $key=>$pizza)
                    <div>
                        <h4><a href="/pizzas/{{ $pizza->id}}">{{ $key + 1 }} {{ $pizza->name }}</a></h4>
                    </div>

                    @empty

                    <h4>No pizza orders at the moment</h4>
                    <a href="/home">Home</a>
                @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection