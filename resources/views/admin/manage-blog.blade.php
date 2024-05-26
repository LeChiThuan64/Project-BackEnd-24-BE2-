@extends('admin.nav')
@section('title', 'Manage Product')
@section('content')
    {{-- @if (session('add-success'))
        <div class="alert alert-success">
            {{ session('add-success') }}
        </div>
    @endif
    @if (session('update-success'))
        <div class="alert alert-success">
            {{ session('update-success') }}
        </div>
    @endif --}}
    <h1>Manage Blogs</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="{{ url('add-blog') }}"> <i
                                    class="icon-plus"></i>
                            </a></span>
                        <h5>Products</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>        
                                                        </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr class="">
                                        <td>{{$blog->title}}</td>
                                        <td> <?php
                                            $content = trim(strip_tags($blog['content']));
                                            if (strlen($content) >= 100) {
                                                $content = mb_substr($content, 0, mb_strpos($content, ' ', 100));
                                            }
                                            echo $content;?></td>
                                        <td>{{$blog->update_at}}</td>
                                        <td>{{$blog->create_at}}</td>
                                        <td>
                                            <a href="{{url('edit-blog/'.$blog->id)}}"
                                                class="btn btn-success btn-mini">Edit</a>
                                            <form action="{{ route('blog.delete', $blog->id) }}" method="POST"
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
                            <ul class="pagination">
                                <li class="active"><a href="">1</a>
                                </li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
