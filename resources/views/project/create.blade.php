@extends('project.main.master')

@section('title','Add Product')

@section('index')
    <div class="container" style="height: 72vh; width:100%;">
        <form action="{{ url('/product')}}" method="post">

            @csrf

            <a href="{{ route('product.index') }}" class="btn text-white btn-outline-danger btn-lg">Go back</a> <br>

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
            <div class="form-group">
              <label for="">Name:</label>
                 <input type="text" name="name" id="" class="form-control" placeholder="Ex- Book" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="price" id="" class="form-control" placeholder="Ex: 100" value="{{old('price')}}">
            </div>
            <div class="d-flex justify-content-center align-item-center">
                <input type="submit" value="Submit Form" class="btn btn-success btn-lg">
            </div>

        </form>
    </div>
@endsection