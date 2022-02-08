@extends('contacts.layout')
@section('content')


<form action="{{ url('contact') }}" method="post">
  {!! csrf_field() !!}
  <label>Name</label></br>
  <input type="text" name="name" id="name" class="form-control"></br>
  <label>Address</label></br>
  <input type="text" name="address" id="address" class="form-control"></br>
  <label>Mobile</label></br>
  <input type="text" name="phone" id="phone" class="form-control"></br>
  <input type="submit" value="Save" class="btn btn-success"></br>
</form>


@stop