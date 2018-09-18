@extends('layout.layout')

@section('content')
    <h1>Add Car DEtails - Step 2</h1>
    <hr>
    <form action="/products/create-step1-2" method="post">
        {{ csrf_field() }}
       
        <div class="form-group">
                <label for="title">Mileage</label>
                <input type="text" class="form-control" id="taskTitle"  name="mileage">
            </div>
       
        <div class="form-group">
            <label for="description">Price</label>
            <input type="text" class="form-control" id="productAmount" name="price"/>
        </div>
        <div class="form-group">
            <label for="description">Price Condition</label>
            <select class="form-control" name="price_condition">
                    <?php
                    $price_conditions = ['None', 'Negotiable', ''];
                    foreach($price_conditions as $price_condition) {
                        echo "<option value=\"$price_condition\" selected=\"selected\">$price_condition</option>";
                    }
                ?>
                </select>
        </div>
       
       
        <div class="form-group">
            <label for="description">Colour</label>
            <input type="text"  class="form-control" id="productAmount" name="color"/>
        </div>
        
       
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea type="text"  class="form-control" id="taskDescription" name="description"></textarea>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Add Product Image</button>
    </form>
@endsection