@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order a Pizza</div>

                <div class="card-body">
                        <form action="/pizzas" method="post">
                            @csrf 

                            <div class="form-group">
                                    <label for="name"><strong>Name: </strong></label>
                                    <input name="name" type="text" class="form-control" value="name"
                                           id="name" placeholder="Enter Name">

                                    
                            </div>

                            <div class="form-group mt-4">
                                    <label for="type"><strong>Choose Pizza Type: </strong></label>
                                    <div class="mt-2">
                                    <select name="type" id="type">
                                        <option value="Margarita">Margarita</option>
                                        <option value="Hawaiian">Hawaiian</option>
                                        <option value="Veg Supreme">Veg Supreme</option>
                                        <option value="Volcano">Volcano</option>
                                    </select>
                                    </div>
                                    


                            </div>

                            <div class="form-group mt-4">
                                    <label for="base"><strong>Choose Pizza Base: </strong></label>
                                    <div class="mt-2">
                                    <select name="base" id="base">
                                        <option value="Cheesy Crust">Cheesy Crust</option>
                                        <option value="Garlic Crust">Garlic Crust</option>
                                        <option value="Thin & Crispy">Thin & crispy</option>
                                        <option value="Thick">Thick</option>
                                    </select>                  
                                    </div>
                                    

                                    
                            </div>

                            <div class="form-group mt-4">
                                    <fieldset>
                                    <label><strong>Extra toppings;</strong> </label>
                                    <div class="mt-2">
                                        <input type="checkbox" name="toppings[]" value="Mushrooms"> Mushrooms<br />
                                        <input type="checkbox" name="toppings[]" value="Peppers"> Peppers<br />
                                        <input type="checkbox" name="toppings[]" value="Garlic"> Garlic<br />
                                        <input type="checkbox" name="toppings[]" value="Olives"> Olives<br />
                                    </div>
                                        
                                    </fieldset>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Order Pizza</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
