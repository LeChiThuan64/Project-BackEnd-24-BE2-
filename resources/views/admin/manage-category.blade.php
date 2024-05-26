@extends('admin.nav')
@section('title', 'Manage Product Type')
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
    @if (session('delete-success'))
        <div class="alert alert-success">
            {{ session('delete-success') }}
        </div>
    @endif
    @if (session('delete-failure'))
        <div class="alert alert-danger">
            {{ session('delete-failure') }}
        </div>
    @endif
    <h1>Manage Category</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="{{ url('/manage-category/page') }}"> <i
                                    class="icon-plus"></i>
                            </a></span>
                        <h5>Categories</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Category Id</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="">
                                        <td> {{ $category['id'] }} </td>
                                        <td>{{ $category['name'] }}</td>

                                        <td>
                                            <a href="{{ route('edit-category', ['id' => $category->id]) }}"
                                                class="btn btn-success btn-mini">Edit</a>

                                            <form action="{{ route('category.delete', $category->id) }}" method="POST"
                                                class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-mini delete-cate-btn"
                                                    onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END CONTENT -->
@endsection
