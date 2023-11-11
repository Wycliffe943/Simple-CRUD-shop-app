@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header"><h1>Order For {{ $pizza->name }}</h1></div>

                <div class="card-body">
                    <p><strong>Type -</strong> {{ $pizza->type}}</p>
                    <p><strong>Base -</strong> {{ $pizza->base}}</p>
                    <p><strong>Extra Toppings: </strong> </p>
                    <ul>
                        @foreach($pizza->toppings as $topping)
                            <li>{{ $topping }}</li>
                        @endforeach
                    </ul>
                    
                </div>

                <div class="card-footer">
                    <form action="/pizzas/{{ $pizza->id}} }}" method="post">
                        
                        @method('DELETE')
                        @csrf

                        <button class="btn btn-sm btn-outline-danger">Complete Order</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
