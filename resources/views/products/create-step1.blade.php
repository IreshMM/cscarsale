@extends('layout.layout')

@section('content')
    <h1>Add Car Details - Step 1</h1>
    <hr>
    <form action="/products/create-step1" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Choose your Model</label>
            <input type="text" class="form-control" id="taskTitle"  name="car_model">
        </div>
        <div class="form-group">
            <label for="description">Year</label>
            <select class="form-control" name="year">
                @foreach(range(2000, 2018) as $year)
                    <option value="{{$year}}"selected="selected">{{$year}}</option>
                @endforeach
             </select>
        </div>
        <div class="form-group">
            <label for="description">Transsmission</label>
            <select class="form-control" name="transmission">
                <?php
                    $transmissions = ['Automatic', 'Tiptronic', 'Manual'];
                    foreach($transmissions as $transmission) {
                        echo "<option value=\"$transmission\" selected=\"selected\">$transmission</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Fuel</label>
            <select class="form-control" name="fuel">
                <?php
                    $fuelTypes = ['petrol', 'Disel', 'Elctro','Hybrid'];
                    foreach($fuelTypes as $fuelType) {
                        echo "<option value=\"$fuelType\" selected=\"selected\">$fuelType</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Engine capacity</label>
            <input type="text"  value="" class="form-control" id="productAmount" name="engine"/>
        </div>
       
        <div class="form-group">
            <label for="description">Condition</label>
            <select class="form-control" name="condition">
                <?php
                    $conditions = ['Recondition', 'Used', 'New'];
                    foreach($conditions as $condition) {
                        echo "<option value=\"$condition\" selected=\"selected\">$condition</option>";
                    }
                ?>
            </select>
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
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
@endsection