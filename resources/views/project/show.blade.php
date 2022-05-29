@extends('project.main.master')

@section('title','Show Product')

@section('index')
    <div class="jumbutron bg-info text-center" style="height: 72vh; width:100%;">
        <h3 class="bg-warning p-3">Show Detail</h3>
        <h4>ID: {{$product -> id}}</h4>
        <h4>Name: {{$product -> name}}</h4>
        <h4>Price: {{$product -> price}}</h4>
    </div>
@endsection