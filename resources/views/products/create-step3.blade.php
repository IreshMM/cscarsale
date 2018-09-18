@extends('layout.layout')

@section('content')
    <h1>Add Car Details - Step 3</h1>
    <hr>
    
    <h3>Review Car Details</h3>
    <form action="/products/store" method="post" >
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>Model:</td>
                <td><strong>{{$product->car_model}}</strong></td>
            </tr>
            <tr>
                <td>Year:</td>
                <td><strong>{{$product->year}}</strong></td>
            </tr>
            <tr>
                <td>Transmission:</td>
                <td><strong>{{$product->transmission}}</strong></td>
            </tr>
            <tr>
                <td>Fuel:</td>
                <td><strong>{{$product->fuel}}</strong></td>
            </tr>
            <tr>
                <td>engine:</td>
                <td><strong>{{$product->engine}}</strong></td>
            </tr>
            <tr>
                <td>Mileage:</td>
                <td><strong>{{$product->mileage}}</strong></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><strong>{{$product->price}}</strong></td>
            </tr>
            <tr>
                <td>Product Description:</td>
                <td><strong>{{$product->description}}</strong></td>
            </tr>
            <tr>
                <td>Product Image:</td>
                <td><strong><img alt="Product Image" src="/storage/productimg/{{$product->productImg}}"/></strong></td>
            </tr>
        </table>
        <a type="button" href="/products/create-step1" class="btn btn-warning">Back to Step 1</a>
        <a type="button" href="/products/create-step1-2" class="btn btn-warning">Back to Step 2</a>
        <a type="button" href="/products/create-step2" class="btn btn-warning">Back to Step 3</a>
        <button type="submit" class="btn btn-primary">Save Details</button>
    </form>
@endsection