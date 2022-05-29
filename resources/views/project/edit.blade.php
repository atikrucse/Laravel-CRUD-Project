@extends('project.main.master')

@section('title','Edit page')

@section('index')
<div class="container" style="height: 72vh; width:100%;">

    {{-- Error Message --}}

        @if ($errors -> any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- End Error Message --}}

    <form action="{{ route('product.update', $product -> id) }}" method="post">

        @csrf

        @method('PUT')

        <a href="{{ route('product.index') }}" class="btn text-white btn-outline-danger btn-lg">Go back</a> <br>

        <div class="form-group">
          <label for="">Name:</label>
             <input type="text" name="name" id="" class="form-control" placeholder="Ex- Book" value="{{$product -> name}}">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name="price" id="" class="form-control" placeholder="Ex: 100" value="{{$product -> price }}">
        </div>
        <div class="d-flex justify-content-center align-item-center">
            <input type="submit" value="Submit Edited Information" class="btn btn-success btn-lg">
        </div>

    </form>
</div>
@endsection