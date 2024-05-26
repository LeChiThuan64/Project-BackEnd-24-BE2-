@extends('admin.nav')
@section('title', 'Manage Product')
@section('content')
    @if (session('add-success'))
        <div class="alert alert-success">
            {{ session('add-success') }}
        </div>
    @endif
    @if (session('update-success'))
        <div class="alert alert-success">
            {{ session('update-success') }}
        </div>
    @endif
    <h1>Manage Products</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="{{ url('add-product') }}"> <i
                                    class="icon-plus"></i>
                            </a></span>
                        <h5>Products</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price (đ)</th>
                                    <th>Quantity</th>
                                    <th>Featured</th>
                                    <th>Discount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr class="">
                                        <td width="250">
                                            @foreach ($product->images as $image)
                                                <img src="{{ asset("app/images/products/{$image->name}") }}"
                                                    style="width:100%">
                                            @endforeach
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}đ</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->feature }}</td>
                                        <td>{{ $product->discount }}</td>
                                        <td>
                                            <a href="{{ url('form-edit-product', $product->id) }}"
                                                class="btn btn-success btn-mini">Edit</a>
                                            <form action="{{ route('product.delete', $product->id) }}" method="POST"
                                                class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-danger btn-mini delete-btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            {{ $products->links('vendor.pagination.default') }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
