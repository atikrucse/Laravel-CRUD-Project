@extends('project.main.master')

@section('title','Index page')
    
@section('index')


        <div class=" container  bg-light " style="height: 72vh; width:100%;">
            <div class="row mb-1">
                <div class="col-lg-6 text-center p-2">
                    <button class="btn btn-secondary btn-outline-success btn-lg text-white">Product List</button>
                </div>

                <div class="col-lg-6 text-center p-2">
                    <a href="{{ route('product.create') }}" class="btn  btn-outline-success text-danger">+ Add Product</a>
                </div>
            </div>

            {{-- Show Success message --}}

            @if (session() -> has('success'))
                <div class="alert alert-success">
                    {{session() -> get('success')}}
                </div>
            @endif

            {{-- End Success Message --}}

            {{-- table Start --}}

            <table class="table table-bordered bg-dark text-white">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produc as $data)
                    <tr>
                        <td>{{$data -> id}}</td>
                        <td>{{$data -> name}}</td>
                        <td>{{$data -> price}}</td>
                        <td>
                            <a href="{{ route('product.show', $data -> id) }}" class="btn btn-outline-success btn-lg">Show</a>
                        </td>
                        <td>
                            <a href="{{ route('product.edit', $data -> id) }}" class="btn btn-outline-success btn-lg">Update</a>
                        </td>
                        <td>
                            <form action="{{ route('product.destroy',$data -> id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>

            {{-- table End --}}
            <div>
                <div class="d-flex justify-content-center align-item-center">
                    {{$produc ->links()}}
                </div>
            </div>


        </div>



@endsection

