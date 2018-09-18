@extends('layout.layout')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Model</th>
            <th scope="col">Year</th>
            <th scope="col">Transsmission</th>
            <th scope="col">Fuel</th>
            <th scope="col">Engine</th>
            <th scope="col">Condition</th>
            <th scope="col">Mileage</th>
            <th scope="col">Price</th>
            <th scope="col">color</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td><a href="/tasks/{{$product->id}}">{{$product->title}}</a></td>
                <td>{{$product->car_model}}</td>
                <td>{{$product->year}}</td>
                <td>{{$product->transmission}}</td>
                <td>{{$product->fuel}}</td>
                <td>{{$product->engine}}</td>
                <td>{{$product->condition}}</td>
                <td>{{$product->mileage}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->color}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection