@extends('layout.index')

@section('content')

<div class="container">

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif
<h1>Create New Inventory Entry</h1>

<form action="{{ route('store') }}" method="post">

@csrf
@method('POST')

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="type_of_goods">type_of_goods</label>
      <input type="text" class="form-control" id="type_of_goods" name="type_of_goods" placeholder="type_of_goods" >
    </div>
    <div class="form-group col-md-6">
      <label for="manufacturer">Manufacturer</label>
      <input type="text" class="form-control" id="manufacturer" name="manufacturer"  placeholder="manufacturer">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="car_type">car_type</label>
      <input type="text" class="form-control" id="car_type" name="car_type"  placeholder="car_type">
    </div>
    <div class="form-group col-md-6">
      <label for="car_plate">car_plate</label>
      <input type="text" class="form-control" id="car_plate" name="car_plate"  placeholder="car_plate">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="driver_id">driver_id</label>
      <input type="text" class="form-control" id="driver_id" name="driver_id" placeholder="driver_id">
    </div>
    <div class="form-group col-md-6">
      <label for="driver_name">driver_name</label>
      <input type="text" class="form-control" id="driver_name" name="driver_name"  placeholder="driver_name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dispatch_time">dispatch_time</label>
      <input type="time" class="form-control" id="dispatch_time" name="dispatch_time"  placeholder="dispatch_time">
    </div>
    <div class="form-group col-md-6">
      <label for="dispatch_date">dispatch_date</label>
      <input type="date" class="form-control" id="dispatch_date" name="dispatch_date"  placeholder="dispatch_date">
    </div>
  </div>
  <div class="">
    
    <div class="form-group">
      <label for="additional_info">additional_info</label>
      <textarea name="additional_info" id="additional_info" cols="30" rows="5" name="additional_inf"  class="form-control"></textarea>
    </div>
  </div>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary">Add</button>
  </div>
  
</form>
</div>
@endsection